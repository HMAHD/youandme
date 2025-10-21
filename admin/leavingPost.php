<?php

include_once 'Database.php';
include_once 'Function.php';

// Get POST data
$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$text = isset($_POST['text']) ? trim($_POST['text']) : '';
$time = time();

// Validate inputs first
if (empty($name) || empty($text)) {
    echo "5"; // Invalid form fields
    exit;
}

$Filter_Name = replaceSpecialChar($name);
$Filter_Text = replaceSpecialChar($text);
$Filter_Time = replaceSpecialChar((string)$time);

// Validate filtered inputs
if (empty($Filter_Name) || empty($Filter_Text)) {
    echo "5"; // Invalid form fields
    exit;
}

// Get client IP
$Filter_IP = $_SERVER['REMOTE_ADDR'];

// Handle IP geolocation with error handling
$User_City = 'Unknown';
if (!empty($Filter_IP) && $Filter_IP !== '127.0.0.1' && $Filter_IP !== '::1') {
    try {
        $User_City = get_ip_city_New($Filter_IP);
        if (empty($User_City)) {
            $User_City = 'Unknown';
        }
    } catch (Exception $e) {
        $User_City = 'Unknown';
    }
}

// Prevent multiple form submissions by checking if cookie is set
if (isset($_COOKIE["KiCookie"])) {
    echo "8"; // Already submitted within the time limit (cookie is set)
    exit;
}

// Handle POST request
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo "50"; // Invalid request method
    exit;
}

// Validate IP address (allow private IPs for local testing)
if (!filter_var($Filter_IP, FILTER_VALIDATE_IP)) {
    echo "4"; // Invalid IP
    exit;
}

// Prepare SQL query to insert data into 'leaving' table
$charu = "INSERT INTO leaving (name, QQ, text, time, ip, city) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($charu);

if ($stmt === false) {
    echo "50"; // Database preparation error
    exit;
}

// Use a default value for QQ since we're not using it anymore
$defaultQQ = "0";
$stmt->bind_param("ssssss", $Filter_Name, $defaultQQ, $Filter_Text, $Filter_Time, $Filter_IP, $User_City);

// Execute the query
$result = $stmt->execute();

// Close statement
$stmt->close();

// Check if the query execution was successful
if ($result) {
    // Set cookie to prevent multiple submissions
    setcookie("KiCookie", $Filter_IP, time() + 3600 * 24);
    echo "1"; // Success
} else {
    echo "0"; // Failed to insert
}
?>
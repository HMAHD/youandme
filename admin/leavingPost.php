<!--
 * @Version：You & Me 2.0
 * @Author: Akash
 * @Date: 2024-11-08 10:00:00
 * @LastEditTime: 2024-11-08
 * @Description: Of course, bad code can be cleaned up. But it’s very expensive.
 * @Copyright (c) 2024 by Akash All Rights Reserved.
 * @Update : code changed to work with anonymous messaging
-->
<?php

include_once 'Database.php';
include_once 'Function.php';

// Get POST data
$name = trim($_POST['name']);
$text = trim($_POST['text']);
$time = time();
$Filter_Name = replaceSpecialChar($name);
$Filter_Text = replaceSpecialChar($text);
$Filter_Time = replaceSpecialChar($time);

// Get client IP and city (can be updated based on your function to get user IP and city)
$Filter_IP = $_SERVER['REMOTE_ADDR'];
$User_City = get_ip_city_New($Filter_IP);

// Prevent multiple form submissions by checking if cookie is set
$file = $_SERVER['PHP_SELF'];

if (!$_COOKIE["KiCookie"]) {

    // Handle POST request
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        // Validate inputs
        if (!empty($Filter_Name) && !empty($Filter_Text)) {

            // Validate IP address
            if (filter_var($Filter_IP, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE)) {

                // Prepare SQL query to insert data into 'leaving' table
                $charu = "INSERT INTO leaving (name, QQ, text, time, ip, city) VALUES (?, ?, ?, ?, ?, ?)";
                $stmt = $conn->prepare($charu);
                // Use a default value for QQ since we're not using it anymore
                $defaultQQ = "0";
                $stmt->bind_param("ssssss", $Filter_Name, $defaultQQ, $Filter_Text, $Filter_Time, $Filter_IP, $User_City);

                // Execute the query
                $result = $stmt->execute();

                // Check if the query execution was successful
                if (!$result) {
                    echo "Error: " . $stmt->error;
                }

                $stmt->fetch();
            } else {
                echo "4"; // Invalid IP
            }
        } else {
            echo "5"; // Invalid form fields
        }

        // If the data was inserted successfully, send a success response
        if ($result) {
            echo "1"; // Success
            setcookie("KiCookie", $Filter_IP, time() + 3600 * 24); // Set cookie to prevent multiple submissions
        } else {
            echo "0"; // Failed to insert
        }
    } else {
        echo "<script>alert('Illegal operation, behavior has been recorded');location.href = 'warning.php?route=$file';</script>";
    }
} else {
    echo "8"; // Already submitted within the time limit (cookie is set)
}
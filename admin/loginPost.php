<?php
session_start();
@($user = $_POST['adminName']);
@($pw = $_POST['pw']);
include_once "Database.php";

// Optional Google reCAPTCHA v2 Invisible verification
if (!empty($recaptcha_site_key) && !empty($recaptcha_secret_key)) {
    $captchaToken = isset($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response'] : '';
    if (empty($captchaToken)) {
        die("<script>alert('Captcha verification failed. Please try again.');history.back();</script>");
    }
    $verifyUrl = 'https://www.google.com/recaptcha/api/siteverify';
    $postData = http_build_query([
        'secret' => $recaptcha_secret_key,
        'response' => $captchaToken,
        'remoteip' => (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '')
    ]);
    $options = [
        'http' => [
            'method'  => 'POST',
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'content' => $postData,
            'timeout' => 8
        ]
    ];
    $context  = stream_context_create($options);
    $verifyResp = @file_get_contents($verifyUrl, false, $context);
    $verified = false;
    if ($verifyResp !== false) {
        $verifyJson = json_decode($verifyResp, true);
        $verified = isset($verifyJson['success']) && $verifyJson['success'] === true;
    }
    if (!$verified) {
        die("<script>alert('Captcha verification failed. Please try again.');history.back();</script>");
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sql = "select * from login where user =?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $USER);
    $USER = mysqli_real_escape_string($conn, $user);
    $PW = md5($pw);
    $stmt->bind_result($id, $Login_user, $Login_pw);
    $result = $stmt->execute();
    if (!$result)
        echo "Error message:" . $stmt->error;
    $stmt->fetch();
}

if ($USER == $Login_user) {
    if ($PW == $Login_pw) {
        $_SESSION['loginadmin'] = $USER;
        echo "<script>alert('Login Successful Welcome to the Admin panel!');location.href = '../admin/index.php';</script>";
    } else {
        //incorrect password
        die("<script>alert('Login failed, wrong username or password!!!!');history.back();</script>");
    }
} else {
    //User name error
    die("<script>alert('Login failed, wrong username or password!!!!');history.back();</script>");
}

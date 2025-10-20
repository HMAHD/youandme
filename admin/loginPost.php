<?php
session_start();
@($user = $_POST['adminName']);
@($pw = $_POST['pw']);
include_once "Database.php";

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

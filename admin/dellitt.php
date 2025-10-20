<?php
session_start();
include_once 'connect.php';

$file = $_SERVER['PHP_SELF'];

if (isset($_SESSION['loginadmin']) && $_SESSION['loginadmin'] <> '') {
    $id = $_GET['id'];
    if (is_numeric($id)) {
        $sql = "delete from article where id = $id";
        $result = mysqli_query($connect, $sql);
        if ($result) {
            echo "<script>alert('Article deletion successful');location.href = 'littleSet.php';</script>";
        } else {
            echo "<script>alert('Article deletion failed');history.back();</script>";
        }
    } else {
        echo "<script>alert('Invalid parameters');history.back();</script>";
    }
} else {
    echo "<script>alert('Illegal operation, action has been recorded');location.href = 'warning.php?route=$file';</script>";
}


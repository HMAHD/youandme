<?php
session_start();
include_once 'connect.php';

if (isset($_SESSION['loginadmin']) && $_SESSION['loginadmin'] <> '') {
    $id = $_GET['id'];
    if (is_numeric($id)) {
        $sql = "delete from loveImg where id = $id";
        $result = mysqli_query($connect, $sql);
        if ($result) {
            echo "<script>alert('Delete Album Successfully');location.href = 'loveImgSet.php';</script>";
        } else {
            echo "<script>alert('Failed to delete album)';history.back();</script>";
        }
    } else {
        echo "<script>alert('parameter error');history.back();</script>";
    }

} else {
    echo "<script>alert('Illegal operation. Behavior recorded.');location.href = 'warning.php?route=$file';</script>";
}


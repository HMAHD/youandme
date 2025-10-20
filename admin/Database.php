<?php
/*
 * @Page：Database preprocessing connections
 * @Version：You & Me 2.0
 * @Author: Akash
 * @Date: 2024-11-18 10:00:00
 * @LastEditTime: 2024-11-18
 * @Description: Of course, bad code can be cleaned up. But it’s very expensive.
 * @Copyright (c) 2024 by Akash All Rights Reserved.
 */
error_reporting(0);
header("Content-Type:text/html; charset=utf8");
include_once __DIR__.'/Config_DB.php';
$conn = new mysqli($db_address,$db_username,$db_password,$db_name);

if ($conn->connect_error) {
    die("<script>location.href = '../admin/connectDie.php';</script>");
}
$conn->set_charset("utf8mb4");
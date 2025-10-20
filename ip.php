<!--
 * @Version：You & Me 2.0
 * @Author: Akash
 * @Date: 2024-11-09 07:00:00
 * @LastEditTime: 2024-11-08
 * @Description: Of course, bad code can be cleaned up. But it’s very expensive.
 * @Copyright (c) 2024 by Akash All Rights Reserved.
-->

<?php

include_once 'admin/Function.php';

$ip = $_SERVER['REMOTE_ADDR'];
$time = gmdate("Y-m-d/H:i:s", time() + 8 * 3600);
$gsd = get_ip_city_New($ip);
$file = "ip.txt";

$fp = fopen($file, "a");
if ($fp) {
    if (filesize($file) === 0) {
        fwrite($fp, "\xEF\xBB\xBF");
    }

    $txt = "\n\n" . "$ip" . "\n" . "$gsd" . "----" . "$time" . "\n";
    fputs($fp, $txt);
    fclose($fp);
} else {
    echo "Failed to open the file.";
}

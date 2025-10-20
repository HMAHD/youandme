<?php

/*
 * @Page: Custom Function Methods
 * @Version：You & Me 2.0
 * @Author: Akash
 * @Date: 2024-11-20 12:00:00
 * @LastEditTime: 2024-11-21
 * @Description: Of course, bad code can be cleaned up. But it’s very expensive.
 * @Copyright (c) 2024 by Akash All Rights Reserved.
 */
 
if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $list = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
    $_SERVER['REMOTE_ADDR'] = $list[0];
    $Filter_IP = $_SERVER['REMOTE_ADDR'];
} else {
    $Filter_IP = $_SERVER['REMOTE_ADDR'];
}

function checkQQ($qq)
{
    if (preg_match("/^[1-9][0-9]{4,}$/", $qq)) {
        return true;
    } else {
        return false;
    }
}

function replaceSpecialChar($Symbol)
{
    $Filter = "/\ |\/|\~|\!|\@|\-|\=|\#|\\$|\%|\^|\&|\:|\*|\"|\(|\)|\_|\+|\{|\}|\<|\>|\?|\[|\]|\,|\/|\;|\'|\`|\=|\\\|\||/";
    return preg_replace($Filter, "", $Symbol);
}

function time_tran($time)
{
    $text = '';
    if (!$time) {
        return $text;
    }
    $current = time();
    $t = $current - $time;
    $retArr = array('Just now', 'seconds ago', 'minutes ago', 'hours ago', 'days ago', 'months ago', 'years ago');
    switch ($t) {
        case $t < 0: // Time is greater than the current time, return formatted date
            $text = date('Y-m-d', $time);
            break;
        case $t == 0: // Just now
            $text = $retArr[0];
            break;
        case $t < 60: // Few seconds ago
            $text = $t . $retArr[1];
            break;
        case $t < 3600: // Few minutes ago
            $text = floor($t / 60) . $retArr[2];
            break;
        case $t < 86400: // Few hours ago
            $text = floor($t / 3600) . $retArr[3];
            break;
        case $t < 2592000: // Few days ago
            $text = floor($t / 86400) . $retArr[4];
            break;
        case $t < 31536000: // Few months ago
            $text = floor($t / 2592000) . $retArr[5];
            break;
        default: // Few years ago
            $text = floor($t / 31536000) . $retArr[6];
    }
    return $text;
}




function get_ip_city_New($ip)
{
    $ch = curl_init();
    $url = 'https://www.inte.net/tool/ip/api.ashx?ip='.$ip.'&datatype=json';
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    $location = curl_exec($ch);
    curl_close($ch);
    $data = json_decode($location, true);
    return $data['data'][0];
}

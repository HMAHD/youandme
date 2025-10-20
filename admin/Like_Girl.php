<?php
session_start();
include_once 'Nav.php';

$url = 'https://www.diary.us.kg/youandme-v5.php';
$lines_array = file($url);
$lines_string = implode('', $lines_array);
$userurl = 'https://www.diary.us.kg/youandme';
$userarray = file($userurl);
$userstring = implode('', $userarray);

?>

<style>
    .btn-success {
        border-radius: 10px;
        border: 2px solid #fff;
    }

    .btn-success:hover {
        background-color: 0;
        border-color: 0;
        opacity: 0.7;
    }
</style>
<!-- 
 * @Version：You & Me 2.0
 * @Author: Akash
 * @Date: 2024-11-18 10:00:00
 * @LastEditTime: 2024-11-23
 * @Description: Of course, bad code can be cleaned up. But it’s very expensive.
 * @Copyright (c) 2024 by Akash All Rights Reserved.
-->

<div class="row">

    <div class="col-sm-12">
        <?php echo ($userstring); ?>
    </div>

    <div class="col-md-12">
        <?php echo ($lines_string); ?>
    </div>

</div>

<?php
include_once 'Footer.php';
?>

</body>

</html>
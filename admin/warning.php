<!--
 * @Version：You & Me 2.0
 * @Author: Akash
 * @Date: 2024-11-30 22:00:00
 * @LastEditTime: 2024-12-01
 * @Description: Of course, bad code can be cleaned up. But it’s very expensive.
 * @Copyright (c) 2024 by Akash All Rights Reserved.
-->
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8" />
    <title>Warning Illegal request</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin panel" name="description" />
    <meta content="Akash" name="author" />

    <!-- App css -->
    <link href="/admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/admin/assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <link href="/Style/css/loading.css" rel="stylesheet">
</head>

<div id="Loadanimation" style="z-index:999999;">
    <div id="Loadanimation-center">
        <div id="Loadanimation-center-absolute">
            <div class="xccx_object" id="xccx_four"></div>
            <div class="xccx_object" id="xccx_three"></div>
            <div class="xccx_object" id="xccx_two"></div>
            <div class="xccx_object" id="xccx_one"></div>
        </div>
    </div>
</div>
<script src="../Style/jquery/jquery.min.js"></script>
<script>
    $(function() {
        $("#Loadanimation").fadeOut(1000);
    });
</script>

<?php

include_once 'Database.php';
include_once 'Function.php';

$file = isset($_GET['route']) ? $_GET['route'] : 'unknown';
$ip = $_SERVER["REMOTE_ADDR"];
$gsd = get_ip_city_New($ip);
$time = gmdate("Y-m-d H:i:s", time() + 8 * 3600);

$ipcharu = "insert into warning (ip,gsd,time,file) values (?,?,?,?)";
$stmt = $conn->prepare($ipcharu);
$stmt->bind_param("ssss", $ip, $gsd, $time, $file);
$result = $stmt->execute();
if (!$result) echo "Error message:" . $stmt->error;
$stmt->fetch();

?>

<style>
    .card {
        border-radius: 15px;
    }

    .card-header.pt-4.pb-4.text-center.bg-primary {
        border-radius: 15px 15px 0 0;
    }

    .btn-primary {
        padding: 10px 25px;
        border-radius: 20px;
    }

    .info {
        margin: ;
        margin-bottom: 20px;
        font-size: 1.2rem;
    }
</style>

<body class="authentication-bg">

    <div class="account-pages mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card">

                        <!-- Logo -->
                        <div class="card-header pt-4 pb-4 text-center bg-primary">
                            <a href="##">
                                <span
                                    style="color: #fff;font-size: 1.3rem;font-family: 'arial';font-weight: 700;">Your behavior has been recorded in the database</span>
                            </a>
                        </div>

                        <div class="card-body p-4">

                            <div class="text-center w-75 m-auto">
                                <h4 class="text-dark-50 text-center mt-0 font-weight-bold">You & Me 2.0</h4>
                                <div class="info">A gentle reminder to stop what you're doing<i style="color: #ff9b9b;"><?php echo $ip ?></i></div>
                            </div>
                            <div class="text-center w-75 m-auto" style="margin-bottom: 40px!important;">
                                <img src="https://i.ibb.co/Lrvt7MW/Pngtree-cute-emoji-face-with-police-5893043.png" style="width: 100%;border-radius: 10px;box-shadow: 0 0 35px 0 rgb(154 161 171 / 25%);">
                            </div>

                            <div class="form-group mb-0 text-center">
                                <a href="https://wa.me/+94767378901?text=Hello%20I%20need%20help%20me">
                                    <button
                                        class="btn btn-primary" type="submit"> I have questions
                                    </button>
                                </a>
                            </div>

                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                </div>
                <!-- end row -->

            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
    </div>
    <!-- end page -->

    <footer class="footer footer-alt">
        Copyright © 2024-<?php echo date("Y") ?> Akash Hasendra. && <a href="https://akash.lk" target="_blank">You & Me</a> All
        Rights Reserved.
    </footer>

    <!-- App js -->
    <script src="/admin/assets/js/app.min.js"></script>
</body>

</html>
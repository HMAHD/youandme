<!--
 * @Version：You & Me 2.0
 * @Author: Akash
 * @Date: 2024-11-17 09:00:00
 * @LastEditTime: 2024-11-19
 * @Description: Of course, bad code can be cleaned up. But it’s very expensive.
 * @Copyright (c) 2024 by Akash All Rights Reserved.
-->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Database connection failure</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="You & Me 2.0" name="description" />
    <meta content="Akash" name="author" />

    <!-- App css -->
    <link href="/admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/admin/assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <link href="/Style/css/loading.css" rel="stylesheet">
</head>

<style>
    .card {
        border-radius: 15px;
    }

    .card-header.pt-4.pb-4.text-center.bg-primary {
        border-radius: 15px 15px 0 0;
    }

    .bg-primary {
        background-color: #e91e63 !important;
    }

    .btn-primary {
        padding: 10px 25px;
        border-radius: 20px;
    }

    .info {
        margin-bottom: 20px;
        font-size: 1rem;
    }

    .mar_top {
        margin-top: 20px;
    }

    .btn-success {
        border-radius: 20px;
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
                                    style="color: #fff;font-size: 1.3rem;font-family: '宋体';font-weight: 700;">Database connection failure</span>
                            </a>
                        </div>

                        <div class="card-body p-4">

                            <div class="text-center w-75 m-auto">
                                <h4 class="text-dark-50 text-center mt-0 font-weight-bold">You & Me 2.0</h4>
                                <div class="info">Please check if the database information is configured correctly<i style="color: #ff9b9b;"></i></div>
                            </div>
                            <div class="text-center w-75 m-auto" style="margin-bottom: 40px!important;">
                                <img src="https://img.gejiba.com/images/2bce316a4c0cb6754127769d614d4a82.png"
                                    style="width: 100%;border-radius: 10px;box-shadow: 0 5px 12px #b9c7dc;" alt="">
                            </div>
                            <div class="text-center info">After successful configuration, you can go to the admin directory to delete the current page<i style="color: #ff9b9b;"></i></div>

                            <div class="form-group mb-0 text-center">
                                <a href="https://diary.us.kg/youandme">
                                    <button
                                        class="btn btn-primary" type="submit"> Configuration Tutorial
                                    </button>
                                </a>
                                <div class="mar_top">
                                    <a href="../admin">
                                        <button
                                            class="btn btn-success" type="submit"> Configured successfully Click me to jump to login
                                        </button>
                                    </a>
                                </div>
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
        Copyright © 2024 Akash Hasendra. && <a href="https://akash.us.kg" target="_blank">You & Me</a> All
        Rights Reserved.
    </footer>
    <script src="../Style/jquery/jquery.min.js"></script>
    <script src="../Style/pagelir/spotlight.bundle.js"></script>
    <script>
        $(function() {
            $("img[src$=jpg],img[src$=gif],img[src$=JPG],img[src$=png],img[src$=jpeg]").addClass("spotlight").each(function() {
                this.onclick = function() {
                    return hs.expand(this)
                }
            });
        })
    </script>
    <!-- App js -->
    <script src="/admin/assets/js/app.min.js"></script>
</body>

</html>
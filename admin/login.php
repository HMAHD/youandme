<!--
 * @Version：You & Me 2.0
 * @Author: Akash
 * @Date: 2024-11-24 19:00:00
 * @LastEditTime: 2024-11-25
 * @Description: Of course, bad code can be cleaned up. But it’s very expensive.
 * @Copyright (c) 2024 by Akash All Rights Reserved.
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

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
                                <span style="color: #fff;font-size: 1.2rem;">Login</span>
                            </a>
                        </div>

                        <div class="card-body p-4">

                            <div class="text-center w-75 m-auto">
                                <h4 class="text-dark-50 text-center mt-0 font-weight-bold">You&Me 2.0</h4>
                                <p class="text-muted mb-4">Meeting you is the beginning of all stories 🎉</p>
                            </div>

                            <form action="loginPost.php" method="post" onsubmit="return check()">

                                <div class="form-group">
                                    <label for="emailaddress">User</label>
                                    <input name="adminName" class="form-control" type="text" id="emailaddress" required=""
                                        placeholder="Please enter your user name">
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input name="pw" class="form-control" type="password" required="" id="password"
                                        placeholder="Please enter your password">
                                </div>

                                <div class="form-group mb-3">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
                                        <label class="custom-control-label" for="checkbox-signin">Remember password</label>
                                    </div>
                                </div>

                                <div class="form-group mb-0 text-center">
                                    <button class="btn btn-primary" type="submit"> Log in as Admin</button>
                                </div>

                            </form>
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
    <script>
        function check() {
            //Get the 0th index in the name array and remove spaces.
            let adminName = document.getElementsByName('adminName')[0].value.trim();
            let pw = document.getElementsByName('pw')[0].value.trim();
            // Determine if the length of adminName is 0 If it is 0 then prompt a popup window
            if (adminName.length == 0) {
                alert("Please fill in the user name");
                return false;
            } else if (pw.length == 0) {
                alert("Please fill in the password");
                return false;
            }
            let user = /[a-zA-Z0-9]/g;
            let character = new RegExp("[`~!#$^&*()=|{}':;',\\[\\].<>/?~！#￥……&*（）——|{}【】‘；：”“'。，、？]");
            if (character.test(adminName)) {
                alert("User name contains special characters, please re-enter")
                return false;
            } else if (!(user.test(adminName))) {
                alert("User name only supports numbers English upper and lower case letters")
                return false;
            }

            if (character.test(pw)) {
                alert("Password contains special characters Please re-enter")
                return false;
            }



        }
    </script>

    <footer class="footer footer-alt">
        Copyright © 2024 Akash Hasendra. && <a href="https://akash.us.kg" target="_blank">You & Me</a> All
        Rights Reserved.
    </footer>

    <!-- App js -->
    <script src="/admin/assets/js/app.min.js"></script>
</body>

</html>
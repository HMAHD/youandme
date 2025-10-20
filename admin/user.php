<?php
session_start();
include_once 'Nav.php';
?>
<div class="row">

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-3">Information Configuration</h4>

                <form class="needs-validation" action="userPost.php" method="post" novalidate>
                    <div class="form-group">
                        <label for="validationCustom01">Enable Frontend Loading Animation</label>
                        <select class="form-control" id="example-select" name="Webanimation">
                            <option value="1" <?php if ($text['Animation'] == "1") { ?> selected <?php } ?>>Enable</option>
                            <option value="2" <?php if ($text['Animation'] == "2") { ?> selected <?php } ?>>Disable</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom05">Admin Name</label>
                        <input type="text" class="form-control" id="validationCustom05" placeholder="Enter Admin Name"
                            name="userName" value="<?php echo $text['userName'] ?>" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom05">Admin QQ</label>
                        <input type="text" class="form-control" id="validationCustom05" placeholder="Enter Admin QQ"
                            name="userQQ" value="<?php echo $text['userQQ'] ?>" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom04">Admin Login Username</label>
                        <?php if ($login['user'] == $adminuser) { ?><span class="badge badge-danger-lighten" style="font-size: 0.8rem;">Your account is the default account, please update it soon</span><?php } else { ?><span class="badge badge-success-lighten" style="font-size: 0.8rem;">The username must consist of letters and numbers</span> <?php } ?>
                        <input type="text" class="form-control" placeholder="Enter the new admin username"
                            name="adminName" value="<?php echo $login['user'] ?>" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom05">Admin Login Password</label>
                        <?php if ($login['pw'] == md5($adminpw)) { ?><span class="badge badge-danger-lighten" style="font-size: 0.8rem;">Your password is the default one, please update it soon</span><?php } else { ?><span class="badge badge-success-lighten" style="font-size: 0.8rem;">The password must consist of letters and numbers</span> <?php } ?>
                        <input class="form-control" name="pw" type="password" value="" placeholder="Leave blank to not change">
                    </div>

                    <div class="form-group mb-3">
                        <label for="validationCustom05">Custom Global CSS Style
                            <span class="badge badge-primary-lighten">Please write your code in CSS format</span></label>
                        <textarea name="cssCon" class="form-control" rows="5"
                            placeholder=""><?php echo $diy['cssCon'] ?></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom05">Custom Header Tags
                            <span class="badge badge-primary-lighten">You can add HTML tags or CSS links</span></label>
                        <textarea name="headCon" class="form-control" rows="5"
                            placeholder=""><?php echo $diy['headCon'] ?></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom05">Custom Footer Tags
                            <span class="badge badge-primary-lighten">You can add HTML tags or JS links</span></label>
                        <textarea name="footerCon" class="form-control" rows="5"
                            placeholder=""><?php echo $diy['footerCon'] ?></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom05">Security Code</label>
                        <span class="badge badge-danger-lighten" style="font-size: 0.8rem;">Sensitive information updates require a security code</span>
                        <input type="password" class="form-control" name="SCode" value="" placeholder="Enter the security code from the database configuration file">
                    </div>

                    <div class="form-group mb-3 text_right">
                        <button class="btn btn-primary" type="button" id="userPost">Submit Changes</button>
                    </div>
                </form>

            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>

<script>
    function check() {
        let adminName = document.getElementsByName('adminName')[0].value.trim();
        let pw = document.getElementsByName('pw')[0].value.trim();
        // Check if adminName is empty; if yes, show an alert
        if (adminName.length == 0) {
            alert("Please fill in the username");
            return false;
        }
        let user = /[a-zA-Z0-9]/g;
        let character = new RegExp("[`~!#$^&*()=|{}':;',\\[\\].<>/?~！#￥……&*（）——|{}【】‘；：”“'。，、？]");
        if (character.test(adminName)) {
            alert("Username contains special characters, update has been blocked");
            return false;
        } else if (!(user.test(adminName))) {
            alert("Username can only contain letters and numbers");
            return false;
        }
        if (pw.length >= 1) {
            if (pw.length <= 6) {
                alert("Password must be longer than six characters");
                return false;
            }
            if (character.test(pw)) {
                alert("Password contains special characters, blocked for SQL injection protection\nPlease enter a password with letters and numbers");
                return false;
            }
        }
    }
</script>

<?php
include_once 'Footer.php';
?>

</body>

</html>
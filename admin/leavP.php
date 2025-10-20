<?php
session_start();

include_once 'Nav.php';
$leavSet = "select * from leavSet order by id desc";
$Set = mysqli_query($connect, $leavSet);
$Setinfo = mysqli_fetch_array($Set);


?>
<div class="row">

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-3">Front-end Message Page Configuration</h4>

                <form class="needs-validation" action="leavPPost.php" method="post" novalidate>
                    <div class="form-group mb-3">
                        <label for="validationCustom05">Show latest messages
                            <span class="badge badge-danger-lighten"> Please fill in plain numbers. Too many intercepts will affect loading speed.</span></label>
                        <input type="text" class="form-control" id="validationCustom05" placeholder="Please enter the number of interceptions required e.g. 20"
                            name="jiequ" value="<?php echo $Setinfo['jiequ'] ?>" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom05">block blocking of prohibited words
                            <span class="badge badge-danger-lighten"> You can fill in the words you want to block without a separator.</span></label>
                        <textarea name="lanjiezf" data-toggle="maxlength" class="form-control" maxlength="225" rows="5"
                            placeholder="Please enter prohibited words"><?php echo $Setinfo['lanjiezf'] ?></textarea>
                    </div>

                    <div class="form-group mb-3">
                        <label for="validationCustom05">Blocking illegal characters
                            <span class="badge badge-danger-lighten"> No support for modification Special character blocking can prevent xss injection If you want to modify it, please go to the database to change it.</span></label>
                        <textarea data-toggle="maxlength" class="form-control" maxlength="225" rows="5" disabled
                            placeholder="Please enter illegal characters (be sure to set this, otherwise special characters will not be filtered, and there will be xss vulnerability injection)）"><?php echo $Setinfo['lanjie'] ?></textarea>
                    </div>
                    <div class="form-group mb-3 text_right">
                        <button class="btn btn-primary" type="button" id="leavPPost">Submit changes</button>
                    </div>
                </form>

            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>

<?php
include_once 'Footer.php';
?>

</body>

</html>
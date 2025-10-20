<?php
session_start();
include_once 'Nav.php';
?>
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-3">Basic Settings</h4>

                <form class="needs-validation" action="adminPost.php" method="post" onsubmit="return check()" novalidate>
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Site Title</label>
                        <input type="text" class="form-control" placeholder="Enter site title"
                            name="title" value="<?php echo $text['title'] ?>" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom02">Site Logo</label>
                        <input type="text" class="form-control" placeholder="Enter site logo text"
                            name="logo" value="<?php echo $text['logo'] ?>" required>

                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom03">Site Banner Text</label>
                        <input type="text" class="form-control" placeholder="Text to display at the top"
                            name="writing" value="<?php echo $text['writing'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="validationCustom06">Disable Avatar Background Blur Effect</label>
                        <select class="form-control" id="example-select" name="WebBlur">
                            <option value="1" <?php if ($diy['Blurkg'] == "1") { ?> selected <?php } ?>>Enable</option>
                            <option value="2" <?php if ($diy['Blurkg'] == "2") { ?> selected <?php } ?>>Disable</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="validationCustom07">Enable Frontend No-Refresh Loading</label>
                        <select class="form-control" id="example-select" name="WebPjax">
                            <option value="1" <?php if ($diy['Pjaxkg'] == "1") { ?> selected <?php } ?>>Enable</option>
                            <option value="2" <?php if ($diy['Pjaxkg'] == "2") { ?> selected <?php } ?>>Disable</option>
                        </select>
                    </div>
                    <div class="form-group mb-3 text_right">
                        <button class="btn btn-primary" type="button" id="adminPost">Submit Changes</button>
                    </div>
                </form>

            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->

    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-3">Couple Configuration</h4>

                <form class="needs-validation" action="loveadminPost.php" method="post" novalidate>
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Male Name</label>
                        <input type="text" class="form-control" placeholder="Enter male name"
                            name="boy" value="<?php echo $text['boy'] ?>" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom02">Female Name</label>
                        <input type="text" class="form-control" placeholder="Enter female name"
                            name="girl" value="<?php echo $text['girl'] ?>" required>

                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom03">Male QQ</label>
                        <input type="text" class="form-control" placeholder="Enter male QQ (used to display avatar)"
                            name="boyimg" value="<?php echo $text['boyimg'] ?>" required>

                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom04">Female QQ</label>
                        <input type="text" class="form-control" placeholder="Enter female QQ (used to display avatar)"
                            name="girlimg" value="<?php echo $text['girlimg'] ?>" required>

                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom05">Start Date</label>
                        <input type="datetime-local" class="form-control" placeholder="Enter start date"
                            name="startTime" value="<?php echo $text['startTime'] ?>" required>
                    </div>
                    <div class="form-group mb-3 text_right">
                        <button class="btn btn-primary" type="button" id="loveadminPost">Submit Changes</button>
                    </div>
                </form>

            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-3">Card Configuration & Copyright Settings</h4>

                <form class="needs-validation" action="CardadminPost.php" method="post" novalidate>
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Background Image URL</label>
                        <input type="text" class="form-control" placeholder="Enter card name"
                            name="bgimg" value="<?php echo $text['bgimg'] ?>" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Card 1 Name</label>
                        <input type="text" class="form-control" placeholder="Enter card name"
                            name="card1" value="<?php echo $text['card1'] ?>" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom02">Card 1 Description</label>
                        <input type="text" class="form-control" placeholder="Enter card description"
                            name="deci1" value="<?php echo $text['deci1'] ?>" required>

                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom03">Card 2 Name</label>
                        <input type="text" class="form-control" placeholder="Enter card name"
                            name="card2" value="<?php echo $text['card2'] ?>" required>

                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom04">Card 2 Description</label>
                        <input type="text" class="form-control" placeholder="Enter card description"
                            name="deci2" value="<?php echo $text['deci2'] ?>" required>

                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom05">Card 3 Name</label>
                        <input type="text" class="form-control" placeholder="Enter card name"
                            name="card3" value="<?php echo $text['card3'] ?>" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom05">Card 3 Description</label>
                        <input type="text" class="form-control" placeholder="Enter card description"
                            name="deci3" value="<?php echo $text['deci3'] ?>" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom05">Domain Registration Number</label>
                        <input type="text" class="form-control" placeholder="Leave blank if none" name="icp"
                            value="<?php echo $text['icp'] ?>" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom05">Site Copyright Information</label>
                        <input type="text" class="form-control" placeholder="Enter site copyright information"
                            name="Copyright" value="<?php echo $text['Copyright'] ?>" required>
                    </div>
                    <div class="form-group mb-3 text_right">
                        <button class="btn btn-primary" type="button" id="CardadminPost">Submit Changes</button>
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
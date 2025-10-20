<?php
session_start();
include_once 'Nav.php';
$absql = "SELECT * FROM about";
$resab = mysqli_query($connect, $absql);
$about = mysqli_fetch_array($resab);
?>
<form class="needs-validation" action="aboutPost.php" method="post" novalidate>
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-3">Dialog configuration - 1</h4>
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Title of conversation</label>
                        <input type="text" class="form-control" id="validationCustom01" placeholder="Please enter a title" name="title"
                            value="<?php echo $about['title'] ?>" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Conversation module background image address</label>
                        <input type="text" class="form-control" id="validationCustom01" placeholder="Please enter an image URL"
                            name="aboutimg" value="<?php echo $about['aboutimg'] ?>" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom02">Text of Dialogue 1</label>
                        <input type="text" class="form-control" id="validationCustom02" placeholder="Please fill in the conversation"
                            name="info1" value="<?php echo $about['info1'] ?>" required>

                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom03">Text of Dialogue 2</label>
                        <input type="text" class="form-control" id="validationCustom03" placeholder="Please fill in the conversation"
                            name="info2" value="<?php echo $about['info2'] ?>" required>

                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom04">Text of Dialogue 3</label>
                        <input type="text" class="form-control" id="validationCustom04" placeholder="Please fill in the conversation"
                            name="info3" value="<?php echo $about['info3'] ?>" required>

                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom05">Dialog 1 button confirmation text</label>
                        <input type="text" class="form-control" id="validationCustom05" name="btn1"
                            value="<?php echo $about['btn1'] ?>" placeholder="Please fill in the text of the confirmation button">
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom05">Dialog 1 button to cancel text</label>
                        <input type="text" class="form-control" id="validationCustom05" name="btn2"
                            value="<?php echo $about['btn2'] ?>" placeholder="Please fill in the text of the cancel button">
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-3">Dialog configuration - 2</h4>

                    <div class="form-group mb-3">
                        <label for="validationCustom01">Dialogue 2-1 text</label>
                        <input type="text" class="form-control" id="validationCustom01" placeholder="Please fill in the dialog"
                            name="infox1" value="<?php echo $about['infox1'] ?>" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom02">Dialogue 2-2 text</label>
                        <input type="text" class="form-control" id="validationCustom02" placeholder="Please fill in the dialog"
                            name="infox2" value="<?php echo $about['infox2'] ?>" required>

                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom03">Dialogue 2-3 text</label>
                        <input type="text" class="form-control" id="validationCustom03" placeholder="Please fill in the dialog"
                            name="infox3" value="<?php echo $about['infox3'] ?>" required>

                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom04">Dialogue 2-4 text</label>
                        <input type="text" class="form-control" id="validationCustom04" placeholder="Please fill in the dialog"
                            name="infox4" value="<?php echo $about['infox4'] ?>" required>

                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom05">Dialogue 2-5 text</label>
                        <input type="text" class="form-control" id="validationCustom05" name="infox5"
                            value="<?php echo $about['infox5'] ?>" placeholder="Please fill in the dialog">
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom05">Dialogue 2-6 text</label>
                        <input type="text" class="form-control" id="validationCustom05" name="infox6"
                            value="<?php echo $about['infox6'] ?>" placeholder="Please fill in the dialog">
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom05">Dialog 2-1 button text</label>
                        <input type="text" class="form-control" id="validationCustom05" name="btnx2"
                            value="<?php echo $about['btnx2'] ?>" placeholder="Please fill in the button text">
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

    </div>


    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-3">Dialog configuration - 3</h4>
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Dialogue 3-1 text</label>
                        <input type="text" class="form-control" id="validationCustom01" placeholder="Please fill in the dialog"
                            name="infof1" value="<?php echo $about['infof1'] ?>" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom02">Dialogue 3-2 text</label>
                        <input type="text" class="form-control" id="validationCustom02" placeholder="Please fill in the dialog"
                            name="infof2" value="<?php echo $about['infof2'] ?>" required>

                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom03">Dialogue 3-3 text</label>
                        <input type="text" class="form-control" id="validationCustom03" placeholder="Please fill in the dialog"
                            name="infof3" value="<?php echo $about['infof3'] ?>" required>

                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom04">Dialogue 3-4 text</label>
                        <input type="text" class="form-control" id="validationCustom04" placeholder="Please fill in the dialog"
                            name="infof4" value="<?php echo $about['infof4'] ?>" required>

                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom05">Dialog 3-1 Button Text</label>
                        <input type="text" class="form-control" id="validationCustom05" name="btnf3"
                            value="<?php echo $about['btnf3'] ?>" placeholder="Please fill in the button text">
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->


        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-3">Dialog configuration - 4</h4>
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Dialogue 4-1 text</label>
                        <input type="text" class="form-control" id="validationCustom01" placeholder="Please fill in the dialog"
                            name="infod1" value="<?php echo $about['infod1'] ?>" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom02">Dialogue 4-2 text</label>
                        <input type="text" class="form-control" id="validationCustom02" placeholder="Please fill in the dialog"
                            name="infod2" value="<?php echo $about['infod2'] ?>" required>

                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom03">Dialogue 4-3 text</label>
                        <input type="text" class="form-control" id="validationCustom03" placeholder="Please fill in the dialog"
                            name="infod3" value="<?php echo $about['infod3'] ?>" required>

                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom04">Dialogue 4-4 text</label>
                        <input type="text" class="form-control" id="validationCustom04" placeholder="Please fill in the dialog"
                            name="infod4" value="<?php echo $about['infod4'] ?>" required>

                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom05">Dialogue 4-5 text</label>
                        <input type="text" class="form-control" id="validationCustom05" name="infod5"
                            value="<?php echo $about['infod5'] ?>" placeholder="Please fill in the dialog">
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>

    <div class="form-group mb-3 text_right">
        <button class="btn btn-primary" type="button" id="aboutPost">Submit changes</button>
    </div>
</form>
<?php
include_once 'Footer.php';
?>

</body>

</html>
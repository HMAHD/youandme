<?php
session_start();
include_once 'Nav.php';
$inv_date = date("Y-m-d");
?>

<div class="row">

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-3 size_18">Add a new picture</h4>

                <form class="needs-validation" action="ImgAddPost.php" method="post" onsubmit="return check()"
                    novalidate>
                    <div class="form-group mb-3">
                        <label for="validationCustom01">date</label>
                        <input class="form-control col-sm-4" id="example-date" type="date" name="imgDatd" class="form-control" placeholder="date" value="<?php echo $inv_date ?>" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="validationCustom01">Image Description<span class="margin_left badge badge-success-lighten">Try to keep it under 25 characters </span></label>
                        <input name="imgText" type="text" class="form-control" placeholder="Please enter a picture description" value="" required>
                    </div>

                    <div class="form-group mb-3" id="img_url">
                        <label for="validationCustom01">Image URL</label>
                        <input type="text" name="imgUrl" class="form-control" placeholder="Please enter the URL of the image" value="" required>
                    </div>
                    <div class="form-group mb-3 text_right">
                        <button class="btn btn-primary" type="button" id="ImgAddPost">Add Album</button>
                    </div>
                </form>

            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>

<script>
    function check() {
        let title = document.getElementsByName('imgText')[0].value.trim();
        if (title.length == 0) {
            alert("The event cannot be null");
            return false;
        }
    }
</script>

<?php
include_once 'Footer.php';
?>

</body>

</html>
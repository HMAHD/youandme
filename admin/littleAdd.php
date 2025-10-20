<?php
session_start();
include_once 'Nav.php';
?>

<link href="/admin/editormd/css/editormd.css" rel="stylesheet">
<div class="row">

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-3 size_18">New Articles</h4>

                <form class="needs-validation" m action="littleAddPost.php" method="post" onsubmit="return check()"
                    novalidate>
                    <div class="form-group col-sm-4">
                        <label for="validationCustom01">Publisher Name</label>
                        <select class="form-control" id="example-select" name="articlename">
                            <option value="<?php echo $text['boy'] ?>"><?php echo $text['boy'] ?></option>
                            <option value="<?php echo $text['girl'] ?>"><?php echo $text['girl'] ?></option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom01">headline</label>
                        <input type="text" class="form-control" id="validationCustom01" placeholder="Please enter a title"
                            name="articletitle" required>
                    </div>
                    <div id="test-editor">
                        <textarea name="articletext"></textarea>
                    </div>
                    <div class="form-group mb-3 text_right">
                        <button class="btn btn-primary" type="button" id="littleAddPost">Publish Article</button>
                    </div>
                </form>

            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>


<script src="https://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script src="/admin/editormd/editormd.js"></script>
<script type="text/javascript">
    $(function() {
        var editor = editormd("test-editor", {
            // width  : "100%",
            // height : "100%",
            htmlDecode: true,
            path: "/admin/editormd/lib/"

        });
    });
</script>

<script>
    function check() {
        let title = document.getElementsByName('articletitle')[0].value.trim();
        let text = document.getElementsByName('articletext')[0].value.trim();
        if (title.length == 0) {
            alert("Article title cannot be empty");
            return false;
        } else if (text.length == 0) {
            alert("Article content cannot be empty");
            return false;
        }

    }
</script>

<?php
include_once 'Footer.php';
?>

</body>

</html>
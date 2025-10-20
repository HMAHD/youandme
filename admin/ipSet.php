<?php
session_start();
include_once 'Nav.php';

$ipchaxun = "select * from IPerror";
$ipres = mysqli_query($connect, $ipchaxun);
$IPinfo = mysqli_fetch_array($ipres);
?>

<div class="row">

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-3">IP blocking blackout add</h4>

                <form class="needs-validation" action="ipAddPost.php" method="post" novalidate>
                    <div class="form-group mb-3">
                        <label for="validationCustom05">IP address</label>
                        <input type="text" class="form-control" id="validationCustom05" placeholder="Please enter the IP to be blocked"
                            name="ipdz" value="" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom05">Remarks on information</label>
                        <input type="text" class="form-control" id="validationCustom05"
                            placeholder="Remarks on IP blocking (IPs that are blocked will show this remark)" name="bz" value="" required>
                    </div>
                    <div class="form-group mb-3 text_right">
                        <button class="btn btn-primary" type="button" id="ipAddPost">Submit Add</button>
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
<?php
session_start();

include_once 'Nav.php';
$ipkiki = "select * from IPerror order by id desc";
$ipki = mysqli_query($connect, $ipkiki);

?>

<link href="/admin/assets/css/vendor/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
<link href="/admin/assets/css/vendor/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
<link href="/admin/assets/css/vendor/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
<link href="/admin/assets/css/vendor/select.bootstrap4.css" rel="stylesheet" type="text/css" />
<!-- third party css end -->


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-3 size_18">IP blocking management
                    <a class="fabu" href="/admin/ipSet.php">
                        <button type="button" class="btn btn-success btn-sm right_10">
                            <i class="mdi mdi-circle-edit-outline"></i>additional
                        </button>
                    </a>
                </h4>
                <table id="basic-datatable" class="table dt-responsive nowrap" width="100%">
                    <thead>
                        <tr>
                            <th>Serial Number</th>
                            <th>IP Location</th>
                            <th>Date</th>
                            <th>Remarks</th>
                            <th>IP</th>
                            <th style="width: 125px;">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $SerialNumber = 0;
                        while ($IPinfo = mysqli_fetch_array($ipki)) {
                            $SerialNumber++;
                        ?>
                            <tr>
                                <td>
                                    <div class="SerialNumber">
                                        <?php echo $SerialNumber ?>
                                    </div>
                                </td>
                                <td><?php echo $IPinfo['ipAdd'] ?></td>
                                <td>
                                    <small class="text-muted"><?php echo $IPinfo['Time'] ?></small>
                                </td>
                                <td>
                                    <h5><span class="badge badge-success-lighten"> <?php echo $IPinfo['text'] ?></span></h5>
                                </td>
                                <td>
                                    <h5>
                                        <span class="badge badge-danger-lighten"><?php if ($IPinfo['State']) { ?><?php echo $IPinfo['State'] ?><?php } else { ?>127.0.0.1<?php } ?></span>
                                    </h5>
                                </td>
                                <td>
                                    <a href="javascript:del(<?php echo $IPinfo['id']; ?>,'<?php echo $IPinfo['State']; ?>');">
                                        <button style="white-space: nowrap;" type="button"
                                            class="btn btn-danger btn-rounded">
                                            <i class=" mdi mdi-delete-empty mr-1"></i>cancel
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>


<script>
    function del(id, State) {
        if (confirm('You have confirmed that you want to delete the IP as ' + State + '?')) {
            location.href = 'delip.php?id=' + id + '&State' + State;
        }
    }
</script>


<?php
include_once 'Footer.php';
?>

<!-- third party js -->
<script src="/admin/assets/js/vendor/jquery.dataTables.min.js"></script>
<script src="/admin/assets/js/vendor/dataTables.bootstrap4.js"></script>
<script src="/admin/assets/js/vendor/dataTables.responsive.min.js"></script>
<script src="/admin/assets/js/vendor/responsive.bootstrap4.min.js"></script>
<script src="/admin/assets/js/vendor/dataTables.buttons.min.js"></script>
<script src="/admin/assets/js/vendor/buttons.bootstrap4.min.js"></script>
<script src="/admin/assets/js/vendor/buttons.html5.min.js"></script>
<script src="/admin/assets/js/vendor/buttons.flash.min.js"></script>
<script src="/admin/assets/js/vendor/buttons.print.min.js"></script>
<script src="/admin/assets/js/vendor/dataTables.keyTable.min.js"></script>
<script src="/admin/assets/js/vendor/dataTables.select.min.js"></script>
<!-- third party js ends -->
<!-- demo app -->
<script src="/admin/assets/js/pages/demo.datatable-init.js"></script>
<!-- end demo js-->


</body>

</html>
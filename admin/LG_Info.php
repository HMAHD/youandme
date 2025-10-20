<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <strong>Please note. - </strong> The current version is still on beta you may encounter bugs - 2024/12/09 <button type="button"
        id="myButton" class="btn btn-secondary btn-rounded" data-toggle='modal' data-target='#bs-example-modal-lg'>View presentation</button>
</div>

<?php if ($login['user'] == $adminuser): ?>
    <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>Warning - </strong> The current account is the default account Please change it as soon as possible!
    </div>
<?php endif; ?>

<?php if ($login['pw'] == md5($adminpw)): ?>
    <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>Warning - </strong> The current password is the default password Please change it as soon as possible!
    </div>
<?php endif; ?>


<div class="modal fade" id="bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Welcome to You & Me Site!</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <p>Welcome to the Admin panel.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<style>
    .modal-body img {
        width: 100%;
    }

    .modal-body ul li {
        line-height: 2rem
    }
</style>
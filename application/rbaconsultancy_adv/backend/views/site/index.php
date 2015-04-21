<?php
/* @var $this yii\web\View */

$this->title = 'RBA Consultancy and General Services';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Active User Accounts</h2>

                <p>Total: <b><?= $userCount ?></b> </p>

                <p><a class="btn btn-default" href=".\index.php?r=user%2Findex">Manage User &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Services Currently Available</h2>

                <p>Total: <b><?= $servicesCount ?></b> </p>

                <p><a class="btn btn-default" href=".\index.php?r=servicelist%2Findex">Manage Services &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Visa Applications</h2>

                <p>Pending: <b><?= $penAppCount ?></b> </p>
                <p>Ongoing: <b><?= $ongoingAppCount ?></b> </p>
                <p>Completed: <b><?= $comAppCount ?></b> </p>

                <p><a class="btn btn-default" href=".\index.php?r=services%2Findex">Manage Visa Applcations &raquo;</a></p>
            </div>
        </div>

    </div>
</div>

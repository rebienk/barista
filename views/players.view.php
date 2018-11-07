<?php require 'partials/head.php'; ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="container">
                <?php $results = $app['database']->SelectAllGuests(); ?>
            </div>
        </div>
    </div> <!-- End div row -->
</div> <!-- End container -->
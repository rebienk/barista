<?php require 'partials/head.php'; ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="container">
                <?php $results = $app['database']->SelectAllRecipees(); ?>
                <a href="new_battle" class="btn btn-primary float-right" style="margin-bottom: 5px;">Nieuwe battle starten?</a>
            </div>
        </div>
    </div> <!-- End div row -->
</div> <!-- End container -->
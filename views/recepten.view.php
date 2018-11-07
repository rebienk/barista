<?php require 'partials/head.php'; ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="container">
                <?php $results = $app['database']->SelectAllRecipees(); ?>
                <a href="new_recipe" class="btn btn-primary float-right" style="margin-bottom: 5px;">Make a new recipe</a>
            </div>
        </div>
    </div> <!-- End div row -->
</div> <!-- End container -->
<?php require 'partials/head.php'; ?>

<div class="container">

    <div class="span10 offset1">
        <div class="row">
            <h3>Read a Customer</h3>
        </div>
        <?php $results = $app['database']->SelectRecipe(); ?>
        <div class="form-horizontal" >
            <div class="control-group">
                <label class="control-label">Name</label>
                <div class="controls">
                    <label class="checkbox">
                        <?php echo $recpname;?>
                    </label>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Email Address</label>
                <div class="controls">
                    <label class="checkbox">
                        <?php echo $data['email'];?>
                    </label>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Mobile Number</label>
                <div class="controls">
                    <label class="checkbox">
                        <?php echo $data['mobile'];?>
                    </label>
                </div>
            </div>
            <div class="form-actions">
                <a class="btn" href="home">Back</a>
            </div>


        </div>
    </div>

</div> <!-- /container -->
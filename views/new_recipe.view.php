<?php require 'partials/head.php'; ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="container">
                <h1 class="form-heading text-center" style="color: #c76d2c">Add new recipe</h1>
                <div class="form-group">
                    <div class="main-div">
                        <div class="panel">
                            <p></p>
                        </div>
                        <form action="Insert_new_recipe" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Name">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="description" placeholder="Description">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="step01" placeholder="Step 1">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="ingredient01" placeholder="Ingredient 1">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="step02" placeholder="Step 2">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="ingredient02" placeholder="Ingredient 2">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="step03" placeholder="Step 3">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="ingredient03" placeholder="Ingredient 3">
                            </div>

                            <div class="form-group">
                                <input type="number" class="form-control" name="timeToPrep" placeholder="Time to prep in MIN">
                            </div>

                            <button type="submit" class="btn btn-success">Done</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End div row -->
</div> <!-- End container -->
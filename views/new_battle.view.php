<?php require 'partials/head.php'; ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="container">
                <h1 class="form-heading text-center">Wil je een battle beginnen?</h1>
                <div class="login-form">
                    <div class="main-div">
                        <div class="panel">
                            <p>Vul de velden in om door te gaan</p>
                        </div>
                        <!--In this form the games and users are requested from the database -->
                        <form action="Insert_new_battle" method="post">
                            <div class="form-group">
                                <input type="date" class="form-control" name="dtPlayed" placeholder="Date played">
                            </div>
                            <!-- the results will be requested from the following columns -->
                            <?php $results = $app['database']->Option_games();?>
                            <?php $results = $app['database']->Option_users_01();?>
                            <?php $results = $app['database']->Option_users_02(); ?>
                            <?php $results = $app['database']->Option_users_03(); ?>
                            <?php $results = $app['database']->Option_users_04(); ?>
                            <div class="form-group">
                                <select class="custom-select" id="wonby" name="wonby">
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="score" placeholder="Score">
                            </div>
                            <button type="submit" class="btn btn-primary">Nieuwe battle</button>
                        </form>
                        <script>
                            jQuery(document).ready(function($) {
                                //select the users to add to the battle
                                $(".ud_selects").each(function(){
                                    var current = $(this);
                                    $(".ud_selects").change(function() {
                                        // the variables are prepared for the users so you can select them
                                        var selected = current.find(":selected").text();
                                        var selected_id = current.find(":selected").val();
                                        //the winner will be selected
                                        if ($("select#wonby").find("option[value='" + selected_id + "']").length == 0) {
                                            $("#wonby").append($('<option>', {
                                                value: selected_id,
                                                text : selected
                                            }));

                                        }
                                        //The winner will be shown and also can be removed
                                        $("#wonby option").each(function(){
                                            var option = $(this);
                                            if(option.val() == ""){
                                                console.log("dasda");
                                                option.remove();
                                            }
                                        });

                                    });

                                });

                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End div row -->
</div> <!-- End container -->
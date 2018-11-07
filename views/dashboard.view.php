<?php require 'partials/head.php'; ?>
    <div class="container-fluid h-100 d-inline-block">
        <div class="row">
            <div class="col-12">
                <div class="container justify-content">
                    <div id="firstname">
                        Welkom <?php  echo $_SESSION['UserLogin'][0]['fname'];?>
                    </div>
                </div>
            </div>
        </div> <!-- End div row -->
    </div> <!-- End container -->
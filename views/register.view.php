<?php require 'partials/head.php'; ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="container">
                    <div class="login-form">
                        <div class="main-div">
                            <div class="panel">
                                <img class="mb-4" src="https://image.flaticon.com/icons/svg/993/993686.svg" alt="" width="72" height="72">
                                <h2>Registreren</h2>
                                <p>Regestratie formulier</p>
                            </div>
                            <form action="register_user" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="fname" placeholder="Voornaam">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="lname" placeholder="Achternaam">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Email Address">
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" name="mobile" placeholder="Telefoonnummer">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="wachtwoord">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="chkpassword" placeholder="Herhaal wachtwoord">
                                </div>
                                <button type="submit" class="btn btn-success">Registreren</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End div row -->
    </div> <!-- End container -->
<?php require 'partials/foot.php'; ?>
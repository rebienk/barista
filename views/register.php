<?php require 'partials/head.php'; ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="container">
                    <div class="login-form">
                        <div class="main-div">
                            <div class="panel">
                                <h2>Registreren</h2>
                                <p>Vul de gevraagde informatie in.</p>
                            </div>
                            <form action="Register_user">
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
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" name="mobile" placeholder="Telefoonnummer">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="chkpassword" placeholder="Password">
                                </div>
                                <button type="submit" class="btn btn-primary">Registreren</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End div row -->
    </div> <!-- End container -->
<?php require 'partials/foot.php'; ?>
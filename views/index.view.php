<?php require 'partials/head.php'; ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="container">
                <div class="login-form">
                    <div class="main-div">
                        <div class="panel">
                            <img class="mb-4" src="https://www.bnrconvention.com/wp-content/uploads/2017/04/coffee-icon-1.png" alt="" width="128" height="128">
                            <h2>Gebruiker login</h2>
                            <p>Vul je email en wachtwoord in.</p>
                        </div>
                        <form action="LoginAsUser" method="post">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                            </div>
                            <div class="forgot">
                                <a href="registreren">Nog geen account?</a><br>
                                <strike<a href="#">Wachtwoord vergeten?</strike> Werkt nog niet :(</a>
                            </div>
                            <button type="submit" class="btn btn-success">Login</button>
                        </form>
                        <div class="dropdown-divider"></div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End div row -->
</div> <!-- End container -->
<!-- Continues session->
<?php if (!isset($_SESSION)) { session_start(); } ?>
<!-- If client side user isn't logged in redirect to login page-->
<?php if (!isset($_SESSION['UserLogin']) && !isset($_SESSION['GuestLogin'])) {
    header('Location: /~s1122010/P1_OOAPP_Tentamen/');
}?>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark" role="navigation">
    <img id="logo" src="https://www.bnrconvention.com/wp-content/uploads/2017/04/coffee-icon-1.png" alt="logo">
    <a class="navbar-brand" href="home">HEST</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
                <?php //if($_SESSION['UserLogin'][0]['fname'] == 'fname'): ?>
                <li class="nav-item ">
                    <a class="nav-link" href="recepten">Recepten </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="users">Users </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="players">Players </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="battles">Battles </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="logout">Logout </a>
                </li>
                <?php //else:?>

            <?php //endif; ?>
        </ul>

    </div>
</nav>


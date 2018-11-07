<?php
//check if passwords match
if($_POST['password'] === $_POST['chkpassword']){
    //Hashing password
    $password = trim($_POST['password']);
    $hash = password_hash($password, PASSWORD_DEFAULT);
    // Here I post the values to the function that makes connection to the database
    $values = [ "fname" => $_POST['fname'], "lname" => $_POST['lname'], "email" => $_POST['email'], "mobile" => $_POST['mobile'], "password" => $hash];

    //database Select
    $app['database']->RegistreerUser($values);
}else{
    echo " <script type=\"text/javascript\"> setTimeout(function(){ swal(\"Fout\", \"Wachtwoord komt niet overeen, probeer nogmaals.\", \"error\"); }, 500); </script>";
}

require("views/register.view.php");


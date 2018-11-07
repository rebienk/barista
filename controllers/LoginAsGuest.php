<?php

//retrieve data

// Here I post the values to the function that makes connection to the database
$values = [ "nickname" => $_POST['nickname'], "email" => $_POST['email']];

//checks on data

//database Select
$app['database']->LoginAsGuest($values);

require("views/index.view.php");


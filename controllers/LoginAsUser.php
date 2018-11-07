<?php

//retrieve data

//the values for the database connection
$values = [ "email" => $_POST['email'], "password" => $_POST['password']];

//checks on data

//database Select
$app['database']->LoginAsUser($values);

require("views/index.view.php");


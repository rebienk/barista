<?php

//retrieve data
$start = date("Y-m-d", strtotime($_POST['dtPlayed']));
// Here I post the values to the function that makes connection to the database
$values = [ "dtPlayed" => $start,"gameid" => $_POST['gameid'], "playerid01" => $_POST['playerid01'], "playerid02" => $_POST['playerid02'], "playerid03" => $_POST['playerid03'], "playerid04" => $_POST['playerid04'],  "wonby" => $_POST['wonby'], "score" => $_POST['score']];

//checks on data

//database Select
$app['database']->Insert_new_battle($values);

require("views/new_battle.view.php");


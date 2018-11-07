<?php

//retrieve data

// Here I post the values to the function that makes connection to the database
$values = [
    "name" => $_POST['name'],
    "description" => $_POST['description'],
    "step01" => $_POST['step01'],
    "ingredient01" => $_POST['ingredient01'],
    "step02" => $_POST['step02'],
    "ingredient02" => $_POST['ingredient02'],
    "step03" => $_POST['step03'],
    "ingredient03" => $_POST['ingredient03'],
    "timeToPrep" => $_POST['timeToPrep']
];

//checks on data

//database Select
$app['database']->Insert_new_recipe($values);

require("views/new_recipe.view.php");


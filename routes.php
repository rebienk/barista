<?php
/**
 * GET routes
 */

if(PRODUCTION == "TRUE")
{
    $uri_prefix_empty = "~s1122010/P1_OOAPP_Tentamen";
    $uri_prefix = $uri_prefix_empty."/";
}
else
{
    $uri_prefix_empty = "";
    $uri_prefix = "";
}


$router->get($uri_prefix_empty.'', 'controllers/index.php');
$router->get($uri_prefix.'home', 'controllers/index.php');
$router->get($uri_prefix.'registreren', 'controllers/registreren.php');
$router->get($uri_prefix.'players', 'controllers/players.php');
$router->get($uri_prefix.'recepten', 'controllers/recepten.php');
$router->get($uri_prefix.'new_recipe', 'controllers/new_recipe.php');
$router->get($uri_prefix.'users', 'controllers/users.php');
$router->get($uri_prefix.'battles', 'controllers/battles.php');
$router->get($uri_prefix.'new_battle', 'controllers/new_battle.php');
$router->get($uri_prefix.'dashboard', 'controllers/dashboard.php');
$router->get($uri_prefix.'logout', 'controllers/logout.php');
$router->get($uri_prefix.'recept', 'controllers/recept.php');

/**
 * POST routes
 */
$router->post($uri_prefix.'LoginAsUser', 'controllers/LoginAsUser.php');
$router->post($uri_prefix.'LoginAsGuest', 'controllers/LoginAsGuest.php');
$router->post($uri_prefix.'register_user', 'controllers/register_user.php');
$router->post($uri_prefix.'Insert_new_recipe', 'controllers/Insert_new_recipe.php');
$router->post($uri_prefix.'Insert_new_battle', 'controllers/Insert_new_battle.php');


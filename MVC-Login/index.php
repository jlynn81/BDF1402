<?php
session_start();

require_once "model/db.php";
require_once "model/TreeModel.php";
require_once "model/TreeView.php";
require_once "authentication/auth.php";
require_once "authentication/AuthModel.php";
require_once "authentication/AuthView.php";

//$pagename = 'protected';

$model = new TreeModel(DSN, USER, PASS);
$views = new TreeView();

//displays the header information for the site
$views->showTreeHeader('Plants');

//displays the most current tree and flower data, along with showing the login form
$views->showLastTree($model->getTreeData());
$views->showLastFlower($model->getFlowerData());
$views->showLoginForm($model->retrieveUserByNamPass(name, pass));

//displays the footer information
$views->showTreeFooter();

$userData = array();
$template = 'login';

if(!empty($_SESSION['userData'])) {
    $userData = $_SESSION['userData'];
    $template = 'Welcome';
}elseif (!empty($username) && !empty($password)){

    $userData = $model->retrieveUserByNamePass($username, $password);
    if(is_array($userData)){

        $template = 'welcome';
        $_SESSION['userData'] = $userData;
    }else{
        $userData['error'] = 'Invalid username/password.';
    }
}

$views->show('header');
$views->show($contentPage, $user);
$views->show('footer');






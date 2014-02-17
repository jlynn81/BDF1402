<?php

require_once "model/db.php";
require_once "model/TreeModel.php";
require_once "model/TreeView.php";

session_start();

$model = new TreeModel(DSN, USER, PASS);
$view = new TreeView();

//displays the header information for the site
$view->showTreeHeader('Plants');

//displays the most current tree and flower data
$view->showLastTree($model->getTreeData());
$view->showLastFlower($model->getFlowerData());

//displays the footer information
$view->showTreeFooter();

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

$view->show('header');
$view->show($contentPage, $user);
$view->show('footer');






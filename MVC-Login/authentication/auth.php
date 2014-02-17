<?php

require_once "db.php";
require_once "AuthModel.php";
require_once "AuthView.php";

//instantiates the model and view class
$model = new AuthModel(DSN, USER, PASS);
$view = new AuthView();

//inputs for the username and password
$username = empty($_POST['username']) ? '' : trim($_POST['username']);
$password = empty($_POST['password']) ? '' : trim($_POST['password']);

$contentPage = 'form';
$user = null;

session_start();

if(!empty($_SESSION['userInfo'])) {
    $contentPage = 'success';
    $user = $_SESSION['userInfo'];
}

//validation information for the username and password
if(!empty($username) && !empty($password)){
    $user = $model->retrieveUserByNamePass($username, $password);
    if(is_array($user)){
        $contentPage = 'success';
        session_start();
        $_SESSION['userInfo'] = $user;
    }
}

$view->show('header');
$view->show($contentPage, $user);
$view->show('footer');
<?php

require_once "db.php";
require_once "AuthModel.php";
require_once "AuthView.php";

//instantiates the model and view class
$model = new AuthModel(DSN, USER, PASS);
$view = new AuthView();

$view->show('header');
$view->show('form');
$view->show('footer');
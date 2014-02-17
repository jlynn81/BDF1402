<?php

require_once "model/db.php";
require_once "model/TreeModel.php";
require_once "model/TreeView.php";
require_once "authentication/AuthModel.php";
require_once "authentication/AuthView.php";

$model = new TreeModel(DSN, USER, PASS);

$view = new TreeView();
$model = new AuthModel(DSN, USER, PASS);
$view = new AuthView();

//displays the header information for the site
$view->showTreeHeader('model');

//displays the most current tree and flower data
$view->showLastTree($model->getTreeData());
$view->showLastFlower($model->getFlowerData());

//displays the footer information
$view->showTreeFooter();


?>






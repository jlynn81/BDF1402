<?php

require_once "model/db.php";
require_once "model/TreeModel.php";
require_once "model/TreeView.php";

$model = new TreeModel(DSN, USER, PASS);
$view = new TreeView();

//displays the header information for the site
$view->showTreeHeader('Plants');

//displays the most current tree and flower data
$view->showLastTree($model->getTreeData());
$view->showLastFlower($model->getFlowerData());

//displays the footer information
$view->showTreeFooter();

$view->show('header');
$view->show($contentPage, $user);
$view->show('footer');
?>






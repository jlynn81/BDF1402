<?php

require_once "Plants/db.php";
require_once "Plants/TreeModel.php";
require_once "Plants/TreeView.php";

$model = new TreeModel(DSN, USER, PASS);

$view = new TreeView();

//displays the header information for the site
$view->showTreeHeader('plantModel');

//displays the most current tree and flower data
$view->showLastTree($model->getTreeData());
$view->showLastFlower($model->getFlowerData());

//displays the footer information
$view->showTreeFooter();


?>






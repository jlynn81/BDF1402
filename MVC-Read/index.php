<?php

require_once "Plants/db.php";
require_once "Plants/TreeModel.php";
require_once "Plants/TreeView.php";

$model = new TreeModel(DSN, USER, PASS);

$view = new TreeView();

$view->showTreeHeader('Plants');

$view->showLastTree($model->getTreeData());
$view->showLastFlower($model->getFlowerData());

$view->showTreeFooter();









<?php

require_once "Trees/TreeModel.php";
require_once "Trees/db.php";
require_once "Trees/TreeView.php";


$model = new TreeModel(DSN, USER, PASS);

$view = new TreeView();

$view->showTreeHeader('Trees');

$view->showLastTree($model->getLatestTree());

$view->showTreeFooter();









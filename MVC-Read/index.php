<?php

require_once "model/db.php";
require_once "model/TreeModel.php";
require_once "model/TreeView.php";

$model = new TreeModel(DSN, USER, PASS);

$views = new TreeView();

//displays the header information for the site
$views->showTreeHeader('Plants');

//displays the most current tree and flower data
$views->showLastTree($model->getTreeData());
$views->showLastFlower($model->getFlowerData());

//displays the footer information
$views->showTreeFooter();


?>






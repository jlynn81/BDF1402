<?php

//my index page
include 'models/treeModel.php';
include 'models/treeViewModel.php';

$pagename = 'index';

$views = new treeViewModel();
$trees = new treeModel();

$views->getView("views/header.inc");

if(!empty($_GET["action"])){
    if($_GET["action"]=="home"){

        $result = $trees->getAll();
        $views->getView("views/tree.php", $result);

    }if($_GET["action"]=="tree_details"){

        $result = $trees->getOne($_GET["id"]);
        $views->getView("views/tree_details.php", $result);
    }
}else{
    $result = $trees->getAll();
    $views->getView("views/tree.php", $result);
}

//Display Footer information
$views->getView("views/footer.inc");
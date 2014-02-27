<?php

//my index page
include 'application/models/treeModel.php';
include 'application/models/treeViewModel.php';

$pagename = 'main';

$views = new treeViewModel();
$trees = new treeModel();

$views->getView("application/views/header.inc");

if(!empty($_GET["action"])){
    if($_GET["action"]=="home"){

        $result = $trees->getAll();
        $views->getView("application/views/tree.php", $result);

    }if($_GET["action"]=="tree_details"){

        $result = $trees->getOne($_GET["id"]);
        $views->getView("application/views/tree_details.php", $result);
    }
}else{
    $result = $trees->getAll();
    $views->getView("application/views/tree.php", $result);
}

//Display Footer information
$views->getView("application/views/footer.inc");
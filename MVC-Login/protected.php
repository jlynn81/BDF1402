<?php
session_start();
include 'models/protector.php';

//Protected Controller
include 'models/treeViewModel.php';
include 'models/treeModel.php';

$pagename = 'protected';

$views = new treeViewModel();
$trees = new treeModel();

$views->getView("views/header.inc");

//Show initial list
if(!empty($_GET["action"])){

}else{
    //Protected Data and CRUD Information
}

//Show Footer
$views->getView("views/footer.inc");
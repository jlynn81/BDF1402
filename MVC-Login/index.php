<?php

session_start();
include 'models/protector.php';

//my index page
include 'models/treeViewModel.php';
include 'models/treeModel.php';

$pagename = 'index';

$views = new treeViewModel();
$trees = new treeModel();

//Display Header
if(@$_GET["action"]!="checklogin" && @$_GET["action"]!="logout"){
    $views->getView("views/header.inc");
}

//Display initial list

if(!empty($_GET["action"])){
    if($_GET["action"]=="home"){

        $result = $trees->getAll();
        $views->getView("views/tree.php", $result);

    }if($_GET["action"]=="tree_details"){

        $result = $trees->getOne($_GET["id"]);
        $views->getView("views/tree_details.php", $result);

    }if($_GET["action"]=="login"){
        $views->getView("views/login.html");

    }if($_GET["action"]=="checklogin"){
        $result = $trees->checkLogin($_POST["user_name"], $_POST["user_password"]);

        if(count($result)>0){
            header("location:protector.php");
        }else{
            $views->getView("views/header.inc");
            echo "Login Error";
            $views->getView("views/login.html");
        }
    }
    if($_GET["action"]=="logout"){
        $trees->logout();
        header("location: index.php");
    }

}else{
    $result = $trees->getAll();
    $views->getView("views/tree.php", $result);
}

//Display Footer information
$views->getView("views/footer.inc");
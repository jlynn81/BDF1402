<?php

session_start();
//my index page
include 'models/treeModel.php';
include 'models/treeViewModel.php';

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

    }
    if($_GET["action"]=="Trees"){

        $result = $trees->getOne($_GET["treeid"]);
        $views->getView("views/tree_details.php", $result);

    }
    if($_GET["action"]=="login"){

        $views->getView("views/loginform.html");

    }
    if($_GET["action"]=="checklogin"){

        $result = $trees->checkLogin($_POST["user_name"], $_POST["user_password"]);

        if(count($result)>0){
            header("location: protected.php");
        }else{
            $views->getView("views/header.inc");
            echo "Login Error";
            $views->getView("views/loginform.html");
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
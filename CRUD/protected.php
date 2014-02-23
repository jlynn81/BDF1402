<?php
session_start();
include 'models/protector.php';

//Protected Controller
include 'models/treeViewModel.php';
include 'models/treeModel.php';

$pagename = 'protected';

$views = new treeViewModel();
$trees = new treeModel();

//Display header
$views->getView("views/header.inc");

//Show initial list
if(!empty($_GET["action"])){

    if($_GET["action"]=="update"){

        $result = $trees->getOne($_GET["id"]);
        $views->getView("views/updateform.html", $result);

    }else if($_GET["action"]=="updateaction"){

        $trees->update($_GET["id"], $_POST["height"], $_POST["description"]);
        $result = $trees->getAll();
        $views->getView("views/protected.php",$result);

    }else if($_GET["action"] == "delete"){

        $trees->delete($_GET["id"]);
        $result = $trees->getAll();
        $views->getView("views/protected.php",$result);

    }else if ($_GET["action"] == "add"){

        $views->getView("views/addform.html");

    }else if ($_GET["action"] == "addaction"){
        $trees->add($_POST["name"], $_POST["user_name"],  $_POST["user_password"], $_POST["name"], $_POST["height"], $_POST["description"] );
        $result = $trees -> getAll();
        $views->getView("views/protected.php", $result);
    }

}else{

    $result = $trees->getAll();
    $views->getView("views/protected.php", $result);

}

$views->getView("views/footer.inc");
?>
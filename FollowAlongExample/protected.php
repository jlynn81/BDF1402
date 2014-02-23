<?php
session_start();
include 'models/protector.php';

//Protected Controller
include 'models/viewModel.php';
include 'models/contactsModel.php';

$pagename = 'protected';

$views = new viewModel();
$contacts = new contactsModel();

//Display header
$views->getView("views/header.inc");

//Show initial list
if(!empty($_GET["action"])){

    if($_GET["action"]=="update"){

        $result = $contacts->getOne($_GET["id"]);
        $views->getView("views/updateform.html", $result);

    }else if($_GET["action"]=="updateaction"){

        $contacts->update($_GET["id"], $_POST["email"], $_POST["phone"], $_POST["address"]);
        $result = $contacts->getAll();
        $views->getView("views/protected.php",$result);

    }else if($_GET["action"] == "delete"){

        $contacts->delete($_GET["id"]);
        $result = $contacts->getAll();
        $views->getView("views/protected.php",$result);

    }else if ($_GET["action"] == "add"){

        $views->getView("views/addform.html");

    }else if ($_GET["action"] == "addaction"){
        $contacts->add($_POST["first"], $_POST["last"],  $_POST["un"], $_POST["pass"], $_POST["email"], $_POST["phone"],
                                $_POST["address"]);
        $result = $contacts -> getAll();
        $views->getView("views/protected.php", $result);
    }

    }else{

    $result = $contacts->getAll();
    $views->getView("views/protected.php", $result);


}
    $views->getView("views/footer.inc");
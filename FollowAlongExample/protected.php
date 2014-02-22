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

        $result = $trees->getOne($_GET["id"]);
        $views->getView("views/updateform.html", $result);

    }else if($_GET["action"]=="updateaction"){

        $contacts->update($_GET["id"], $_POST["height"], $_POST["description"]);
        $result = $contacts->getAll();
        $views->getView("views/protected.php",$result);

    }else if($_GET["action"] == "delete"){

        $contacts->delete($_GET["id"]);
        $result = $contacts->getAll();
        $views->getView("views/protected.php",$result);

    }else if ($_GET["action"] == "add"){

        $views->getView("views/addform.html");

    }else if ($_GET["action"] == "addaction"){
        $contacts->add($_POST["user_name"], $_POST["user_password"],  $_POST["NAME"], $_POST["height"], $_POST["description"] ); //
        $result = $contacts -> getAll();
        $views->getView("views/protected.php", $result);
    }


    if($_GET["action"]=="home"){
    	$result = $trees->getAll();
    	$views->getView("views/body.php", $result);
    }

    if($_GET["action"]=="details"){
    	$result=$trees->getOne($_GET["id"]);
    	$views->getView("views/details.php",$result);
        $data = $trees->getAll();
        $views->getView("views/body.php",$data);

    }else{

    $result = $trees->getAll();
    $views->getView("views/protected.php", $result);

    $data = $contacts->getAll();

    $views->getView("views/body.php",$data);
    }
}
    $views->getView("views/footer.inc");
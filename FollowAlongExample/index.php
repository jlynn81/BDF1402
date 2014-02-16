<?php

//my index page
include 'models/viewModel.php';
include 'models/contactsModel.php';

$pagename = 'index';

$views = new viewModel();
$contacts = new contactModel();

//Display Header maybe with a button
$views->getView("views/header.inc");

//Display initial list

if(!empty($_GET["action"])){

    if($_GET["action"]=="home"){

        $result = $contacts->getAll();
        $views->getView("views/body.php",$result);
    }if($_GET["action"]=="details"){

        $result = $contacts->getOne($_GET["id"]);
        $views->getView("views/details.php",$result);
    }

}else{
    $result = $contacts->getAll();
    $views->getView("views/body.php",$result);
}

//Display Footer
$views->getView("views/footer.inc");
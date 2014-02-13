<?php
/**
 * User: jlynn81
 * Class BDF1402
 * Date: 2/10/14
 */

    // Creates Index Page
include 'models/viewModel.php';
include 'models/contactsModel.php';

$pagename = 'index';

$views = new viewModel();
$contacts = new contactsModel();

    //Display Header with buttons

$views->getView("views/header.inc");

    //Create beginning of User List
if(!empty($_GET["action"])){
    if($_GET["action"]=="home"){
        $result = $contacts->getAll();
        $views->getView("views/body.php",$result);
    }if($_GET["action"]=="details"){
        $result = $contacts->getOne($_GET["id"]);
        $views->getView("views/details.php",$result);
    }
}else{
    $result = $contacts->getALL();
    $views->getView("views/body.php",$result);
}

    //Display page Footer
$views->getView("views/footer.inc");







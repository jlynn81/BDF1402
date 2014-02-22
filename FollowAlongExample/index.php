<?php

session_start();

//my index page
include 'models/viewModel.php';
include 'models/contactsModel.php';

$pagename = 'index';

$views = new viewModel();
$trees = new contactsModel();

//Display Header maybe with a button
if(@$_GET["action"]!="checklogin" && @$_GET["action"]!="logout"){
    $views->getView("views/header.inc");
}

//Display initial list

if(!empty($_GET["action"])){

    if($_GET["action"]=="home"){

        $result = $trees->getAll();
        $views->getView("views/body.php",$result);

    }if($_GET["action"] == "details"){

        $result = $trees->getOne($_GET["id"]);
        $views->getView("views/user_details.php",$result);

    }if($_GET["action"]=="login"){

        $views->getView("views/loginform.html");
    }
    if($_GET["action"]=="checklogin"){

        $result = $trees->checkLogin($_POST["un"], $_POST["password"]);

        if(count($result)>0){
            header("location: protector.php");

        }else{

            $views->getView("views/header.inc");
            echo "<center>Login Error</center>";
            $views->getView("views/loginform.html");
        }
    }
    if($_GET["action"]=="logout"){

        $trees->logout();
        header("location: index.php");
    }

}else{

    $result = $trees->getAll();
    $views->getView("views/body.php",$result);
}

//Display Footer
$views->getView("views/footer.inc");
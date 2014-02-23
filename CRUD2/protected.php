<?
session_start();
include'models/protector.php';

include 'models/viewModel.php';
include 'models/contactsModel.php';

$pagename = 'protected';

$views = new viewModel();
$contacts = new contactsModel();

$views->getView("views/header.inc");

if(!empty($_GET["action"])){
	
	if($_GET["action"]=="update"){
	
		$result = $contacts->getOne($_GET["clientID"]);
		$views->getView("views/updateform.html", $result);
		
	}else if($_GET["action"]=="updateaction"){
	
		$contacts->update($_GET["clientID"],  $_POST["name"], $_POST["organization"], $_POST["email"], $_POST["phone"]);
		$result = $contacts->getAll();
		$views->getView("views/protected.php",$result);
	
	}else if($_GET["action"] == "delete"){
	
		$contacts->delete($_GET["clientID"]);
		$result = $contacts->getAll();
		$views->getView("views/protected.php",$result);
	
	}else if ($_GET["action"] == "add"){
		
		$views->getView("views/addform.html");
	
	}else if ($_GET["action"] == "addaction"){
		$contacts->add($_POST["userName"], $_POST["password"],  $_POST["name"], $_POST["organization"], $_POST["email"], $_POST["phone"] ); //
		$result = $contacts -> getAll();
		$views->getView("views/protected.php", $result);	
	}

	
	//if($_GET["action"]=="home"){
	//	$result = $contacts->getAll();
	//	$views->getView("views/body.php", $result);
	//}
	
	//if($_GET["action"]=="details"){
	//	$result=$contacts->getOne($_GET["id"]);
	//	$views->getView("views/details.php",$result);
	//$data = $contacts->getAll();
	//$views->getView("views/body.php",$data);


}else{
	
	$result = $contacts->getAll();
	$views->getView("views/protected.php", $result);
	
	//$data = $contacts->getAll();
	
	//$views->getView("views/body.php",$data);
}

$views->getView("views/footer.inc");
?>
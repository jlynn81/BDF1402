<?

session_start();

include 'models/viewModel.php';
include 'models/contactsModel.php';

$pagename = 'index';
$views = new viewModel();
//$views->getView("views/header.inc");
$trees = new contactsModel();

if(@$_GET["action"]!="checklogin" && @$_GET["action"]!="logout"){
	$views->getView("views/header.inc");
}

if(!empty($_GET["action"])){
	
	if($_GET["action"]=="home"){	
		$result = $trees->getAll();
		$views->getView("views/body.php", $result);
	}
	if($_GET["action"]=="Trees"){
		$result = $trees->getOne($_GET["id"]);
		$views->getView("views/details.php", $result);	
	}
	if($_GET["action"]=="login"){
		$views->getView("views/loginform.html");
	}
	if($_GET["action"]=="checklogin"){
		$result = $trees->checkLogin($_POST["username"], $_POST["password"]);
		if(count($result)>0){
			header("location: protected.php");
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
//	}//typo
	
}else{

	$result = $trees->getAll();
	$views->getView("views/body.php", $result);
}

$views->getView("views/footer.inc");
?>
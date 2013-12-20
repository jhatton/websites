<?
session_start();
include "models/protector.php";

// protected controller
include "models/viewModel.php";
include "models/contactsModel";

$pagename="protected";

$views=new viewModel();
$contacts=new contactsModel();
// show header
$views->getView("views/header.inc");

// show the list 

if(!empty($_GET["action"])){
	
	if($_GET["action"]=="update"){
		
		$result=$contacts->getOne($_GET["id"]);
		$views->getView("views/updateform.html",$result);
		
	}else if($_GET['action']=="updateaction"){
		
		$contacts->update($_GET["id"],$_POST['email'],$_POST['phone'],$_POST['address']);
		$result=$contacts->getAll();
		$views->getView("views/protected.php", $results);
		
	}else if($_GET['action']=='delete'){
		$contacts->delete($_GET['id']);
		$result=$contacts->getAll();
		$views->getView("views/protected.php", $results);	
		 
	}else if($_GET['action']=='add'){
		$views->getView("views/addform.html", $results);
	}else if($_GET['action']=="addaction"){
		
		$contacts->add($_POST["first"],$_POST['last'],$_POST['un'],$_POST['pass'],$_POST['email'],$_POST['phone'],$_POST['address']);
		$result=$contacts->getAll();
		$views->getView("views/protected.php", $results);
	}

}else {
		$result=$contacts->getAll();
		$views->getView("views/protected.php", $results);
}
// show the footer
$views->getView('views/footer.inc');
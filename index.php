<?
// my index page
include 'models/viewModel.php';
include 'models/contactsModel.php';

$pagename='index';

$views=new viewModel();
$contacts=new contactsmodel();

//Show header;
$views->getView('views/header.inc');

// show the list;
if (!empty($_GET["action"])){
	
	if ($_GET['action']=="home"){
		
		$result=$contacts->getAll();
		$views->getView("views/body.php",$result);
		
	}if($_GET["action"]=="details"){
		
		$result=$contacts->getOne($_GET["id"]);
		$views->getView("views/details.php", $result);
	}
}else{
		$result=$contacts->getAll();
		$views->getView("views/body.php", $result);
}

// footer
$views->getView("views/footer.inc");
   
?>

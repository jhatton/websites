<?
session_start();
include "models/protector.php";

// protected controller
include "models/viewModel.php";
include "models/contactsModel";

$pagename="protected";

$views=new viewModel();
$contacts=new contactsModel();
$views->getView("views/header.inc");

// show the list 

if(!empty($_GET['action'])){
	
}else {
	
}
// show the footer
$views->getView('views/footer.inc');
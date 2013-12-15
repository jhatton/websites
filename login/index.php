<?php
session_start();

include "models/database.php";
include "models/modelView.php";

$pageTitle ="index";
$views=new modelView();
$contacts=new getsModels();

if ($_GET['action'] !='checklogin' && $_GET['action'] !='logout'){
	$views->getPages("views/header.inc");
}

if (!empty($_GET['action'])){
	if ($_GET['action'] =='home') {
		$results=$contacts->getNames();
		$views->getPages("views/body.php", $results);
		
	}if ($_GET['action'] =='details') {
		$results=$contacts->getOne();
		$views->getPages("views/display.php", $results);
	}if ($_GET['action'] =='login') {
		$views->getPages("views/login.inc", $results);
	}if ($_GET['action'] =='checklogin') {
		$results=$contacts->getOne();
		$views->getPages("views/display.php", $results);
	}
}

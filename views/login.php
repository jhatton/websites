<?php

require_once 'login.inc';
require_once 'dsn.php';
require_once 'authModel.php';
include_once 'authView.php';
require_once 'header1.inc';
require_once 'footer.inc';

$model=new authModel(DSN, USER, ROOT);
$view=new AuthView();
$view= new header();
$view = new footer();



$username= empty($_POST['username']) ? '': strtoLower(trim($_POST['username']));
$password= empty($_POST['password']) ? '': trim($_POST['password']);
$contentPage="login";
$user=NULL;

session_start();

if(!empty($_SESSION['userinfo'])){
	$contentPage='success';
	$user=($_SESSION['userinfo']);
}

if (!empty($username) && !empty($password)) {
	$user = $model->getUserByNamePass($username, $password);
	if (is_array($user)) {
		 $contentPage='success';
		 $_SESSION['userinfo']=$user;
	}
	echo "User doesn't exist";
}

$view->show('header');
$view->show($contentPage, $user);
$view->show('footer');

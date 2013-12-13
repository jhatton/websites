<?php
// requires
require_once 'views/login.inc';
require_once 'views/dsn.php';
require_once 'views/authModel.php';
include_once 'views/authView.php';
require_once 'views/header1.inc';
require_once 'views/footer.inc';

//add models
$model=new authModel(DSN, USER, ROOT);
$view=new AuthView();
$view= new header();
$view = new footer();

// users and password check
$username= empty($_POST['username']) ? '': strtoLower(trim($_POST['username']));
$password= empty($_POST['password']) ? '': trim($_POST['password']);
$contentPage="login";
$user=NULL;

// start session
session_start();

// if session is active goes to main page
if(!empty($_SESSION['userinfo'])){
	$contentPage='success';
	$user=($_SESSION['userinfo']);
}

// checks if user name exist
if (!empty($username) && !empty($password)) {
	$user = $model->getUserByNamePass($username, $password);
	if (is_array($user)) {
		 $contentPage='success';
		 $_SESSION['userinfo']=$user;
	}
	
}

// adds pages views
$view->show('header');
$view->show($contentPage, $user);
$view->show('footer');

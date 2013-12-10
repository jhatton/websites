<?php

require_once 'login.inc';
require_once 'controllers/dsn.php';
require_once 'authModel.php';
require_once 'header.inc';
require_once 'footer.inc';

$model=new authModel(DSN, USER, ROOT);
$view= new header();
$view = new footer();



$username= empty($_POST['username']) ? '': strtoLower(trim($_POST['username']));
$password= empty($_POST['password']) ? '': trim($_POST['password']);
$contentPage="login";

if (!empty($username) && !empty($password)) {
	$user = $model->getUserByNamePass($username, $password);
	if (is_array($user)) {
		 $contentPage='success';
	}
	echo "User doesn't exist";
}

$view->show('header');
$view->show('footer');
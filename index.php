<?php
require_once "controllers/dsn.php";
require_once "views/login.php";
require_once "pageView.php";

/* Connect to an database  */
$model= new db(DSN, USER, PASS);
$view=new authView();

$username=empty($_POST['username']) ? '' : strtolower(trim($_POST['username']));
$username=empty($_POST['password']) ? '' : trim($_POST['password']);
$contentPage="form";
if (!empty($username) && !empty($password)){
	$user = $model->getUserByNamePass($username, $password);
	$contentPage='success';
}

$rows=$model->getDataBase();
$view=new pageView;
$view->show($contentPage);
$view->showHeader('myBlog');
$view->showFooter();


   
 
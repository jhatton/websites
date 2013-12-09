<?php
require_once "controllers/dsn.php";
require_once "views/login.php";
require_once "pageView.php";

/* Connect to an database  */
$model= new db(DSN, USER, PASS);
$view=new authView();

$username=empty($_POST['username']) ? '' : strtolower(trim($_POST['username']));
$username=empty($_POST['password']) ? '' : trim($_POST['username']);

if (!empty($username) && !empty($password)){
	$user = $model->getUserByNamePass($username, $password);
}

$rows=$model->getDataBase();
$view=new pageView;
$view->showHeader('myBlog');
$view->showFooter();


   
 
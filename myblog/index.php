
	<?php
	require_once 'dataBase.php';
	require_once 'pageView.php';
	require_once 'dsn.php';
	$dsn="mysql:host=127.0.0.1;port=8889;dbname=myblog";
	$db_user="root";
	$db_pass="root";

	$model=new dataBase(DSN, USER, PASS);
	$view=new pageView();
	$rows=$model->getUsers();
 	$view ->showHeader("myBlog");
	$view->showData($rows);
	$view->showFooter();
?>


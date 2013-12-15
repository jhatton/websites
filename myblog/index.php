<?php
	require_once 'dsn.php';
	require_once 'dataBase.php';
	require_once 'pageView.inc';
	

	$model=new dataBase(DSN, USER, PASS);
	$view=new pageView();
 	$view ->showHeader("myBlog");
	$view->showData($model->getUsers());
	$view->showFooter();



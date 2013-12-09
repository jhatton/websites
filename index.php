<?php
require_once "controllers/dsn.php";
require_once "models/bdclass.php";
require_once "pageView.php";

/* Connect to an database  */
$model= new db(DSN, USER, PASS);
$rows=$model->getDataBase();
$view=new pageView;
$view->showHeader('myBlog');
$view->showDB('$rows');
$view->showFooter();


   
 
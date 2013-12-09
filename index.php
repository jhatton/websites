<?php
require_once "dsn.php";
require_once "bdclass.php";
require_once "views/pageView.php";

/* Connect to an database  */
$model= new db(DSN, USER, PASS);
$rows=$model->getDataBase();
$view=new pageView;
$view->showHeader('myBlog');
$view->showDB('$rows');
$view->showFooter();


   
 
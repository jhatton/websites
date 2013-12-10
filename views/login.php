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
$username= empty($_POST['password']) ? '': trim($_POST['password']);

$view->show('header');
$view->show('footer');
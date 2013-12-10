<?php

require_once 'login.inc';
require_once 'controllers/dsn.php';
require_once 'authModel.php';
require_once 'header.inc';
require_once 'footer.inc';

$model=new authModel(DSN, USER, ROOT);
$view= new header();
$view = new footer();

$view->show('header');
$view->show('footer');
<?php

include "controllers/dsn.php";
include "views/header.inc";
include "views/footer.inc";
include "models/modelView.php";

$model=new dataBase(DSN, USER, PASS);
$views=new modelView();
$username=empty($_POST['username']) ? '' : strtolower(trim($_POST['username']));
$username=empty($_POST['password']) ? '' : trim($_POST['password']);

if (!empty($username) && !empty($password)){
	$user = $model->getUserByNamePass($username, $password);
	$views->getPages("views/login.inc");
}
<?php

include "controllers/dsn.php";
include "views/header.inc";
include "views/footer.inc";

 $model=new dataBase(DSN, USER, PASS);

$username=empty($_POST['username']) ? '' : strtolower(trim($_POST['username']));
$username=empty($_POST['password']) ? '' : trim($_POST['password']);

if (!empty($username) && !empty($password)){
	$user = $model->getUserByNamePass($username, $password);
	$views->getView("views/login.inc");
}
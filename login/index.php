<?php

include "models/database.php";
include "views/header.inc";
include "views/footer.inc";
include "models/modelView.php";

$model=new dataBase(DSN, USER, PASS);
$views=new modelView();

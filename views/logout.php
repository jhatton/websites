<?php

session_start();
unset($_SESSION['userinfo']);

session_destroy();
 
header('Location: login.php');
exit;
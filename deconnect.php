<?php
session_start();
$_SESSION['isauth']=null;
$_SESSION['login']=null;
session_destroy();
header('location:auth.html');


?>
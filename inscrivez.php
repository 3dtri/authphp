<?php
require_once('dbclass.php');
$connect=new dbconnect();
$db=$connect->connect();

$login=$_REQUEST['txt_login'];
$pepper='g3tdtri';

$password=hash_hmac("sha256", $_REQUEST['txt_password'],$pepper);
$password_hashed=password_hash($password,PASSWORD_DEFAULT);

$repeat_password=$_REQUEST['txt_password2'];
$req="INSERT INTO `user`( `login`, `password`) VALUES ('$login','$password_hashed')";
mysqli_query($db,$req);

header('location:auth.html');
?>
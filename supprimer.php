<?php
$host='localhost';
$user='root';
$password='';
$id=$_REQUEST['id'];

$db=mysqli_connect($host,$user,$password);
mysqli_select_db($db,'exemple2');
$req="DELETE FROM `personne` WHERE id='$id'";
mysqli_query($db,$req);
header('location:index.php?msg=Supp.')


?>
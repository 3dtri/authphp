<?php

$nom=$_REQUEST['txt_nom'];
$prenom=$_REQUEST['txt_prenom'];
$tel=$_REQUEST['txt_tel'];
$host='localhost';
$user='root';
$password='';
$db=mysqli_connect($host,$user,$password);
mysqli_select_db($db,'exemple2');
if(isset($_REQUEST['idp']) && !empty($_REQUEST['idp']))
$req="UPDATE `personne` SET `nom`='$nom',`prenom`='$prenom',`tel`='$tel' WHERE `id`=".$_REQUEST['idp'];
else
$req="INSERT INTO `personne`(`nom`, `prenom`, `tel`) VALUES ('$nom','$prenom','$tel')";

mysqli_query($db,$req);
header('location:index.php?msg=Ajouter')


?>
<?php
require('personne.php');
$nom=$_REQUEST['txt_nom'];
$prenom=$_REQUEST['txt_prenom'];
$tel=$_REQUEST['txt_tel'];

$photo_tmp=$_FILES['photo']['tmp_name'];
$name=$_FILES['photo']['name'];
move_uploaded_file($photo_tmp,'images/'.$name);

if(isset($_REQUEST['idp']) && !empty($_REQUEST['idp'])){
    $personne=new personne();
    $personne->setNom($nom);
    $personne->setPrenom($prenom);
    $personne->setTel($tel);
    $personne->setPhoto($name);
    $personne->update($_REQUEST['idp']);
}

else{
    $personne=new personne();
    $personne->setNom($nom);
    $personne->setPrenom($prenom);
    $personne->setTel($tel);
    $personne->setPhoto($name);
    $personne->save();
    
}



header('location:index.php?msg=Ajouter')


?>
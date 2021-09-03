<?php
$host='localhost';
$user='root';
$password='';
$nom='';
    $prenom='';
    $tel='';
$db=mysqli_connect($host,$user,$password);
mysqli_select_db($db,'exemple2');
if($_REQUEST['id']){
    $req="select nom,id,prenom,tel from personne where id=".$_REQUEST['id'];
    $result=mysqli_query($db,$req);
    $row=mysqli_fetch_assoc($result);
    $nom=$row['nom'];
    $prenom=$row['prenom'];
    $tel=$row['tel'];
}
session_start();
if(! $_SESSION['isauth'])
{
 header('location:auth.html');
}
?>

<html>
<head>
<title>Formulaire</title>

</head>
<body>
    <a href="index.php">Formulaire</a>
    <a href="page1.php?param1=listes inial">Listes</a>


    <a href="deconnect.php">
        <button >Deconnect</button>
    </a>
<div>
<?php
if($_REQUEST['msg'])
echo $_REQUEST['msg'];
?>

</div>

    <form method="post" action="ajout.php">
<input type="hidden" name="idp" value="<?php if(isset($_REQUEST['id'])) echo $_REQUEST['id'] ?>">
    <table>
<tr>
<td>Nom</td>
<td><input value="<?php echo $nom  ?>"  type="text" name="txt_nom">

</tr>
<tr>
<td>Prenom</td>
<td><input type="text" value="<?php echo $prenom  ?>" name="txt_prenom">

</tr>
<tr>
<td>Tel</td>
<td><input type="text" value="<?php echo $tel  ?>" name="txt_tel">

</tr>
<tr>
<td>
<input type="submit" value="Ajouter">

</td>

</tr>
</table>


</form>
<table border="1">
<?php

$req="SELECT id,`nom`, `prenom`, `tel` FROM `personne";
$result=mysqli_query($db,$req);
while($row=mysqli_fetch_assoc($result)){
?>
<tr>
<td><?php echo $row['nom'] ?></td>
<td><?php echo $row['prenom'] ?></td>
<td><?php echo $row['tel'] ?></td>
<td><a href="supprimer.php?id=<?php echo $row['id'] ?>">Supprimer</a></td>
<td><a href="index.php?id=<?php echo $row['id'] ?>">Modifier</a></td>
</tr>

<?php
}
?>

</table>
<?php
$host='localhost';
$user='root';
$password='';
$db=mysqli_connect($host,$user,$password);
mysqli_select_db($db,'exemple2');
$req="SELECT `nom`, `prenom`, `tel` FROM `personne";
$result=mysqli_query($db,$req);
while($row=mysqli_fetch_assoc($result)){

}
?>

</body>
</html>
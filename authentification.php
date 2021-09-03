<?php
$login=$_REQUEST['txt_login'];
$pepper="g3tdtri";
$txt_password=hash_hmac("sha256",$_REQUEST['txt_password'],$pepper);
$host='localhost';
$user='root';
$password='';
$db=mysqli_connect($host,$user,$password);
mysqli_select_db($db,'exemple3');
$req="select * from user where login='$login'";

$resultat=mysqli_query($db,$req);
while($row=mysqli_fetch_assoc($resultat)){
    if(password_verify($txt_password,$row['password']) )
    {
        // user exist
        // accees pour passer
        session_start();
        $_SESSION['isauth']=true;
        $_SESSION['login']=$login;
        header('location:index.php');
    
    }else{
    
        header('location:auth.html');
    }
}






?>
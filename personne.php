<?php
require_once('dbclass.php');

class personne{
   private $nom;
   private  $prenom;
   private $tel;
   private  $photo;


    public function getNom(){
        return $this->nom;
    }
    public function setNom($nom){
        $this->nom=$nom;
    }
    public function getPrenom(){
        return $this->prenom;
    }
    public function setPrenom($prenom){
        $this->prenom=$prenom;
    }
    public function getTel(){
        return $this->tel;
    }
    public function setTel($tel){
        $this->tel=$tel;
    }
    public function getPhoto(){
        return $this->photo;
    }
    public function setPhoto($photo){
        $this->photo=$photo;
    }
    public function save(){
        $connect=new dbconnect();
        $db=$connect->connect();
        $req="INSERT INTO `personne`(`nom`, `prenom`, `tel`,photo) VALUES ('$this->nom','$this->prenom','$this->tel','$this->photo')";
        mysqli_query($db,$req);
    }
    public function update($id){
        $connect=new dbconnect();
        $db=$connect->connect();
        $req="UPDATE `personne` SET `nom`='$this->nom',`prenom`='$this->prenom',`tel`='$this->tel' WHERE `id`=".$id;
        mysqli_query($db,$req);

    }
}




?>
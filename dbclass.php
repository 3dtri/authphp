<?php  

class dbconnect{
  
    public function connect(){
        $host='localhost';
        $user='root';
        $password='';
        $db=mysqli_connect($host,$user,$password);
        mysqli_select_db($db,'exemple3');
        return $db;
    }
}
?>



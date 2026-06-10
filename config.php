<?php 
$dbname="universite";
$user="root";
$pwd="";
try{
    $cnx=new PDO("mysql:host=localhost;dbname=$dbname",$user,$pwd);
     echo "bien connecté<br/>";
  }catch(PDOException $e){
    die($e->getMessage());
}



?>
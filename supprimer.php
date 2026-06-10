<?php 
require("config.php"); 
 $code=$_GET["code"]??"";
 if(!empty($code)){
    $sql="delete from professeur where code=?";
    $stm=$cnx->prepare($sql);
    $stm->execute([$code]);
    header('Location:listeProf.php');
 }







?>
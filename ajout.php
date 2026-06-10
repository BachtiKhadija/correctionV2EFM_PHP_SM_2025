<?php
require('config.php');
 $nom=$_POST["nom"]??"";
 $adr=$_POST["adresse"]??"";
 $status=$_POST["status"]??"";
 $salaire=$_POST["salaire"]??"";
 $dateNaissance=$_POST["dateNaissance"]??"";
 if(empty($nom) || empty($adr)||empty($status)||empty($salaire)||empty($dateNaissance)){
    die("tous les champs sont obligatoires !!!");
 }else if(!is_numeric($salaire)){
    die("le salaire doit être numérique !!!");
 }else{
    $sql="insert into professeur values(null,?,?,?,?,?)";
   $stm=$cnx->prepare($sql);
   $stm->execute([$nom,$status,$adr,$dateNaissance,$salaire]);
   header('Location:listeProf.php');
    //nom,status,adresse,dateNaissance,salaire)
 }







?>
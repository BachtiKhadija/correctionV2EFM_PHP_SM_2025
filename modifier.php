<?php 
require('config.php');

  $code=$_GET["code"]??"";
     if(!empty($code)){
   $sql="select * from professeur where code =?";
   $stm=$cnx->prepare($sql);
   $stm->execute([$code]);
   $prof=$stm->fetch(PDO::FETCH_ASSOC);
    //si on clic sur send 
  if(isset($_POST["send"])){
   
    $code=$_POST["code"]??"";
 
   $nom=$_POST["nom"]??"";
  
    $adr=$_POST["adresse"]??"";
   $status=$_POST["status"]??"";
   $salaire=$_POST["salaire"]??"";
   $dateNaissance=$_POST["dateNaissance"]??"";
   echo $code."-".$nom." - ".$adr.'- '.$status." - ".$salaire." - ".$dateNaissance;
    $sql="update professeur set nom=?,status=?,adresse=?,dateNaissance=?,salaire=? where code=?";
   $stm=$cnx->prepare($sql);
   $stm->execute([$nom,$status,$adr,$dateNaissance,$salaire,$code]);
  echo "bien modifié";
   header('Location:listeProf.php');


  











    //*********** */







 }
     }
 else{
   
 echo "code invalide !!!!!";
 }
  





  



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="POST">
        <table>
            <tr><td>Code</td><td><input type="text" name="code" value="<?=$prof['code']??"";?>" readonly size="25"></td></td></tr>
            <tr><td>Nom</td><td><input type="text" name="nom" value="<?=$prof['nom']??"";?>" size="25"></td></tr>
       <tr><td>Adresse </td><td><input type="text" name="adresse" value="<?=$prof['adresse']??"";?>" size="25"></td></tr>
       <tr><td>Status</td><td><input type="radio" name="status" value="permanent" <?php echo (isset($prof["status"])&&$prof["status"]=="permanent")?"checked":""?>>Permanent &nbsp; <input type="radio" name="status" value="vacataire" <?php echo (isset($prof["status"])&&$prof["status"]=="vacataire")?"checked":""?>>Vacataire</td></tr>
       <tr><td>Date Naissance</td><td><input type="date" name="dateNaissance" value="<?=$prof['dateNaissance']??"";?>"></td></tr>
       <tr><td>Salaire</td><td><input type="text"  name="salaire" value="<?=$prof['salaire']??"";?>"></td></tr>
       <tr><td colspan="2"><button name="send" type="submit" value="send">update</button></td></tr>
    
    </table>
    </form>
    
</body>
</html>
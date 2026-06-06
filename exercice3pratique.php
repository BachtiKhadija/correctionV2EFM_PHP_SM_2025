<?php 
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $nbr=$_POST["val"]??"";
  $erreur="";
   $p=1;
  if(empty($nbr)){
    $erreur="le nombre est vide";

  }else if(!filter_var($nbr,FILTER_VALIDATE_INT)){
   $erreur="vous devez saisir un nombre !";
  }
  else{
  
   for($i=1;$i<=$nbr;$i++){
    if($i%2==1){
        $p*=$i;
    }
   }


  }



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
    <?php 

     if(!empty($erreur)){
        echo $erreur;
     }
?>
<form action="" method="POST">
 
<label for="">val</label>
<input type="text" name="val"><br>
<button>calculer</button>
</form>
<div>
    <?php  
       echo "le produit est : $p";
    ?>
</div>
</body>
</html>
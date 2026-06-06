<?php
  
if($_SERVER["REQUEST_METHOD"]=="POST"){
  //echo $_POST["val1"]." - ".$_POST["val2"];

 echo $_REQUEST["val1"]." - ".$_REQUEST["val1"];
 //$_REQUEST : pour recuperer les données saisies par l utilisateur
 //$_SESSION : pour garder des info partagées par toutes les pages tant que un user est connecté

}

//header => rediriger l utilisateur vers une autre page 
//exemple : header("Location: newPage.php?v=12&x=15")
//$_GET["v"] et $_GET["x"]


//include("db.php")=>importe le fichier db.php 
              //si le chemin est correct le compilateur execute les instructions suivantes
              //sinon , un warning va être affiché et toujours le compilateur execute les instructions suivantes
//require =>importe le fichier db.php 
              //si le chemin est correct le compilateur execute les instructions suivantes
              //sinon ,une exception bloque le reste du code
//require_one


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
        <label for="">Valeur 1</label>
        <input type="text" name="val1"><br>
    <label for="">Valeur 2</label>
        <input type="text" name="val2"><br>
        <button name="send" type="submit">Envoyer</button>
    </form>
</body>
</html>
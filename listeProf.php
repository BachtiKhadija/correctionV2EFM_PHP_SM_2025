<?php 
 require('config.php');
 //on a droit d utiliser $cnx
 $req="select * from professeur";
 $stm=$cnx->prepare($req);
 $stm->execute();
 $profs=$stm->fetchAll(PDO::FETCH_ASSOC);
  //var_dump($profs);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Liste professeur</h2>
    <p><a href="ajout.html">Ajouter</a></p>
    <table border="1"><thead><tr><th>code</th><th>nom</th>
<th>status</th><th>adresse</th><th>date Naissance</th><th>salaire</th><th>Actions</th></tr></thead>
  <tbody>
    <?php 
    foreach($profs as $p):
     echo "<tr><td>".$p["code"]."</td><td>".$p["nom"]."</td><td>".$p["status"]."</td><td>".$p["adresse"]."</td><td>".$p["dateNaissance"]."</td><td>".$p["salaire"]."</td>
     <td><a href='supprimer.php?code=".$p["code"]."'>suprimer</a>
     <a href='modifier.php?code=".$p["code"]."'>Modifier</a></td></tr>";

    endforeach;


   ?>
  </tbody>


</table>
</body>
</html>
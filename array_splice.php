<?php 
  $tab=array(12,10,4,8,9,11);
 //array_splice($tab,1,2);//a partir de la position 1 supprime deux elements
  // array_splice($tab,1,2,[55,88]);
//supprimer l element de position 2
//array_splice($tab,2,1);
unset($tab[2]);
$tab=array_values($tab);
echo"<pre>";
print_r($tab);
echo"</pre>";









?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
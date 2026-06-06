
//Exercice3
<?php
if(isset($_POST["send"])){
    $text=$_POST["t1"];
   if(!filter_var($text,FILTER_VALIDATE_INT)){
        echo("la valeur doit etre entier");
    }
    else{
        /*$p=1;
     $element=[];
    for($i=1;$i<$text;$i+=2){
       $p*=$i;
       $element[]=$i;
       
    }
    if(!empty($elemeny)){
        echo implode("*",$element)."=".$p;
    
    }
       
    */
    $tab=array_filter(range(1,$text-1),fn($i)=>$i%2==1);
    
    $res=array_reduce($tab,fn($t,$i)=>$i*$t,1);
    if(!empty($tab)){
        echo implode("*",$tab)."=".$res;
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
    <form action="" method="post">
        <p>saisir un en entier positif: <input type="text" name="t1"></p>
        <p><input type="submit" value="ok" name="send"></p>
    </form>
    
</body>
</html>
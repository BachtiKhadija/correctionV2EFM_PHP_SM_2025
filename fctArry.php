<?php  
$t=array("banane","watermelon","kiwi");
$v=array("item4","item5","item6");

/*$result=array_merge($t,$v);
print_r($result);
echo "<br/>";
print_r($t);
echo "<br/>";
print_r($v);*/

/*$result=array_diff($t,$v);
print_r($result);
echo "<br/>";
print_r($t);
echo "<br/>";
print_r($v);*/ 
$fruits=["banane"=>90,"pomme"=>60,"kiwi"=>50];

/*$filterdArr=array_filter($t,function($item){
   return strlen($item)>=6;
});*/
/*function test($x){
    return $x<=60;
}
$filterdArr=array_filter($fruits,"test");

print_r($filterdArr);*/ 
/*$tab=[20,10,50,30];
$result=array_map(function($item){
    return $item/2;
},$tab);
print_r($result);*/ 

$tab=["std1"=>16,"std2"=>18,"std3"=>20];
/*$result=array_map(function($item){return $item*2;},$tab);
print_r($result);*/ 
$res=array_reduce($tab,function($acc,$item){return $acc+$item;},0);
echo $res;





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
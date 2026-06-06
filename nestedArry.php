<?php 
 $result=file_get_contents("etudiant.json");
 //var_dump($result);
 //echo $result."<br/>".gettype($result);
 //convert to arry => JSON.parse() en javascript
 $students=json_decode($result,true);
 echo gettype($students)."<br/>";
 echo"<pre>";
 var_dump($students);

echo"</pre>";
 

$data=[];
foreach($students as $std){
  array_push($data,"<tr><td>".$std["cef"]."</td><td>".$std["nom"]."</td></tr>");
  
}
$data=implode("",$data);
 





?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr><th>CEF</th><th>Nom</th></tr>
        <?= $data; ?>
    </table>
</body>
</html>
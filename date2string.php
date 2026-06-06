<?php 
$date = new DateTime();//get today date
echo $date->format('d/m/Y');
//*************************** */
$date->format('d/m/Y');       // 06/06/2026
$date->format('Y-m-d');       // 2026-06-06
$date->format('d/m/Y H:i');   // 06/06/2026 10:30
$date->format('d-m-Y H:i:s'); // 06-06-2026 10:30:45
//********String to date ************ */
$dateString = "2026-06-06";

$date = new DateTime($dateString);
echo $date->format('d/m/Y');
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
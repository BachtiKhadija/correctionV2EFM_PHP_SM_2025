<?php
$notes = [12, 16, 20, 10, 7,5,4];
$fruits = array("pomme", "fraise", "kiwi");
$etudiants = [
    "nom" => "Ali",
    "age" => 20,
    "ville" => "Marrakech"
];
echo("<h2> le tableaux avant les modification </h2>");
echo(" <strong>tableau notes:</strong>");
print_r($notes);
echo(" <strong>tableau fruits:</strong>");
print_r($fruits);


echo"<h2> le resultat de array_push</h2>";
array_push($notes, 17); 
print_r($notes) ;


echo"<h2> le resultat de array_shift</h2>";
array_shift($notes);  
print_r($notes);

echo"<h2> le resultat de array_pop</h2>";
array_pop($notes);       
print_r($notes);

echo "Nombre d'éléments dans notes : " . count($notes) . "<br>"; 


echo"<h2> le resultat is_array</h2>";
if (is_array($fruits)) { 
    echo "C'est un tableau <br>";
}

echo"<h2> une autre maniere d'ajouter fruits[]=elementajouté </h2>";
$fruits[] = "orange";               // Ajoute à la fin
print_r($fruits);
echo"<h2> le resultat array_unshift</h2>";
array_unshift($fruits, "Mangue");   // Ajoute au début
print_r($fruits);
array_shift($fruits);               // Retire "Mangue" au début
echo"<h2> le resultat de unset</h2>";
unset($fruits[0]);                  // Supprime "pomme" à l'index 0 -> Les index restants sont [1, 2, 3]
print_r($fruits);

echo"<h2> le resultat in_array</h2>";
if (in_array("pomme", $fruits)) {
    echo "trouvé <br>";
} else {
    echo "pomme non trouvée <br>";
}

echo"<h2> le resultat array_search:</h2>";
echo array_search("pomme", $fruits); 

echo"<h2> le resultat du sort sur notes :</h2>";
sort($fruits); 
print_r($fruits);
echo"<br>";
sort($notes); 
echo"<h2> l'effet du implode :</h2>";
echo "Notes triées (croissant) : " . implode(" < ", $notes) . "<br>";

echo"<h2> le resultat du asort (notes) :</h2>";
rsort($notes);

echo "<pre>";
print_r($notes); 
echo "</pre>";



echo "<h2>Structure de l'etudiants après asort :</h2><br>";
asort($etudiants); // Trie le tableau associatif selon les valeurs (l'âge en premier, puis le nom, puis la ville)
echo "<pre>";
print_r($etudiants);
echo "</pre>";


ksort($etudiants); 

echo "<h2>Structure de l'etudiants après ksort :<h2> <br>";
echo "<pre>";
print_r($etudiants);
echo "</pre>";
echo "<h2>le resultat de array_key_exist :</h2><br>";
if (array_key_exists("age", $etudiants)) {
    echo "L'âge du stagiaire est " . $etudiants["age"] . " ans.<br>"; 
}

echo "<h2>Parcours des données du stagiaire :</h2>";
foreach ($etudiants as $cle => $valeur) {
    echo "<strong>" .$cle . "</strong> : " . $valeur . "<br>";
}



//Methodes de transformation

$noteBn=array_map(function($n){
    return $n+1;

},$notes);
echo"<h2> le resultat de array_map</h2>";
print_r($noteBn);

echo"<h2> le resultat de array_filter</h2>";
$noteSup=array_filter($notes,function($note){
    return $note>=7;
});
//fonction flechée
$noteSup=array_filter($notes,fn($n)=>$n>7);
print_r($noteSup);
echo"<h2> le resultat de array_reduce</h2>";

$somme_total=array_reduce($notes,function($total,$note){
    return $note+$total;
},0);
echo"$somme_total <br>";
?>
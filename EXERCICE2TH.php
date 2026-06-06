<?php  
 class Professeur{
    private $codeP;
    private $nomP;
    //...
    public function __construct($code,$nom){
        $this->codeP=$code;
        $this->nomP=$nom;
    }

    //
    public function __toString(){
        return "$this->codeP - $this->nomP";
    }
    //getCodeP
    public function getCodeP(){
        return $this->codeP;
    }
//setNom
 public function setNomP($val){
         $this->nomP=$val;
    }
 }

 $f=new Professeur(12,"prof");
 echo $f->getCodeP();
 //$f->nomP="nouveau";
 $f->setNomP("nouveau");
echo $f;

$listPro=array();
//$listPro[]=$f;
//array_push($listPro,$f);
array_splice($listPro,0,0,$f);
print_r($listPro);






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
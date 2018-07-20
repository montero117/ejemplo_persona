<?php

//incluir la clase
include "primer_objeto.php";
 /*
//instaciar la clase 
$maria= new Persona();
 
//asignar valores a las propiedades del objeto
$maria->setEdad(28);
$maria->setAltura(1.75);
$maria->setPeso(65);

$pedro=new persona();

$pedro->setEdad(28);
$pedro->setAltura(1.75);
$pedro->setPeso(65);

*/

$maria = new persona();

 
//asignar valores a las propiedades del objeto
$maria->setEdad(28);
$maria->setAltura(1.75);
$maria->setPeso(65);
 
 
echo "<br/>Edad: ".$maria->edad;
echo "<br/>Altura: ".$maria->altura;
echo "<br/>Peso: ".$maria->peso;
echo "<br/>IMC: ".$maria->imc();


/*
echo "<br/>Edad: ".$pedro->edad;
echo "<br/>Altura: ".$pedro->altura;
echo "<br/>Peso: ".$pedro->peso;
echo "<br/>IMC: ".$pedro->imc();
*/
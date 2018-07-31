<?php

//incluir la clase
include "primer_objeto.php";
include "clasecheo.php";
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
ddddddd
*/




$maria = new persona();


$maria->setputa("si es");

echo "<br/>edad: ".$maria->getPuta();
 
//asignar valores a las propiedades del objeto
//$maria->setEdad(28);
//$maria->setAltura(1.75);
//$maria->setPeso(65);
 
 
/*echo "<br/>Edad: ".$maria->edad;
echo "<br/>Altura: ".$maria->altura;
echo "<br/>Peso: ".$maria->peso;
echo "<br/>IMC: ".$maria->imc();
echo "<br/>IMC: ".$maria->imc2();
*/

/*
echo "<br/>Edad: ".$pedro->edad;
echo "<br/>Altura: ".$pedro->altura;
echo "<br/>Peso: ".$pedro->peso;
echo "<br/>IMC: ".$pedro->imc();
*/


require_once "motordata.php";
$db = new Database;
$user = new User($db);
$user->setId(18070660);
$user->settabla("CONSULTA_URGENCIAS");
 $user->getId();

 $users = $user->get();

 
foreach( $users as $user )
                    {
                        echo $user->FOLIO."\n".$user->CURP_PACIENTE."\n";
                    }

<?php
echo "<p> hola mundo </p>" ;
$int = 5 ;
echo  " <p> $int </p> ";
$double = 5.4 ;
echo  " <p> $double </p> ";
$string = 'hola' ;
echo  " <p> $string </p> ";
$boolean = 0 ;
echo  " <p> $boolean </p> ";
  if($boolean) {
    echo "verdadero" ;
      } 
   else {
  echo "falso";
   }

//1. Longitud de uns string

$cadena1 = "angel";
echo "<p> La longitud de cadena que dice $cadena1 es " . strlen($cadena1) . "</p>";

//2. invertir string

echo strrev($cadena1)."<br   >";
$cadena2 ="garciadiego";


//3. concatenar 2 string  

echo "$cadena1 $cadena2" ;
$cadena3="nancy";



?>
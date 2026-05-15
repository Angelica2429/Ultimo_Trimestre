<?php

//Variables y operaciones básicas

    echo "Ejercicio 1\n";

$num1 = 16;
$num2 = 12;
$resultado=($num1+$num2);
    echo "El resultado de la suma es:".$resultado."\n";

?>
<?php
    echo "\n";      
    echo "Ejercicio 2\n";

$num1 = 190;
$num2 = 4;
$resta =  ($num1-$num2);
$multi = ($num1*$num2);
$divi =  ($num1/$num2);
    echo "El resultado de la resta es:".$resta."\n";
    echo "El resultado de la multiplicación es:".$multi."\n";
    echo "El resultado de la división  es:".$divi."\n";
?>
<?php
    echo "\n";
    echo "Ejercicio 3\n";

$num1 = 20;
$cuadrado = ($num1**2);
$Cubo = ($num1**3);

    echo "El resultado de elevar al cuadrdo".$num1." es:".$cuadrado."\n";
    echo "El resultado de elevar al cubo".$num1." es:".$cuadrado."\n";

?> 
<?php
    echo "Ejercicio 4\n";


$grados = 59;
$fahrenheit=($grados*1.8+32);
    echo $grados." grados Celsius a Fahrenheit es =  ".$fahrenheit."\n";
?> 
<?php
  echo "Ejercicio 5\n";
$altura = 50;
$base =45;
$area= ($base+$altura/2);
    echo "El área de su triangulo es: ".$area."\n";
?> 
<?php
//Condiicionales (if,else,elseif)

  echo "Ejercicio 6\n";
$num1 = 51;
if ($num1  % 2 ===0){
     echo "El número ".$num1." es par\n";

}else{
    echo "El ".$num1." no es un número par";
}
?> 

<?php

  echo "Ejercicio 7\n";
$edad = 90;
if ($edad  > 18 ){
     echo "Eres mayor de edad \n";

}else{
    echo "Eres menor de edad";
}
?> 

<?php

  echo "Ejercicio 8\n";
$nume1 = 5667;
$nume2 = 5678;
if ($nume1  > $nume2 ){
     echo $nume1." es mayor que ".$nume2."\n";

}else{
    echo $nume2." es mayor que ".$nume1."\n";
}
?> 
<?php

  echo "Ejercicio 9\n";
$nota1 = 4.5;
$nota2 = 5.0;
$nota3 = 3.4;
$promedio = ($nota1+$nota2+$nota3)/3;
if ($promedio > 3.5){
     echo " Felicidades aprobaste con ".$promedio."\n";
}else{
      echo "Lamentablemente no aprobaste con ".$promedio."\n";
}
?> 
<?php

  echo "Ejercicio 10\n";
$contraseña = "php12345";
if ($contraseña === "php12345"){
     echo "Contraseña correcta\n";
}else{
    echo "Contraseña incorrecta\n";
}
?> 
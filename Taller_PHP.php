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
<?php

  echo "Ejercicio 11\n";
$num1 = -578678;
if ($num1 > 0){
    echo  $num1." es un número positivo\n";}
elseif ($num1 < 0){
    echo  $num1." es un número negativo\n";
}else{
    echo $num1." es = 0\n";
}
?> 
<?php

echo "Ejercicio 12\n";

$precio = 60000;

if ($precio > 50000) {
    $total = $precio - ($precio * 0.05); 
    echo  "El precio es ".$precio." se le hará un descuento del 5%. Su precio a pagar es: " . $total ."\n";

} elseif ($precio > 7000) {
    $total = $precio - ($precio * 0.07); 
    echo "El precio es ".$precio." se le hará un descuento del 7%. Su precio a pagar es: " . $total ."\n";

} else {
    echo "No hay descuento\n";
}
?>


<?php
echo "Ejercicio 13\n";

$ano = 2028;

if($ano % 4 == 0){
echo "Es un año Bisiesto\n";
}
else{
echo "No es año bisiesto\n";
}
?>

<?php

echo "Ejercicio 14\n";

$nota = 4;

if($nota >= 4.5){
echo "Excelente\n";
}
elseif($nota >= 4){
echo "Bueno\n";
}
elseif($nota >= 3){
echo "Regular\n";
}
else{
echo "Malisimoo\n";
}
?>

<?php
echo "Ejercicio 15\n";
$usuario="admin";
$pass="123";

if($usuario=="admin" && $pass=="123"){
echo "Bienvenido ".$usuario."\n";
}
else{
echo "Error\n";
}
?>

<?php
echo "Ejercicio 16\n";
for($i=1;$i<=10;$i++){
echo $i."\n";
}
?>

<?php
echo "Ejercicio 17\n";
$num=5;

for($i=1;$i<=10;$i++){
echo "5 x ".$i." = ".$num*$i."\n";
}
?>

<?php

echo "Ejercicio 18\n"; 
$suma=0;

for($i=1;$i<=100;$i++){
$suma += $i;
}

echo $suma;
?>

<?php
echo "Ejercicio 19\n"; 
for($i=2;$i<=50;$i+=2){
echo $i."\n";
}
?>

<?php

echo "Ejercicio 20\n"; 
for($i=10;$i>=1;$i--){
echo $i."\n";
}
?>

<?php

echo "Ejercicio 21\n"; 
$num=1;

while($num!=0){
$num=rand(0,10);

echo $num."\n";
}
?>

<?php
echo "Ejercicio 22\n"; 
$i=1;

while($i<=20){
echo $i."\n";
$i++;
}
?>

<?php

echo "Ejercicio 23\n"; 
$suma=0;

while($suma<=100){
$suma+=20;
}

echo $suma."\n";
?>

<?php
echo "Ejercicio 24\n"; 
$clave="";

while($clave!="123"){
$clave="123";
}

echo "Correcta\n";
?>


<?php

echo "Ejercicio 25\n"; 
$nums=[12,4,20,8,30];

$c=0;

foreach($nums as $n){
if($n>10){
$c++;
}
}

echo $c;
?>

<?php
echo "Ejercicio 26\n"; 
$nombres=["Ana","Luis","Juan","Sara","Pedro"];

print_r($nombres);
?>

<?php
echo "Ejercicio 27\n"; 
$lista=[1,2,3];

foreach($lista as $x){
echo $x."\n";
}
?>
<?php
echo "Ejercicio 28\n";
$lista=["manzana","pera"];

if(in_array("pera",$lista)){
echo "Existe";
}
?>

<?php
echo "Ejercicio 29\n";
$num=[3,4,5];

echo array_sum($num)/count($num);
?>

<?php
echo "Ejercicio 30\n";
$num=[5,1,7,2];

sort($num);

print_r($num);
?>

<?php
echo "Ejercicio 31\n";
$persona=[
"nombre"=>"Ana",
"edad"=>18
];

print_r($persona);
?>

<?php
echo "Ejercicio 32\n";
$datos=[
"nombre"=>"Luis",
"edad"=>20
];

print_r(array_keys($datos));
?>

<?php
echo "Ejercicio 33\n";
$datos=[
"nombre"=>"Luis",
"edad"=>20
];

print_r(array_values($datos));
?>

<?php
echo "Ejercicio 34\n";
$datos=[
"nombre"=>"Ana"
];

echo $datos["nombre"];
?>

<?php
echo "Ejercicio 35\n";
$agenda=[
"Ana"=>"300123",
"Juan"=>"311456"
];

echo $agenda["Ana"];
?>

<?php
echo "Ejercicio 36\n";
echo $_POST["a"]+$_POST["b"];
?>


<?php
echo "Ejercicio 37\n";
if($_POST["edad"]>=18){
echo "Mayor";
}
else{
echo "Menor";
}
?>


<?php
echo "Ejercicio 38\n";
if($_POST["user"]=="admin"
&& $_POST["pass"]=="123"){
echo "Correcto";
}
?>


<?php
for($i=1;$i<=10;$i++){
echo $_POST["num"]*$i."\n";
}
?>
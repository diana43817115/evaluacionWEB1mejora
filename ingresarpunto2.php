<?php

//2.recibir datos
if(isset($_POST["botonEnvio"])){

//Recibo los datos del formulario
$precio1=$_POST['precio1'];
$cantidad1=$_POST['cantidad1'];
$precio2=$_POST['precio2'];
$cantidad2=$_POST['cantidad2'];
$precio3=$_POST['precio3'];
$cantidad3=$_POST['cantidad3'];
$precio4=$_POST['precio4'];
$cantidad4=$_POST['cantidad4'];
$precio5=$_POST['precio5'];
$cantidad5=$_POST['cantidad5'];

$costototal=($cantidad1*$precio1+$cantidad2*$precio2+$cantidad3*$precio3+$cantidad4*$precio4+$cantidad5*$precio5);
$impuesto=($costototal*19)/100;
$costototalMasImp=($costototal+$impuesto);

echo(" Total : "),$costototal."<br />";

echo(" Impuesto del 19 % : "),$impuesto."<br />";

echo(" EL COSTO TOTAL DE LA COMPRA ES : "),($costototalMasImp);

}

?>
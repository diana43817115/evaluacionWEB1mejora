<?php

//2.recibir datos
if(isset($_POST["botonEnvio"])){

//Recibo los datos del formulario
$temperatuaraminima=$_POST['temperaturami'];
$temperaturamaxima=$_POST['temperaturama'];
$temperaturamedia=($temperaturamaxima+$temperatuaraminima)/2;

echo("LA TEMPERATURA MEDIA ES :  "),($temperaturamedia);
}

?>
<?php
/* 
--variables locales 
 son a  quelllas  que se definen dentro de una funcion y  no  pueden ser usadas fuera  de la c
 funcion ,solo estan disponibles dentro  al menos de un return
--variables globales 
son aquellas con la que se  declara fura y  estan disponibles  dentro y fuera


//frase global 
$frase ="nitu tela crees perro";

echo $frase;

function holaMundo(){
	global $frase;
	echo "<h1>$frase</h1>";
	
$año  =  2023;
echo "<h1>el año es: $año </h1>";
}

holaMundo();

*/

//funciones variables

function buenosDias(){
	return "<h2>Hola!  Buenos dias :)</h2>";
}

function buenasTardes(){
	return "Que tal te fue el  dia de hoy";
}

function buenasNoches(){
	return   "<h1>Hola Buenas noches</h1>";
}

$horario  = "buenosDias";
echo $horario();


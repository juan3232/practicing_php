<?php
echo "<h1>Funciones con array</h1>";
//poner alfabetica mente el array
$Nombre =['Brenda','Carlos','Daniela','Aron'];
asort($Nombre);
var_dump($Nombre);
echo "<br/>";
//ejemplo  de array de numeros

$numero =['1','2','3'];
asort($numero);
var_dump($numero);
echo "<br/>";
//añadir elementos a un array
array_push($Nombre,"Gary");
array_pop($Nombre);
unset($Nombre[0]);
var_dump($Nombre);

//Ejemplo numero dos con array  asociativos 
echo "<br/>";
echo "<h1>Nombres  de apellidos</h1>";
$apellidos =array(
		array(
		'apellido'=>'lando',
		'apellido1'=>'lando'
		),
		array(
		'apellido'=>'Hernandez',
		'apellido1'=>'Hernandez'
		)
);

var_dump($apellidos[1]);


//array normal
echo "<h1>Nombres de colores</h1>";
echo "<br/>";
	$colores  = ['Azul','Verde','Morado'];
	
echo  $colores[2];


//array asociativos

echo "<br/>";
echo "<h1>Nombres de personajes de  valorant</h1>";
$personajes= array(
	'personaje1'=>'jett',
	'personaje2'=>'viper',
	'personaje3'=>'race'
);
	
echo $personajes['personaje1']."<br/>". $personajes['personaje2']."<br/>".$personajes['personaje3']; 

echo "<br/>";   

//sacar un  array alateorio 
$nombre = array_rand($colores);
echo $colores[$nombre];
echo "<br/>";
//Dar la  vuelta 
var_dump(array_reverse($numero));
echo  "<br/>";
//Buscar adentro de un array
 $resultado = array_search('race',$personajes);
 var_dump($resultado);
 
 //count contar    numero de elementos
 echo "<br/>";
 echo count($colores);


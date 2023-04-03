<?php 

/*
Array 
es una coleccion de valores con  un unico nombre en forma de matirz (coleccion de datos, coleccin 
de variables) se puede entrar  con un indice alfa numerico    
*/

$pelicula = "Batman";
$pelicula = array('Batman','avatar','El Hombre Araña'); 
echo $pelicula[1];
echo "<br/>";

var_dump($pelicula[0]);
echo  "<br/>";

//otro tripo  de  array o de  otra   manera 

$cantantes = ['selena','juan','luis'];
var_dump($cantantes[0]);

echo "<br/>";

echo $cantantes[0];
echo "<br/>";

//ejercitando  este curso   con las mejores series 
$series =  array('Juego de tronos','The wire','Hermanos de sangre','Los simpsons','fargo');
var_dump($series);
//solo  escojeremos a  la serie fargo
echo "<br/>";
echo "<h1>$series[4]</h1>";
echo "<br/>";

//Ejercicio  del curso  de array  ahora con peliculas de  animacion y se  escojera   la 5 
$animacion = array('Caroline y la puerta secreta','Big Hero','la bella y la vestia','hisla de perros',
				   'cars','hercules');
				   
var_dump($animacion);
echo "<br/>";
echo "<h1>$animacion[5]</h1>";
echo "<br/>";

//ejercicio numero 3 con array  nombres mas comunes  en mexico y escogemos  el nombre de enmedio

	$nombres_Comunes =  array('sofia','ximena','valentina','regina','camila','maria');
	var_dump($nombres_Comunes);
	echo "<br/>";
	echo "<h1>$nombres_Comunes[3]</h1>";
	

//recorrer  con for
echo "<br/>";

echo "<h1>Listado de nombres comunes</h1>";
	echo "<ul>";
	for($i=0;  $i<count($nombres_Comunes); $i++){
		echo "<li>".$nombres_Comunes[$i]."</li>";
	}
	echo "</ul>";


//recorrer  array con foreach  segunda  manera 
	echo "<br/>";
	echo "<h1>Listado de nombres comunes 2.0</h1>";
	echo "<ul>";
foreach($nombres_Comunes  as $nom_com){
	echo  "<li>".$nom_com ."</li>";
	
}
echo "</ul>";

//ejercicio dos  con foreach  lo  que significa recorreme el array  de series y  en cada iteracion
//me  creas una bariable  que se llame se 
echo "<br/>";
echo "<h1>Listado de Series</h1>";
echo "<ul>";
foreach($series as $se){
	echo "<li>".$se."</li>";
}
echo "</ul>";


//otro  ejercicio con foreach

echo "<br/>";
echo "<h1>Peliculas de  animacion</h1>";
echo "<ul>";
	foreach($animacion as $ani){
		echo "<li>".$ani."</li>";
	}
echo "</ul>";

//juntando todo lo aprendido de como hacer un array y de como mostrarlo en forma de listas+
//con foreach perros

$valorant =  array('jett','viper','sage','raze','fenix','breach');

echo "<h1>aplicando  todo lo que  de   los array y como   mostrarlo en forma de lista</h1>";
echo "<ul>";
	foreach($valorant as $valo){
		echo  "<li>".$valo."</li>";
	}
	echo "</ul>";
	
//empleando  lo antes visto de los array  y de como se pueden visualisar  en forma de  lista
echo "<br/>";
echo  "<h1>Recordando  los  ejercicios  anteriores de array</h1>";
	
	$mapas_valo  =  array('icebox','Bind','havent','split','lotus');
echo  "<ul>";
	foreach($mapas_valo  as $map){
		echo "<li>".$map."</li>";
	}
echo "</ul>";

//ejercicios de array  asociativos 
echo   "<br/>";
echo  "<h1>array asociativos </h1>";
		$personas = array(
			'nombre' => 'Juan luis',
			'apellidos' => 'Hernandez Portillo',
			'web' => 'https:juanluishernandez'
		);
	
echo $personas['apellidos']."<br/>". $personas['nombre'];

echo "<br/>";
//ejemplo numero uno de array asociativo 

echo "<h1>Ejemplo numero  uno de array asociativo ahora con Marcas de telefonos</h1>";

	$telefono = array(
		'telefono1' =>'Apple',
		'telefono2'=> 'Samsung',
		'telefono3'=>'xiaomi',
		'telefono4'=>'Oppo',
		'telefono5'=>'Motorola',
		'telefono6'=>'Honor'
	);
	
	echo $telefono['telefono1'] . "<br/>" . $telefono['telefono2']; 
	

//ejercicio numero dos 
echo "<br/>";

echo "<h1>Segundo ejercicio numero dos</h1>";

	$colores = array(
		'color1' => 'Azul',
		'color2' => 'Rojo',
		'color3' => 'Rosa'
	);
	
echo $colores['color1'];

//ejercicio numero dos
echo "<br/>";

echo "<h1>El numeor  de  globos</h1>";

	$globos = array(
		'globo1'=>'azul 1',
		'globo2'=>'morado 2',
		'globo3'=>'verde 3',
		'globo4'=>'naranja 4'
	);
	
echo $globos['globo4'];


//ejercicio para ver si  aprendi hacer los  array

echo "<br/>";
echo "<h1>aprendiste o  nel perro</h1>";
	$cine = array(
		'cine1'=>'Cinepolis',
		'cine2'=>'Cinemex'		
	);
	
echo $cine['cine1'];
echo "<br/>";
var_dump($cine);

echo "<br/>";

//array multi dimencionales 
$contactos = array(
	array( 'nombre'=>'Juan Luis',
		   'email'=>'jlportillo953@gmail.com'
	),
	array( 'nombre'=>'Luis',
		   'email'=>'jl@gmail.com'
	),
	array( 'nombre'=>'pedro',
		   'email'=>'pedro@gmail.com'
	),
	array( 'nombre'=>'edgar',
		   'email'=>'edgar@gmail.com'
	),
	array( 'nombre'=>'mario',
		   'email'=>'mario@gmail.com'
	),
	array( 'nombre'=>'medina',
		   'email'=>'medina@gmail.com'
	)
);

echo  $contactos[5]['email'];

echo  "<br/>";
	
	foreach($contactos as $key =>$con){
		var_dump($con['email']);
	}
	
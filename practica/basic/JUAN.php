<!---------
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Formulario en php</title>
    </head>
    <body>
        <h1>Formulario  en php</h1>
        <form action="recibir.php" method="GET">
            <p>   
                <label for="txt_nombre">Nombre:</label>
                <input type="text"name="txt_nombre"/>
            </p>
            <p>
                <label for="apellido">Introduce tu apellido:</label>
                <input type="text"name="apellido"/>
            </p>

            <input type="submit" value="Enviar datos"/>

        </form>    
    </body>
</html>

----->

<!-------
<!DOCTYPE  html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Formulario de Nombre de perros</title>
    </head>
    <body>
        <h1>Ingresa El nombre de tu mascota</h1>
        <form action="recibir.php" method="GET">
        <P>
            <label for="nombre">Ingresa el  Nombre de tu mascota:</label>
            <input type="text" name="nombre">
        </P> 
        <p>
            <label for="dueño">Ingresa  el nombre del dueño de la mascota</label>
            <input type="text" name="dueño">
        </p>
        <input type="submit" value="Guardar Informacion">




        </form>
    </body>

</html>
---->

<!---
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Formulario nombre de  amigos</title>
    </head>
    <body>
        <h1>Ingresa nombre de amigos de tu infancia</h1>
        <form action="recibir.php" method="GET">
            <p>
                <label for="nombre">Nombre de tu primer amigo</label>
                <input type="text" name="nombre">
            </p>

            <p>
                <label for="segundo_amigo">Ingresa tu segundo amigo</label>
                <input type="text" name="segundo_amigo">
            </p>

            <input type="submit" value="Guardar">
        </form>
    </body>

</html>

----->

<!-----
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Familia</title>
</head>
<body>
    <h1>Ingresa Nombes de algun Familiar</h1>
    <form action="recibir.php" method="$_GET">
        <p>
            <label for="familia_Uno">Ingresa un Nombre de algun familiar</label>
            <input type="text" name="familia_Uno">
        </p>
        <p>
            <label for="familia_Dos">Ingresa un segundo  Nombre de algun familiar</label>
            <input type="text" name="familia_Dos">
        </p>

        <input type="submit"  value="Guardar">

    </form>
</body>

</html>

--->

<!---
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>lenguajes de progrmacion</title>
    </head>
    <body>
        <h1>Ingresa nombre de lenguajes de programacion mas conocidos</h1>
         <form action="recibir.php" method="GET">
            <p>
                <label for="nombre">Numero  Uno</label>
                <input type="text" name="nombre_Uno">
            </p>
            <p>
                <label for="nombre_dos">Numero Dos</label>
                <input type="text" name="nombre_Dos">
            </p>
            <input type="submit" value="Guardar perro">
         </form>
        
    </body>

</html>

--->
<!---
<!DOCTYPE html>
<html lang="es">
    <head>
     <meta charset="utf-8">
     <title>Colores</title>   
    </head>

    <body>
        <h1>Ingresa  nombre  de colores perro</h1>
        <form action="recibir.php" method="GET">
            <P>
                <label for="color">Ingresa  el primer color</label>
                <input type="text" name="color_Uno">
            </P>
            <p>
                <label for="color_dos">Ingresa el segundo color</label>
                <input type="text" name="color_Dos">
            </p>
            <input type="submit" value="guardar color">
        </form>
    </body>

</html>
---->

<!------

<!DOCTYPE  htmal>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Nombres de tus hijos</title>
    </head>

    <body>
        <h1>Nombre de tus proximos hijos</h1>
        <form action="recibir.php" method="GET">
            <P>
                <label for="name">Ingresa nombre del  primer hijo</label>
                <input type="text" name="hijo">
            </P>
            <p>
                <label for="name2">Ingresa El segundo nombre del hijo</label>
                <input type="text" name="hijo_Dos">
            </p>

            <input type="submit" value="Guardar">
        </form>
    </body>
</html>

---->


<!------

<!DOCTYPE html>
<html lang="es">
    <body>
        <meta  charset="utf-8">
        <title>Nombre de maestros</title>
    </body>

    <head>
        <h1>escribe el nombre de tus  profesores   faboritos</h1>
        <form action="recibir.php" method="GET">
            <P>
                <label for="name">Escribe el primer nombre de tu  profesor</label>
                <input type="text" name="txt_nombre">
            </P>
            <p>
                <label for="name2">Esctibe el segunddo nombre de tu profesor preferido</label>
                <input type="text" name="txt_nombre2">
            </p>
            <input type="submit" value="Enviar">

        </form>
    </head>

</html>
---->


<!------
<!DOCTYPE  html>
<html lang"es">  
	<body>
		<meta charset"utf-8">
		<title>escribe dos ingenierias</title>
	</body
	
	<head>
	<h1>Escribe dos   ingenierias mas chingonas</h1>
		<form action="recibir.php" method="GET">
			<p>
				<label for="name">Primera ingenieria mas  chingona</label>
				<input   type="text" name="uno">    
			</p>
			<p>
				<label>Segunda ingenieria mas chingona</label>
				<input type="text" name="dos">
			</p>
			
			 <input type="submit" value="Guardar">
			 
		</form>
	</head>
 </html>
 ---->
 
 <!-----
 <!DOCTYPE html>
 <html lang="es">
	<body>
		<meta charset="utf-8">
		<title>ingresa el nombre de perras</title>
	</body>
	
	<head> 
		<h1>escribe nombre de perras</h1>
			<form action="recibir.php" method="GET">
					<P> 
						<label for="name">ingresa primera perra</label>
						<input type="text" name="numero1">   
					</P>
					<p>
						<label for="name2">ingresa la segunda perra</label>
						<input type="text" name="numero2">
					</p>
					
					<input type="submit" value="Guardar perras">
					
			</form>
	</head>
	
 </html>
 ---->
 
<!------
 <!DOCTYPE html>
 <html lang="es">
	<body>
		<meta charset="utf-8">
		<title>jugos</title>
	</body>
	
	<head>
		<h1>ingresa dos nombres  de jugos</h1>
		<form action="recibir.php" method="GET">
			<P>
				<label for="name">Primer nombre del jugo</label>
				<input type="text" name="uno">
			</P>
			
			<p>
				<label for="name2">Segundo nombre de jugo</label>
				<input type="text" name="dos">
			</p>
			
			<input type="submit" value="Guardar">
		
		</form>
		
	</head>
 </html>
 ---->
 
 <!--------
 <!DOCTYPE html>
 <html lang="es">
	<body>
		<meta charset="uft-8">
		<title>Escuela</title>
	</body>
	
	<head>
		<h1>Ingresa el nombre  de tu Univercidad</h1>
		
		<form action="recibir.php" method="GET">
		<P> 
			<label for="name">Escribe el nombre de tu univercidad</label>
			<input type="text" name="name1">
		</P>
		
		<p>
			<label for="name2">Esctribe  cual quier nombre  de otra univercidad</label>
			<input type="text" name="name2">
		</p>
		
		<input type="submit" value="Guardar">
		
		</form>
	</head>
 
 
 </html>
 
 ----->
 
 
<?php


	//Funciones con php  son conjunto de ordenes agrupados por un nombre en concreto 
	
	function muestraNombres(){
		echo 'juan luis</br>';
		echo 'hernandez</br>';
		echo 'hernandez </br>';
		echo "portillo </br>";
	}	
	
	//inbocar funcion muestraNombres();
	
	//muestraNombres();
	
	//ejemplo 2 en tablas
	function tabla($numero){
		echo "<h1>Tabla de multiplicar  del Numero:$numero </h1>";
		for($i=1; $i<=10; $i++){
			$operacion =  $numero*$i;
			echo "$numero x  $i = $operacion </br>";
			
		}
	}
	
	tabla('77');
	
	
	//ejemplo  numero 3
	function calculadora($numero1,$numero2,$negrita = false){
		
		//conjunto de  instrucciones a ejecutar
		$suma = $numero1 + $numero2;
		$resta = $numero1 - $numero2;
		$multiplicar = $numero1 * $numero2;
		$cadena_texto = "";
		if($negrita){
			$cadena_texto .= "<h1>";
			
		}
		$cadena_texto .= "Suma: $suma </br>";
		$cadena_texto .= "Resta: $resta </br>";
		$cadena_texto .="Multiplicacion: $multiplicar </br>";
		if($negrita){
			$cadena_texto .= "</h1>";
			
		}
		
		return $cadena_texto;
	}
	
	echo  calculadora(2,5); 
	echo calculadora(10,35,true);
		
		
	
	function  getNombre($nombre){
		$teto ="El nombre es : $nombre";
		return $teto;		
	}
	
	function getApellidos($apellidos){
		$text  = "el apellido es: $apellidos";
		return  $text;
	}
	
	function nombreDePerro($perro){
		$nom1 ="El nombre de tu perro es:$perro";
			return $nom1;
	}
	
	
	function  nombreDeGato($gato){
		$gato ="El Nombre del gato es: $gato";
			return $gato;
		
	}
	
	function personaje($personaje){
		$personaje = "El nombre del personaje es: $personaje";
			return $personaje;
	}
	
	function devuelveElNombre($nombre,$apellidos,$perro,$gato,$personaje){
		$texto = getNombre($nombre)
				."<br/>". getApellidos($apellidos)
				."<br/>".nombreDePerro($perro)
				."<br>".nombreDeGato($gato)
				."<br/>".personaje($personaje);
		return  $texto;
	
	}
	echo devuelveElNombre("Juan","Hernandez","daysi","coquito","Capitan America");
	echo "<br>";
	echo   "<h1>Nombre de animalitos</h1>";
	
	
	
	function nombresDeAnimalitos($perro,$gato){
		$nombreDelosAnimalitos = nombreDePerro($perro)
		."<br>".nombreDeGato($gato);
		return  $nombreDelosAnimalitos;	
	}
	echo nombresDeAnimalitos("daysi","coquito");
	
	//nueva funcion de personajes 
	echo "<h1>El nombre  delpersonaje</h1>";
	function  personajes($personaje){
		$txt_personaje = personaje ($personaje);
		return $txt_personaje;
	}
	echo personajes("Hombre Araña");
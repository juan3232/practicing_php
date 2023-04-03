<?php 

		//desbugear
		$nombre =  "juan hernandez";
		var_dump($nombre."<br/>");
	
	//Fechas
	echo date('d-M-y'."</br>");
	echo "<br/>";
	echo time();
	echo "<br/>";
	//funciones matematicas
	
	echo  "La  raiz cuadrada de 10 es ".sqrt(10);
	
	//numero aleatorio 
	echo  "Numero aleatorio es --->". rand(10,40);
	echo "<br/>";
	//sacar el   numero  pi
	echo "sacar  el numero p:--->".pi();
	
	//redondear la  nota de un alumno 
	echo  "<br/>";
	echo "la calificacion  redondeada es-->".round(5.8888888888);
	
	//mas  variaciones
	echo "<br/>";
	echo gettype($nombre);
	
	//comprobar si es un string
	echo "<br/>";
	
	if(is_string($nombre)){
		echo "Es un estring";	
	}else{
		echo "No lo es puta madre";
	}
	

	echo "<br/>";
	
	if (isset($edad)){
		echo "la variable  si existe";
	}else{
		echo "La variable no existe por favor verifique pendejo";
	}
	
	
	//linpiar los espacios con esa  funcion 
	echo "<br/>";
	$frase ="                hola como has estado amigo          ";
	var_dump(trim($frase));
	
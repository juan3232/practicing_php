<?php include 'cab.php';?>
	<!---Contenido---->
	<div> 
		<h2>Esta es la pagina de contacto</h2>
		<p>Texto de prueba de la pagina de inicio mi perros 3.0</p>
		
		<form action="recibir.php" method="GET">
		<p>
			<label for="name">Nombre completo</label>
			<input type="text" name="nombre">
		</p>
		
		<p>
			<label for="name2">Numero de celular</label>
			<input type="text" name="numero">
		</p>
		
		<input type="submit" value="Guardar">
		
		
	</div>
	
	<?php include 'foooter.php'?>
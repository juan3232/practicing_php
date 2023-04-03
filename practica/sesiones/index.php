<?php
//trrabajar con  las sesiones: al macenar y persistir datos del usuario mientras que  navega en un sitio web
//hasta  que sierra cesion o sierra  la pagina 

//niciar la seesion
session_start();
//Variable local 
 $variable_nombre = "soy juancho perro";
//variable de sesion 
$_SESSION['variable persistente']="hola soy una sesion activa";

echo $variable_nombre."<br/>";
echo $_SESSION['variable persistente'];


?>
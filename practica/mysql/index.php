<?php
//conectar a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "aprendiendomysql");

//comprovar  si  la contraseña es correcta
if (mysqli_connect_errno()) {
    echo "Error de conecxion hacia la base de datos MYSQL:" . mysqli_connect_error();
} else {
    echo "conexion exitosa";
}

//consulta para configurar la codificacion de caracteres 
mysqli_query($conexion, "SET NAMES 'utf8'");

//consulta SELECT  desde sqli
$query = mysqli_query($conexion, "SELECT * FROM notas");
while ($nota = mysqli_fetch_assoc($query)) {
    var_dump($nota);
}

echo "<br>";
/*insertar un dato en la base de datos desde php 

$sql = "INSERT  INTO  notas VALUES(null, 'nota desde php', 'esto es  una nota de php', 'mostasa')";
$insert =  mysqli_query($conexion,$sql);

if($insert){
    echo "la insercion se realizo correctamene";
}else{
    echo "la insercion salio mal verifique el sistema por favor". mysqli_error($conexion);
}
*/
/*
//ELIMINAR  
$sql = "DELETE FROM notas WHERE id ='4'";
$insert  = mysqli_query($conexion,$sql);
if($insert){
    echo "se elimino  correctamente";
}else{
    echo "Error la consulta no se elimino".mysqli_error($conexion);
}
*/


$sql = "DELETE FROM notas WHERE titulo ='nota 1' ";
$insert = mysqli_query($conexion,$sql);
if($insert){
    echo"Correcto";
}else{
    echo "No se puedo eliminar  la consulta".mysqli_error($conexion);
}
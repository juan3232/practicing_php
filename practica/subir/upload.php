<?php

$archivo = $_FILES['archivo'];
$nombre = $archivo['name'];
$tipo = $archivo['type'];

if($tipo == "image/jpg" || $tipo == "image/jpg" || $tipo == "image/png" || $tipo == "image/gif" || $tipo == "image/pdf" ){
    if(!is_dir('images')){
        mkdir('images',0777);
    }

    move_uploaded_file($archivo['tmp_name'],'images/'.$nombre);
    header("Refresh; 10,URL=index.php");
    echo "<h1>Imagen subida correctamente</h1>";

}else{
    header("Refresh: 5 ,URL=index.php");
    echo "<h1>sube la imegen con un formato correcto porfavor</h1>"; 
}








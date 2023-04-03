<?php



/*
$archivo = $_FILES['archivo'];
$nombre = $archivo['name'];
$tipo = $archivo['type'];


if($tipo == "image/png"){
    if(!is_dir('images')){
        mkdir('images',0777);
    }
    move_uploaded_file($archivo['tmp_name'],'images/'.$nombre);
    echo "<h1>Correcto</h1>";
}else{
   echo "<h1>Incorrecto</h1>";
}
*/

$archivo = $_FILES['archivo'];
$nombre  = $archivo['name'];
$tipo = $archivo['type'];


if($tipo == 'image/png'){
    if(!is_dir('images')){
        mkdir('images',0777);
    }
    move_uploaded_file($archivo['tmp_name'],'images/'.$nombre);
    echo "correcto";
}else{
    echo "Incorrecto";
}
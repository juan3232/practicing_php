
<?php

$error = 'faltan_valores';

if(!empty($_POST['nombre']) &&
!empty($_POST['apellidos'])&&
!empty($_POST['edad'])&&
!empty($_POST['email'])&&
!empty($_POST['contraseña'])){

$error = 'ok';

$nombre =  $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$edad = $_POST['edad'];
$email  = $_POST['email'];
$contraseña = $_POST['contraseña'];

//Validar el Nombre
if(!is_string($nombre)  &&  !preg_match("/(a-zA-Z )+/",$nombre)){
        $error = 'nombre';
}
//Validar el apellidos
if(!is_string($apellidos)  &&  !preg_match("/(a-zA-Z )+/",$apellidos)){
    $error = 'apellidos';
}

//Validar el edad
if(!is_int($edad) && !filter_var($edad, FILTER_VALIDATE_INT)){
    $error = 'edad';
}

//Validar el EMAIL
if(!is_numeric($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)){
    $error = 'email';
}
//Validar el contraseña
if(empty($contraseña) && strlen($contraseña)<5){
    $error = 'contraseña';
}


}else{
    $error = 'faltan_valores';
    header("Location:index.php?error=$error");   
}

if($error != 'ok'){
    header("Location:index.php?error=$error");
}

?>
<!DOCTYPE html>
<html lang="en">
 <head>
        <meta charset="UTF-8">
        <title>validdacion  de formularios</title>
 </head>

 <body>
    <h1>Datos validados   correcta  mente</h1>
    <?php if($error  == 'ok'): ?>
        <p> <?=$nombre?></p>
        <p><?=$apellidos?></p>
        <p> <?=$edad?></p>
        <p><?=$email?></p>
    <?php endif; ?>

 </body>
</html>






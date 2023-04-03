<?php

$resultado = false;

if(isset($_POST['n1'])&& isset($_POST['n2'])){
   
    if(isset($_POST['sumar'])){
        $resultado = "El resultado es: ".($_POST['n1'] + $_POST['n2']);

    }

    if(isset($_POST['resta'])){
        $resultado = "El resultado es: ".($_POST['n1'] - $_POST['n2']);

    }

    if(isset($_POST['multiplicar'])){
        $resultado = "El resultado es: ".($_POST['n1'] * $_POST['n2']);

    }

    if(isset($_POST['dividir'])){
        $resultado = "El resultado es: ".($_POST['n1'] / $_POST['n2']);

    }

}


?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>hola</title>
    </head>
    <body>
        <h1>Calculadora en php</h1>
        <form action="" method="POST">
            <label for="n1">Ingresa un numero</label><br>
            <input type="number"  name="n1"><br>

            <label for="n2">Ingresa el siguiente numero</label><br>
            <input type="number" name="n2"><br>
            <br>

            <input type="submit" value="sumar" name="sumar">
            <input type="submit" value="resta" name="resta">
            <input type="submit" value="multiplicar" name="multiplicar">
            <input type="submit" value="dividir" name="dividir">
        </form>

        <?php 
            if($resultado !=false):

                    echo "<h2>$resultado</h2>";
            endif;

        ?>
        

    </body>

</html>
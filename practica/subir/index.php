
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>file</title>
    </head>    

    <body>
        <h1>Formulario de archivo</h1>
        <hr>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
           <input type="file" name="archivo"><br>
           <input type="submit"  value="Enviar">
        </form>

        <h1>Listado de  imagenes</h1>
        <?php
        //directorio
        $gestor =  opendir('./images');

        if($gestor){                                //distinto  a falso
            while (($image = readdir($gestor)) !==false ){
                        //es diferente aun punto y tambien es diferente aun ..
                if($image != '.' &&  $image != '..'){
                    //      directorio y le ponemos el nombre de la imagen 
                    echo "<img src='images/$image'width='200px'/> <br/>";

                }
            }

        }

        ?>
    </body>
</html>






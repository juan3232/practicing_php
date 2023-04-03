      
    
      <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>validdacion  de formularios</title>
        </head>
        <body>
            <h1>Validar   formularios   en php</h1>
      
            <?php
            if(isset($_GET['error'])){
                $error = $_GET['error'];
                if($error == 'faltan_valores')
                        echo '<strong style="color:red">Colo que todo lo necesario dee todos los formularios</strong>';
                    {
                }
            }
            ?>

            <form action="recibir.php" method="POST">

                <label for="nombre">Nombre</label><br>
                <input type="text" name="nombre" required="required" pattern="[A-Za-z ]+"><br>

                <label for="apellidos">Apellidos</label><br>    
                <input type="text" name="apellidos" required="required" pattern="[A-Za-z ]+"><br>

                <label for="edad">Edad</label><br>
                <input type="number" name="edad" required="required" pattern="[0-9]+"><br>

                <label for="email">Email</label><br>
                <input type="email" name="email" required="required"><br>

                <label for="contraseña">Contraseña</label><br>
                <input type="password" name="contraseña"><br>
                <br>
                <input type="submit" value="Guardar">

            </form>
        </body>
        </html>

        



       
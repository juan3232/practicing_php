<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>No te desanimes Te amo</title>
</head>

<body>
    <h1>Hola no estes asi tranquilo no pasa nada, Lo estas haciendo bien</h1>
    <h2>Foemulario</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="nombre">Nombre:</label>
        <p><input type="text" name="nombre"></p>

        <label for="apellido">Apellido:</label>
        <p><input type="text" name="apellido"></p>

        <input type="submit" value="Enviar">

        <br>
        <label for="boton">boton:</label>
        <p><input type="button" name="boton" value="hola mis perros"></p>

        <label for="sexo">sexo:</label>
        <p>
         Hombre:<input type="checkbox" name="sexo" value="Hombre">
         Mujer:<input type="checkbox" name="sexo" value="Mujer" checked="checked">
        </p>

        <label for="color">Color:</label>
        <p><input type="color" name="color"></p>

        <label for="fecha">Fecha:</label>
        <p><input type="date" name="fecha"></p>

        <label for="correo">correo:</label>
        <p><input type="email" name="correo"></p>

        <label for="archivo">archivo:</label>
        <p><input type="file" name="archivo" multiple="multiple"></p>

        <label for="numero">Numero:</label>
        <p><input type="number" name="numero" ></p>

        <label for="contraseña">Contraseña:</label>
        <p><input type="password" name="contraseña"></p>

        <label for="continente">Continente:</label>
        <p>
          sur  america:<input type="radio" name="continente" value="america del sur">
          norte america:<input type="radio" name="continente" value="america del norte">
          oeste<input type="radio" name="continente" value="america del oeste">
        </p>

        <label for="web">Pagina web:</label>
        <p><input type="url" name="web"></p>

        <textarea></textarea>
        <br>
        personajes de   valorant
        <select name="valorant">
            <option value="jett">jett</option>
            <option value="viper">viper</option>
            <option value="raze">raze</option>
            <option value="sage">sage</option>
            <option value="skye">skye</option>
        </select>
    </form>
</body>

</html>

<!---- --->
<!----Esto es para   los  formularios  enfocar label autofocus="autofocus"
<label for="apellido">Apellido:</label>
<p><input type="text" name="apellido" 
autofocus="autofocus"></p> ------>

<!---- esto sirve para que un campo este desabilitado  disabled="disabled"
<label for="apellido">Apellido:</label>
<p><input type="text" name="apellido" disabled="disabled"></p>
--->



<!----Esto  sirbe para  poner cuantos  carracteres quieres que ingrese o letras maxlength="5"
<label for="apellido">Apellido:</label>
<p><input type="text" name="apellido" maxlength="5"></p>
--->


<!----tiene que sobrepasar los carracteres menncionados en este ejemplo seria mas de 5 minlength="5"
<label for="apellido">Apellido:</label>
<p><input type="text" name="apellido" minlength="5"></p>
--->



<!----En este caso se tiene  que  poner las letras en mayusculas con pattern="[A-Z ]
<label for="apellido">Apellido:</label>
<p><input type="text" name="apellido" pattern="[A-Z ]+"></p>
--->




<!----En este caso es requerido que llene  algun espacio  del formulario  con required="required"
<label for="apellido">Apellido:</label>
<p><input type="text" name="apellido" required="required"></p>
--->



<!---- en este  caso se rellena el  label   con lo requerido con placeholder="Ingresa tu Apellido"
<label for="apellido">Apellido:</label>
<p><input type="text" name="apellido" placeholder="Ingresa tu Apellido"></p>
--->
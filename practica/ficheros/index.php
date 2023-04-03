<?php
/*
//abrir archivo 
$archivo  = fopen("texto.txt", "a+");

//leer  contenido
while (!feof($archivo)) {
    $contenido = fgets($archivo);
    echo  $contenido . "<br/>";
}

//escribir en un archivo
fwrite($archivo,"---------------shoy un peerri");

//cerar archivo
fclose($archivo);
*/

//copiar
//copy('texto.txt','fichero_copiado.txt') or die("Error al  copiar");

//renombrar un fichero
//rename('fichero_copiado.txt','arcivo_copopiadito.txt');

//eliminar un  archivo
//unlink('arcivo_copopiadito.txt')or die('Error al   borrar');
if(file_exists("texto.txt")){
    echo "El  archivo existe";
}else{
    echo  "El archivo no existe";
}



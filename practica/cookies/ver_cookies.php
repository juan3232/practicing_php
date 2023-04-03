<?php



//para mostrar el valor de las cookies  tengo que husar $_COOKIE,variable super global y es  un array
//asociativo 

if(isset($_COOKIE['micookie'])){
    echo "<h1>" .$_COOKIE['micookie']. "</h1>";
}else{
    echo "No  existe  la cookie";
}

?>

<a href="borrar_cookie.php">Borar mi galleta</a>
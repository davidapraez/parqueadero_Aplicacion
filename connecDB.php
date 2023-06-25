<?php
function conectar(){
    $bd = mysqli_connect("34.233.135.157","user","userpasword","parqueadero");
    if (!$bd){
        echo "<h3>Conexión no realizada<h3>";
        return NULL;
    }
    return $bd;
}
?>
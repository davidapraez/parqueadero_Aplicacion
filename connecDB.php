<?php
function conectar(){
    $bd = mysqli_connect("localhost","root","","Parqueadero");
    if (!$bd){
        echo "<h3>Conexión no realizada<h3>";
        return NULL;
    }
    return $bd;
}
?>
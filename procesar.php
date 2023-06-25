<?php
      include("connecDB.php");
      $bd = conectar();

      $tipo_vehiculo = $_REQUEST["tipo_vehiculo"];
      $placa = $_REQUEST["placa"];
      $color = $_REQUEST["color"];
      $marca = $_REQUEST["marca"];
      $fecha=$_REQUEST["fecha"];
      $nombre_propietario=$_REQUEST["nombre_propietario"];
      $cedula=$_REQUEST["cedula"];
      $txt_telefono=$_REQUEST["txt_telefono"];
      $direccion=$_REQUEST["direccion"];
      $txt_pw=$_REQUEST["txt_pw"];

      $sql="insert into parqueadero values ('$tipo_vehiculo','$placa','$color','$marca','$fecha',
      '$nombre_propietario','$cedula','$txt_telefono','$direccion','$txt_pw')";
      
      $res = mysqli_query($bd,$sql);
      if (!$res){
        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
        <strong>Error</strong><br>La cedula registrada ya existe!!.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
        </button></div>";
        //echo mysqli_error($bd);
        //echo " - "  .  mysqli_errno($bd);
    }
    else{
        echo "<div class='alert alert-info alert-dismissible fade show' role='alert'>
        <strong>Atención</strong><br>Registro adicionado con éxito!!.    

        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
        </button></div>";
        header("Location: info.php");
exit;
    }
    mysqli_close($bd);
?>
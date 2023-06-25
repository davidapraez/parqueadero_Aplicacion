<table class="table table-striped">
      <thead>
          <tr>
              <th>Tipo vehiculo</th>
              <th>Placa</th>
              <th>Color</th>
              <th>Marca</th>
              <th>Fecha</th>
              <th>Propietario</th>
              <th>Cedula</th>
              <th>Telefono</th>
              <th>Direccion</th>
              <th>Password</th>
          </tr>
      </thead>
      <tbody>
          <?php
              include("connecDB.php");
              $bd = conectar();
              $sql = "select * from parqueadero";
              $datos = mysqli_query($bd,$sql);
              $c=0;
              while($arr = mysqli_fetch_array($datos)){
                  echo "<tr>";
                  echo "<td>$arr[0]</td>";
                  echo "<td>$arr[1]</td>";
                  echo "<td>$arr[2]</td>";
                  echo "<td>$arr[3]</td>";
                  echo "<td>$arr[4]</td>";
                  echo "<td>$arr[5]</td>";
                  echo "<td>$arr[6]</td>";
                  echo "<td>$arr[7]</td>";
                  echo "<td>$arr[8]</td>";
                  echo "<td>$arr[9]</td>";
                  echo "</tr>";
                  $c++;
              }
              mysqli_close($bd);
          ?>
      </tbody>
  </table>
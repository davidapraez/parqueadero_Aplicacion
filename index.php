<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulario</title>
    
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="styles.css">
</head>  
<body>
    <div class=" container contenido">
      <div class="text-center">
        <h2>Parqueadero David </h2>
        <h3 class="text-center">Datos del vehiculo </h3>
          
      </div>
      <form method="action" action="./procesar.php">
        <div class="row mb-3"<>
          <div class="col">
              <label for="validationCustom04" class="form-label">Vehiculo</label>
                <input type="text" name="tipo_vehiculo"  class="form-control inText"id="tipo_vehiculo" value="Camioneta">
          </div>
          <div class="col">
            <label for="exampleInputPassword1" class="form-label"
              >Placa</label
            >
            <input
              type="text"
              id="placa"
              name="placa"
              class="form-control inText"
              value="XXX-000"
            />
          </div>
        </div>
        <div class="row mb-3">
          <div class="col">
            <label for="exampleInputPassword1" class="form-label">Color</label>
            <input
              type="text"
              class="form-control inText"
              value="Plateado"
              id="color"
              name="color"
            />
          </div>
          <div class="col">
            <label for="exampleInputEmail1" class="form-label">Marca</label>
            <input
              type="text"
              class="form-control inText"
              value="Mazda"
              id="marca"
              name="marca"
            />
          </div>

        </div>
        <div class="row mb-3">
          <div class="col">
            <label for="exampleInputPassword1" class="form-label"
              >Fecha de Ingreso</label
            >
            <input
              type="datetime-local"
              class="form-control inText"
              id="fecha"
              name="fecha"
              placeholder="dd/mm/yyyy"
            />
          </div>
       <div class="text-center">
        <h3 class="text-center">Datos del propietario</h3>
      </div>
        
        <div class="row mb-3">
          <div class="col">
            <label for="exampleInputEmail1" class="form-label">Propietario </label>
            <input
              type="text"
              min="0"
              max="100"
              step="1"
              class="form-control inText"
              value="Omar David"
              id="nombre_propietario"
              name="nombre_propietario"
            />
          </div>
          <div class="col">
            <label for="exampleInputPassword1" class="form-label"
              >Cedula</label
            >
            <input
              type="text"
              class="form-control inText"
              id="cedula"
              name="cedula"
            />
          </div>
          
        </div>
        <div class="row mb-3">
          <div class="col">
            <label for="exampleInputEmail1" class="form-label">Telefono</label>
            <input
              type="text"
              class="form-control inText"
              value="3103030303"
              id="txt_telefono"
              name="txt_telefono"
             
            />
          </div>
          <div class="col">
            <label for="exampleInputEmail1" class="form-label"
              >Direccion</label
            >
            <input
              type="text"
              class="form-control inText"
              value="Universidad de Nariño"
              id="direccion"
              name="direccion"
            />
          </div>
        </div>
              <div class="col">
                <label for="exampleInputEmail1"  class="form-label">Password</label>
                <input
                  type="password"
                  class="form-control inText"
                  value="123" 
                  id="txt_pw" 
                  name="txt_pw"         
                />
              </div>

              <div class="mb-3">
                  <label for="exampleInputEmail1"  class="form-label">Confirmar</label>
                  <input
                    type="password"
                    class="form-control inText"
                    id="txt_conf"
                    value="123"
                    name="txt_conf" 
                   
                  />
                </div>

            <div class="text-center">
              <br>
              <input type="submit" value="Enviar" " />
        </div>
        
      </form>
    </div>




  </body>
</html>


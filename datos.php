<?php

include('includes/coneccion.php');
session_start();

if ($_SESSION) {
  header("Location:datos.php");
}


if(isset($_REQUEST['enviar'])){

  
  //datos del registrado
  $nomb_emp=$_REQUEST['nombre'];
  $dir_emp=$_REQUEST['direccion'];
  $num_ext=$_REQUEST['numEx'];
  $num_int=$_REQUEST['numInt'];
  $edo_emp=$_REQUEST['edo'];
  $mpio_emp=$_REQUEST['mpio'];
  $pob_emp=$_REQUEST['poblacion'];
  $col_emp=$_REQUEST['col'];
  $cp_emp=$_REQUEST['cp'];
  

  $deta=mysql_query("INSERT INTO datos_empresa VALUES(NULL,'".$nomb_emp."','".$dir_emp."','".$num_ext."','".$num_int."',
    '".$col_emp."','".$pob_emp."','".$mpio_emp."','".$edo_emp."','".$cp_emp."')");
  
      if(isset($deta)){
?>

      <div id="alerta" class="alert alert-success">
  <alert> Datos enviados..! </alert>
  </div>

<?php
    }else{

      ?>

      <div id="alerta" class="alert alert-warning">
  <strong>Error!</strong> No se pudo enviar tu solicitud.
</div>

      <?php

    }

}

?>



<!DOCTYPE html>
<html lang="es">
<head>
  <title>Protectotank</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>
 img{
  width: 400px;
  height: 80px;
  float: right;
  margin-top: -60px;

}

  </style>
</head>

<body>


<div class="w3-container w3-teal">
  <h1>Datos de la empresa</h1>
   <img src="img/protectotank.png" > 
<!--onclick="document.getElementById('id01').style.display='block'"-->
</div>

<div class="container">
  <h2>Datos de la empresa</h2>
  <form class="form-horizontal" method="POST">
    <div class="form-group">
    <label class="control-label col-sm-2" >Nombre de la empresa:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="Empresa" id="nombre" name="nombre">
      </div>
      </div>

<div class="form-group">
    <label class="control-label col-sm-2" >Direccion:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" placeholder="Calle "  name="direccion">
      </div>
      </div>
      <div class="form-group">
    <label class="control-label col-sm-2" >Numero exterior:</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" placeholder="N° Exterior "  name="numEx">
      </div>
       <label class="control-label col-sm-2" >Numero interior:</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" placeholder="N° interior "  name="numInt">
      </div>
      </div>


        <div class="form-group">
      <label class="control-label col-sm-2" >Estado:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" placeholder="Estado"   name="edo">
      </div>
    </div>
        
       <div class="form-group">
      <label class="control-label col-sm-2" >Municipio:</label>
      <div class="col-sm-4">
        <input type="text" placeholder="Municipio" class="form-control"   name="mpio">
      </div>
    </div>
     <label class="control-label col-sm-2" >Poblacion:</label>
      <div class="col-sm-4">
        <input type="text" placeholder="Poblacion" class="form-control"   name="poblacion">
      </div>
  


        <div class="form-group">
      <label class="control-label col-sm-2" >Colonia:</label>
      <div class="col-sm-4">
        <input type="text" placeholder="Colonia" class="form-control"   name="col">
      </div>
      </div>
      
     <div class="form-group">
      <label class="control-label col-sm-2" >C.P:</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="tel" placeholder="C.P" name="cp">
      </div>
    </div>

     
    
    

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success" name="enviar">Guardar</button>
      </div>
    </div>
  </form>
</div>
</body>
</html>
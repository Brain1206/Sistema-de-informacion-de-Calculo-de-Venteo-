<?php

include('includes/coneccion.php');
session_start();


if(isset($_POST['enviar'])){

//Datos Insertados
  $producto=$_REQUEST['producto'];
  $CAS=$_REQUEST['cas'];
  $vapor=$_REQUEST['vapor'];
  $calor=$_REQUEST['calor'];
  $peso=$_REQUEST['peso'];
  $temperatura=$_REQUEST['temperatura'];
  

  $consulta=mysql_query("INSERT INTO producto (nom_producto, num_cas, presion_vapor, calor_latente, peso_molecular, temp_ebullicion) VALUES (NULL,'".$producto."','".$CAS."','".$vapor."','".$calor."',
    '".$peso."','".$temperatura."')");
  
      if(isset($consulta)){
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
<html>
<title>TANQUES</title>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<body>

<?php include('menu.html'); ?>
<div style="background: linear-gradient(to left, white, rgb(0,150,136), white); width: 100%; text-align: center; font-size: 25px; color: white;">
 Producto
</div>
<br>
<div style="width: 95%; margin-left: 2%; padding: 30px; background-color: rgba(19,134,62,.2); border-radius: 10px; font-size: 18px;">
    <form  class="w3-container" method="POST">
  
  
Nombre del producto<br>
  <input style="width: 350px" id="capv" type="text" name="producto"><br>
  N° CAS<br>
  <input style="width: 350px"  id="capv" type="text" name="cas"><br>
  Presion de vapor<br>
  <input style="width: 350px" id="diav" type="text" name="vapor"><br>
  Calor latente de vaporizacion<br>
  <input style="width: 350px" id="alv" type="text" name="calor"><br>
   
   
   Peso molecular de vapor<br>
  <input style="width: 350px" id="alv" type="text" name="peso"><br>

Temperaturatura de ebullicion<br>
  <input style="width: 350px" id="alv" type="text" name="temperatura"><br>

  <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success" name="enviar">Guardar</button>
      </div>
    </div>
  
</form>
</div>


</body>
</html>
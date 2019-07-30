<?php

include('includes/coneccion.php');
session_start();




if(isset($_REQUEST['enviar'])){

//Datos Insertados
 $flujomax=$_REQUEST['flujomax'];
  $flujomax_desc=$_REQUEST['desc'];
  $temperatura=$_REQUEST['tmp'];
  
  

  $consulta=mysql_query("INSERT INTO condiciones (flujomax_carg, flujomax_desc, tempmax_op) VALUES (NULL,'".$flujomax."','".$flujomax_desc."','".$temperatura."')");
  
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
<html lang="en">
<head>
  <title>Operacion</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  

</head>

<body>


  <div>
<?php include('menu.html'); ?> 
</div>
<div style="background: linear-gradient(to left, white, rgb(0,150,136), white); width: 100%; text-align: center; font-size: 25px; color: white;">
  Condiciones de Operación
</div>


<br>
<div style="width: 95%; margin-left: 2%; padding: 30px; background-color: rgba(19,134,62,.2); border-radius: 10px; font-size: 18px;">
  <form  method="POST" class="form-horizontal" >
  
     <h3>Flujo </h3>
  
   
    Flujo Maximo de carga:<br>
     
        <input style="width: 350px" type="text" id="presion_pos" " name="flujomax"><br>
      
    

    Flujo maximo de descarga:<br>
     
        <input style="width: 350px" type="text" id="Presion_max" " name="desc"><br>
    
         
      
    Temperatura maxima  de operación:<br>
     
        <input style="width: 350px" type="text" id="Presion_max" " name="tmp"><br><br>
          

     

        <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success" name="enviar">Guardar</button>
      </div>

</div>
  </form>
</div>

</body>
</html>
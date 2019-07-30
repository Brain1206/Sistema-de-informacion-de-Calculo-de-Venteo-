<?php
include('includes/coneccion.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Administrador</title>
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
<nav class="navbar navbar-default" style="background: linear-gradient(to right, rgb(17,134,61) , rgb(126,176,123), white); color: white !important; margin: 0px !important;">
  <div class="container-fluid">
    <div class="navbar-header">
     <img src="img/protectotank.png" style="width: 275px; height: 55px; float: left; padding-top: 3px; margin-top: 0px" >  
    </div>
   <center><h1 style="width: 50%; margin-top: 10px !important;">ADMINISTRADOR</h1></center>
  </div>
</nav>
</div>
<div style="background: linear-gradient(to left, white, rgb(0,150,136), white); width: 100%; text-align: center; font-size: 25px; color: white;">
  Datos del Cliente
</div>
<br>
<div style="margin-left: 15%;">
<table style="width: 100%; padding-right: 150px;">
  <tr>
    <td style="font-size: 25px;"><center>Cliente </center></td>
    <td></td>
  </tr>

  <tr>
    <?php 
$aa=mysql_query("SELECT * FROM datos_generales");
$ab=mysql_fetch_assoc($aa);
$ac=mysql_num_rows($aa);

if($ac!=0){
$i=1;
do{
?>
  <td style="background-color: rgba(19,134,62,.2); border: solid white 2px; font-size: 20px; padding-left: 50px;"><?php echo $ab['cte_nombre']; ?> <?php echo $ab['cte_apellido']; ?></td>
  <td style="font-size: 20px;"><?php echo "<a class='btn btn-info' href='admin.php?cte=".$ab['cte_correo']."'> Editar</a>"; ?></td>
  </tr>
<?php
  $i++;
}while ($ab=mysql_fetch_assoc($aa));
}
?>
  </tr>
</table>
</div>

</body>
</html>
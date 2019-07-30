<?php
include('includes/coneccion.php');
session_start();
if(!$_SESSION['user']){

  header("Location:index.php");
}
$a=mysql_query("SELECT * FROM datos_generales WHERE cte_correo='".$_SESSION['user']."'");
$b=mysql_fetch_assoc($a);

//Registrar tanque

//Vertical
if(isset($_REQUEST['cnv']) && !empty($_REQUEST['cnv'])){
  $tipo_tanque=1;
  $c_nominal_ver=$_REQUEST['cnv'];
  $formatoCN_ver=$_REQUEST['forCN_ver'];
  $diam_ver=$_REQUEST['dv'];
  $altura_ver=$_REQUEST['av'];
  $pres_pos=$_REQUEST['PPDis'];
  $formatoPPDis=$_REQUEST['forPPDis'];//
  $pres_max_pos=$_REQUEST['PMPos'];
  $formatoPMPos=$_REQUEST['forPMPos'];//
  $pres_neg=$_REQUEST['PNDis'];
  $formatoPNDis=$_REQUEST['forPNDis'];//
  $pres_max_neg=$_REQUEST['PMNeg'];
  $formatoPMNeg=$_REQUEST['forPMNeg'];//
  $sist=$_REQUEST['sistema'];
    $in_tanq="INSERT INTO tanques (tipo_tanque, capacidad_nominal, formato_CN, diametro, altura, pas_disenio, formato_PPDis, max_pos, formato_PMPos, neg_disenio, formato_PNDis, max_neg, formato_PMNeg, sistema,  id_usuario) VALUES ('".$tipo_tanque."','".$c_nominal_ver."','".$formatoCN_ver."','".$diam_ver."','".$altura_ver."','".$pres_pos."','".$formatoPPDis."','".$pres_max_pos."','".$formatoPMPos."','".$pres_neg."','".$formatoPNDis."','".$pres_max_neg."','".$formatoPMNeg."','".$sist."','".$_SESSION['user']."')";

    $queryT=@mysql_query($in_tanq) or die(mysql_error());
   
    if($queryT==1){
?>
      <div id="alerta" class="alert alert-success alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <strong>Tu registro a sido exitoso.</strong> 
      </div>
<?php
    }else{

      ?>
      <div id="alerta" class="alert alert-danger alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <strong>Error!</strong> No pudo registrarse, intentelo mas tarde
      </div>
<?php

    }
    if ($sist==!0) {
       ?>
      <div id="alerta" class="alert alert-warning alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <strong>NOTA:</strong> si cuenta con sistema de calefacción o enfriamiento, favor de contarnos para ayudarlo en calculo del equipo
      </div>
<?php
      
    }
}

//Horizontal
if(isset($_REQUEST['cnh']) && !empty($_REQUEST['cnh'])){
  $tipo_tanque=2;
  $c_nominal_hor=$_REQUEST['cnh'];
  $formatoCN_hor=$_REQUEST['forCN_hor'];
  $diam_hor=$_REQUEST['dh'];
  $long_hor=$_REQUEST['lh'];
  $pres_pos=$_REQUEST['PPDis'];
  $formatoPPDis=$_REQUEST['forPPDis'];// 
  $pres_max_pos=$_REQUEST['PMPos'];
  $formatoPMPos=$_REQUEST['forPMPos'];//
  $pres_neg=$_REQUEST['PNDis'];
  $formatoPNDis=$_REQUEST['forPNDis'];//
  $pres_max_neg=$_REQUEST['PMNeg'];
  $formatoPMNeg=$_REQUEST['forPMNeg'];//
  $sist=$_REQUEST['sistema'];
    $in_tanq="INSERT INTO tanques (tipo_tanque, capacidad_nominal, formato_CN, diametro, longitud, pas_disenio, formato_PPDis, max_pos, formato_PMPos, neg_disenio, formato_PNDis, max_neg, formato_PMNeg, sistema,  id_usuario) VALUES ('".$tipo_tanque."','".$c_nominal_hor."','".$formatoCN_hor."','".$diam_hor."','".$long_hor."','".$pres_pos."','".$formatoPPDis."','".$pres_max_pos."','".$formatoPMPos."','".$pres_neg."','".$formatoPNDis."','".$pres_max_neg."','".$formatoPMNeg."','".$sist."','".$_SESSION['user']."')";
    
    $queryT=@mysql_query($in_tanq) or die(mysql_error());
   
    if($queryT==1){
?>
      <div id="alerta" class="alert alert-success alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <strong>Bien!</strong> Tu registro a sido exitoso.
      </div>
<?php
    }else{

      ?>
      <div id="alerta" class="alert alert-danger alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <strong>Error!</strong> No pudo registrarse, intentelo mas tarde
      </div>
<?php

    }

    if ($sist==!0) {
       ?>
      <div id="alerta" class="alert alert-warning alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <strong>NOTA:</strong> si cuenta con sistema de calefacción o enfriamiento, favor de contarnos para ayudarlo en calculo del equipo
      </div>
<?php
      
    }
}

//Esfera
if(isset($_REQUEST['cne']) && !empty($_REQUEST['cne'])){
  $tipo_tanque=3;
  $c_nominal_es=$_REQUEST['cne'];
  $formatoCN_es=$_REQUEST['forCN_es'];
  $diam_es=$_REQUEST['de'];
  $pres_pos=$_REQUEST['PPDis'];
  $formatoPPDis=$_REQUEST['forPPDis'];//
  $pres_max_pos=$_REQUEST['PMPos'];
  $formatoPMPos=$_REQUEST['forPMPos'];//
  $pres_neg=$_REQUEST['PNDis'];
  $formatoPNDis=$_REQUEST['forPNDis'];//
  $pres_max_neg=$_REQUEST['PMNeg'];
  $formatoPMNeg=$_REQUEST['forPMNeg'];//
  $sist=$_REQUEST['sistema'];
    $in_tanq="INSERT INTO tanques (tipo_tanque, capacidad_nominal, formato_CN, diametro, pas_disenio, formato_PPDis, max_pos, formato_PMPos, neg_disenio, formato_PNDis, max_neg, formato_PMNeg, sistema, id_usuario) VALUES ('".$tipo_tanque."','".$c_nominal_es."','".$formatoCN_es."','".$diam_es."','".$pres_pos."','".$formatoPPDis."','".$pres_max_pos."','".$formatoPMPos."','".$pres_neg."','".$formatoPNDis."','".$pres_max_neg."','".$formatoPMNeg."','".$sist."','".$_SESSION['user']."')";

    $queryT=@mysql_query($in_tanq) or die(mysql_error());
   
    if($queryT==1){
?>
      <div id="alerta" class="alert alert-success alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <strong>Bien!</strong> Tu registro a sido exitoso.
      </div>
<?php
    }else{

      ?>
      <div id="alerta" class="alert alert-danger alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <strong>Error!</strong> No pudo registrarse, intentelo mas tarde
      </div>
<?php

    }

    if ($sist==!0) {
       ?>
      <div id="alerta" class="alert alert-warning alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <strong>NOTA:</strong> si cuenta con sistema de calefacción o enfriamiento, favor de contarnos para ayudarlo en calculo del equipo
      </div>
<?php
      
    }
}


?>



<!DOCTYPE html>
<html>
<html lang="es">
<title>TANQUES</title>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
<style type="text/css">
 * { padding:0px; margin:0px; }
img{
  width: 400px;
  height: 80px;
  float: right;
  margin-top: -60px;

}

 .opciones { display:none; }
 #alerta{margin:0px;
 }
   


</style>


<body>

<?php include('menu.html'); ?>
<div style="background: linear-gradient(to left, white, rgb(0,150,136), white); width: 100%; text-align: center; font-size: 25px; color: white; margin-bottom: 20px;">
  Tanques de Almacenamiento 
</div>
 

  <div style="width: 95%; margin-left: 2%; padding: 30px; background-color: rgba(19,134,62,.2); border-radius: 10px;">
  <div class="container">
    <div class="comboSelector">
    <select name="tipo" id="tipo" onchange="elegir_opcion(this);" style="font-size: 20px;">
      <option value="0">Elija un tipo</option>
      <option value="1">Vertical</option>
      <option value="2">Horizontal</option>
      <option value="3">Esfera</option>
    </select>
    </div>
    <div class="opcionesWrapper" style="padding-top: 30px; font-size: 18px;">
    </div>
  </div>
  
  
  <div class="opciones">
    <div id="1">
    <form autocomplete="off">

      Capacidad nominal: <br><input type="text" size="30" name="cnv"> 
      <select name="forCN_ver" style="font-size: 18px; color: red;">
      <option value="1">m<sup>3</sup> (metros cubicos)</option>
      <option value="2">Litros</option>
    </select><br>
      Diametro: <br><input type="text" size="30" name="dv">
      <input type="text" name="f" value="m (metros)" style="width: 100px; color: red;" disabled><br>
      Altura: <br><input type="text" size="30" name="av">
      <input type="text" name="f" value="m (metros)" style="width: 100px; color: red;" disabled><br><br>
      
      <h3>Presión</h3>
    Presión positiva del diseño del tanque: <br>
      <input style="width: 350px" type="text" id="presion_pos"  name="PPDis">
      <select name="forPPDis" style="font-size: 18px; color: red;">
      <option value="3">KPa (Kilopascal)</option>
      <option value="4">PSIA (Libra por pulgada cuadrada)</option>
    </select><br>     
   Presion maxima positiva admisible: <br>    
        <input style="width: 350px" type="text" id="Presion_max"  name="PMPos">
        <select name="forPMPos" style="font-size: 18px; color: red;">
      <option value="3">KPa (Kilopascal)</option>
      <option value="4">PSIA (Libra por pulgada cuadrada)</option>
    </select> <br>
              Presion negativa de diseño del tanque: <br> 
        <input style="width: 350px" type="text"  id="Presion_neg"  name="PNDis">
        <select name="forPNDis" style="font-size: 18px; color: red;">
      <option value="3">KPa (Kilopascal)</option>
      <option value="4">PSIA (Libra por pulgada cuadrada)</option>
    </select> <br>
    Presion maxima negativa admisible: <br>    
        <input style="width: 350px" type="text" id="Presion_max"  name="PMNeg">
        <select name="forPMNeg" style="font-size: 18px; color: red;">
      <option value="3">KPa (Kilopascal)</option>
      <option value="4">PSIA (Libra por pulgada cuadrada)</option>
    </select><br><br>

          <h3>El tanque cuenta con:</h3>
  
  <input class="w3-radio" type="radio" name="sistema" value="1">
  Sistema de calefaccion<br>
  
  <input class="w3-radio" type="radio" name="sistema" value="2" >
  Sistema de enfriamiento<br>

  <input class="w3-radio" type="radio" name="sistema" value="0">
  Ninguno<br><br><br>

         <input class="btn btn-primary" type="submit" name="ENVIAR" value="ENVIAR">
     </form>
      
    </div>


    <div id="2">
      <form autocomplete="off">
   
      Capacidad nominal: <br><input type="text" size="30" name="cnh">
      <select name="forCN_hor" style="font-size: 18px; color: red;">
      <option value="1">m<sup>3</sup> (metros cubicos)</option>
      <option value="2">Litros</option>
    </select><br>
      Diametro: <br><input type="text" size="30" name="dh">
      <input type="text" name="f" value="m (metros)" style="width: 100px; color: red;" disabled><br>
      Longitud: <br><input type="text" size="30" name="lh">
      <input type="text" name="f" value="m (metros)" style="width: 100px; color: red;" disabled><br><br>

        <h3>Presión</h3>
    Presión positiva del diseño del tanque: <br>
      <input style="width: 350px" type="text" id="presion_pos"  name="PPDis">
        <select name="forPPDis" style="font-size: 18px; color: red;">
      <option value="3">KPa (Kilopascal)</option>
      <option value="4">PSIA (Libra por pulgada cuadrada)</option>
    </select><br>     
   Presion maxima positiva admisible: <br>    
        <input style="width: 350px" type="text" id="Presion_max"  name="PMPos">
        <select name="forPMPos" style="font-size: 18px; color: red;">
      <option value="3">KPa (Kilopascal)</option>
      <option value="4">PSIA (Libra por pulgada cuadrada)</option>
    </select><br>
              Presion negativa de diseño del tanque: <br> 
        <input style="width: 350px" type="text"  id="Presion_neg"  name="PNDis">
         <select name="forPNDis" style="font-size: 18px; color: red;">
      <option value="3">KPa (Kilopascal)</option>
      <option value="4">PSIA (Libra por pulgada cuadrada)</option>
    </select><br>
    Presion maxima negativa admisible: <br>    
        <input style="width: 350px" type="text" id="Presion_max"  name="PMNeg">
        <select name="forPMNeg" style="font-size: 18px; color: red;">
      <option value="3">KPa (Kilopascal)</option>
      <option value="4">PSIA (Libra por pulgada cuadrada)</option>
    </select><br><br>

          <h3>El tanque cuenta con:</h3>
  
  <input class="w3-radio" type="radio" name="sistema" value="1">
  Sistema de calefaccion<br>
  
  <input class="w3-radio" type="radio" name="sistema" value="2" >
  Sistema de enfriamiento<br>

  <input class="w3-radio" type="radio" name="sistema" value="0">
  Ninguno<br><br><br>

         <input class="btn btn-primary" type="submit" name="ENVIAR" value="ENVIAR">
     </form>
      
    </div>
    <div id="3">
      <form autocomplete="off">
       
      Capacidad nominal: <br><input type="text" size="30" name="cne">
      <select name="forCN_es" style="font-size: 18px; color: red;">
      <option value="1">m<sup>3</sup> (metros cubicos)</option>
      <option value="2">Litros</option>
    </select><br>
      Diametro: <br><input type="text" size="30" name="de">
      <input type="text" name="f" value="m (metros)" style="width: 100px; color: red;" disabled><br><br>

        <h3>Presión</h3>
    Presión positiva del diseño del tanque: <br>
      <input style="width: 350px" type="text" id="presion_pos"  name="PPDis">
      <select name="forPPDis" style="font-size: 18px; color: red;">
      <option value="3">KPa (Kilopascal)</option>
      <option value="4">PSIA (Libra por pulgada cuadrada)</option>
    </select><br>     
   Presion maxima positiva admisible: <br>    
        <input style="width: 350px" type="text" id="Presion_max"  name="PMPos">
        <select name="forPMPos" style="font-size: 18px; color: red;">
      <option value="3">KPa (Kilopascal)</option>
      <option value="4">PSIA (Libra por pulgada cuadrada)</option>
    </select> <br>
              Presion negativa de diseño del tanque: <br> 
        <input style="width: 350px" type="text"  id="Presion_neg"  name="PNDis">
         <select name="forPNDis" style="font-size: 18px; color: red;">
      <option value="3">KPa (Kilopascal)</option>
      <option value="4">PSIA (Libra por pulgada cuadrada)</option>
    </select> <br>
    Presion maxima negativa admisible: <br>    
        <input style="width: 350px" type="text" id="Presion_max"  name="PMNeg">
        <select name="forPMNeg" style="font-size: 18px; color: red;">
      <option value="3">KPa (Kilopascal)</option>
      <option value="4">PSIA (Libra por pulgada cuadrada)</option>
    </select><br><br>

          <h3>El tanque cuenta con:</h3>
  
  <input class="w3-radio" type="radio" name="sistema" value="1">
  Sistema de calefaccion<br>
  
  <input class="w3-radio" type="radio" name="sistema" value="2" >
  Sistema de enfriamiento<br>

  <input class="w3-radio" type="radio" name="sistema" value="0">
  Ninguno<br><br><br>

         <input class="btn btn-primary" type="submit" name="ENVIAR" value="ENVIAR">
     </form>
      
    </div>
  </div>
  
  <script type="text/javascript">
    function elegir_opcion(combo) {
      $tipo = jQuery(combo).val();
      $campos = jQuery("#"+$tipo).html();
      jQuery(".opcionesWrapper").html($campos);
    }
  </script>
</div>
    
</body>
</html>
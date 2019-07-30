<?php

include('includes/coneccion.php');
session_start();

if ($_SESSION) {
  header("Location:tanques.php");
}

//Cerrar Sesion
if (isset($_REQUEST['cerrar'])&& !empty($_REQUEST['cerrar'])) {
  
  session_destroy();

  header("Location:index.php");
}

//inicio de sesion 
if(isset($_REQUEST['username']) && !empty($_REQUEST['username'])){
  $cte_user=$_REQUEST['username'];
  $cte_pass=md5($_REQUEST['passuser']);
  $buscar="SELECT * FROM datos_generales WHERE cte_correo='$cte_user' AND cte_password='$cte_pass'";

 $buscara=mysql_query($buscar);
 $fil=mysql_num_rows($buscara);
  if($fil==1){
    $_SESSION['user']=$cte_user;
    header("Location:tanques.php");
  }else{

?>
    <div class="alert alert-warning">
  <strong>Error!</strong> Usuario o contraseña incorrecta.
</div>

<?php
  }
}

//Registro
if(isset($_REQUEST['registro']) && !empty($_REQUEST['registro'])){
  $cte_nombre=$_REQUEST['nombre'];
  $cte_apeellido=$_REQUEST['apellido'];
  $cte_mail=$_REQUEST['mail'];
  $cte_telefono=$_REQUEST['telefono'];
  $cte_celular=$_REQUEST['celular'];
  $cte_empresa=$_REQUEST['empresa'];
  $cte_cargo=$_REQUEST['cargo'];
  $pass_cte=md5($_REQUEST['password']);
  $checar="SELECT * FROM datos_generales WHERE cte_correo='".$cte_mail."'";
  $c=@mysql_query($checar);
  $numfilas=mysql_num_rows($c);
  if($numfilas==1){
?>
    <div id="alerta" class="alert alert-warning">
  <strong>Error!</strong> el correo ya a sido registrado.
</div>
<?php  
  }else{
 
    $sql="INSERT INTO datos_generales VALUES('".$cte_mail."','".$pass_cte."','".$cte_nombre."','".$cte_apeellido."','".$cte_telefono."','".$cte_celular."','".$cte_empresa."','".$cte_cargo."')";
    $sqla=@mysql_query($sql);

    if($sqla==1){
?>

      <div id="alerta" class="alert alert-success">
  <strong>Bien!</strong> Tu registro a si do exitoso.
</div>

<?php
    }else{

      ?>

      <div id="alerta" class="alert alert-danger">
  <strong>Error!</strong> No pudo ser registrado. Por favor intente mas tarde
</div>

<?php

    }

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
  <link rel="styleshee
  t" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>
    .modal-content{
      background:#008080;
    }
   .modal-content .modal-header h4 {
      color:white;
      font-size: 25px;
      font-family: "Comic Sans MS", cursive, sans-serif;
      position: center;
    }
    .modal-content .modal-body p{
      color:white;
      font-size: 20px;
      font-family: "Comic Sans MS", cursive, sans-serif;
      position: center;

    }
    .w3-container{
 
    }
     #alerta{margin:0px;
 }


  </style>
</head>

<body style="background-color:rgb(218,218,218);">

<script type="text/javascript">
  $(document).ready(function(){
$('#myModal').modal('show')
  });

</script>


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
           <img src="img/protectotank.png" style="width: 60%">
          <h4 class="modal-title">Calculo de venteo normal y de emergencia para tanques de almacenamiento.</h4>

        </div>
        <div class="modal-body">
          <p >De acuerdo  API  2000 Standard Septima Edicion.</p>
         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>


<div class="w3-container" style=" background: linear-gradient(to left, rgb(17,134,61) , rgb(126,176,123), white);">
  <img src="img/protectotank.png" style="width: 300px; height: 60px; float: left; padding-top: 0px; margin-top: 0px" >  
  <h1 style="color: white; float: right; font-family: Tw Cen MT; font-size: 25px; padding-right: 50px;">REGISTRO / INICIO DE SESIÓN</h1>
    
</div>
   
<div class="container" style="background-color: rgba(19,134,62,.2); width: 500px; float: left; margin-left: 50px; border-radius: 10px; margin-top: 30px; margin-bottom: 30px;">
  <h3>Datos Generales</h3>
  <form class="form-horizontal"  method="POST" name="formulario" autocomplete="off">
    <div class="form-group">
    <label class="control-label col-sm-2" for="nom">Nombre:</label>
      <div class="col-sm-10">
        <input type="text" class="w3-input w3-border" name="nombre" placeholder="Ingrese Nombre">
      </div>
      </div>

<div class="form-group">
    <label class="control-label col-sm-2" for="apell">Apellido:</label>
      <div class="col-sm-10">
        <input type="text" class="w3-input w3-border" name="apellido" placeholder="Ingrese Apellido" >
      </div>
      </div>

        <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="w3-input w3-border" name="mail" placeholder="Enter email">
      </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="tel">Telefono:</label>
      <div class="col-sm-10">
        <input type="number" class="w3-input w3-border" name="telefono" placeholder="Telefono">
      </div>
    </div>

     <div class="form-group">
      <label class="control-label col-sm-2" for="cel" >Celular:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" name="celular" placeholder="Celular" >
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="emp" >Empresa: </label>
      <div class="col-sm-10">
        <input type="text" class="w3-input w3-border" name="empresa" placeholder="Empresa">
      </div>
    </div>

    <div class="form-group">
    <label class="control-label col-sm-2" for="carg">Cargo o puesto:</label>
      <div class="col-sm-10">
        <input type="text" class="w3-input w3-border" name="cargo" placeholder="Cargo/Puesto">
      </div>
      </div>


    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="w3-input w3-border" name="password" placeholder="Enter password" >
      </div>
    </div>

    <script>
function validar(obj){
  var d = document.formulario;
  if(obj.checked==true){
    d.registro.disabled = false;
  }else{
    d.registro.disabled= true;
  }
}
</script>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" value="1" name="remember" onclick="javascript:validar(this);">Acepto Terminos y Condiciones</label>
          <br>
        <a href="aviso.php"> <button type="button"  class="btn btn-link btn-lg">Leer aviso de privacidad</button></a>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit"  name="registro" value="Guardar" class="btn btn-success" disabled>
                       </div>
 </form>
    </div>
</div>




<div class="container" style="background-color: rgba(19,134,62,.2); width: 500px; float: right; margin-right: 150px; border-radius: 10px; margin-top: 30px;">
     <form class="w3-container" autocomplete="off">
        <div class="w3-section">
        <h3>Inicio de Sesión</h3>
          <label><b>E-mail</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="E-mail" name="username" >
          <label><b>Password</b></label>
          <input class="w3-input w3-border" type="password" placeholder="Password" name="passuser" >
          <br>
 <button class="w3-button w3-block w3-green w3-section w3-padding" name="iniciar" type="submit">Login</button>
          
        </div>
      </form>
</div>
<!--onclick="document.getElementById('id01').style.display='block'"-->

<br>
<div class="container" style="float: right; width: 700px; margin-top: 50px;">
  <h2>Medio por el cual desea que lo contactemos:</h2>
  <p></p>
  <form>
    <div class="checkbox">
      <label><input type="checkbox" value="email">E-Mail</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="tel">Telefono</label>
    </div>
    <div class="checkbox ">
      <label><input type="checkbox" value="movil" >Celular</label>
    </div>
       <div class="checkbox ">
 
     <a href="datos.php"> <label><input type="checkbox"   value="empresa"  >  <a href="datos.php">Visita a su empresa</label></a>
    </div>

     <div class="checkbox ">
      <label><input type="checkbox" value="ninguno" >Ninguno</label>
    </div>
  </form>
</div>


<!--Logueo-->

<div class="w3-container">

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
        <img src="img/user-login.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
       
      </div>

     

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancelar</button>
        
      </div>

    </div>
  </div>
</div>


</body>
</html>
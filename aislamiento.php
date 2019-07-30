<!DOCTYPE html>
<html>
<title>Aislamiento</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body>
<style>
.jumbotron{
  background: black;
  margin-bottom: 0;
  height: 100px;  
}
.jumbotron h2{
  color: white;

}
img{
  width: 400px;
  height: 80px; 
  float: right;
  margin-bottom: 0;
  margin-top: -100px;

}
  form{
    margin-left: 20px;
  }
</style>


<div class="jumbotron">
  <h2>Aislamiento</h2>      
 <img src="img/protectotank.png" > 
</div>

<div class="container">

  <div class="btn-group btn-group-justified">
   <a href="tanques.php" class="btn btn-warning">Atras</a>
    <a href="aislamiento.php" class="btn btn-success">Aislamiento termico</a>
    <a href="espesor.php" class="btn btn-success">Espesor de aislamiento</a>

  </div>
</div>


<form>
<input class="w3-radio" type="radio" name="gender" value="male"  checked>
  <label>22.7 W/m2K  <input type="text" name=""></label></p>
  <p>
  <input class="w3-radio" type="radio" name="gender" value="female">
  <label>11.4 W/m2K </label> <input type="text" name=""></p>
  <p>
  <input class="w3-radio" type="radio" name="gender" value="" >
  <label>5.7W/m2K </label> <input type="text" name=""></p>
  <p>
  <input class="w3-radio" type="radio" name="gender" value="" >
  <label>3.8 W/m2K </label> <input type="text" name=""></p>
  <p>
  <input class="w3-radio" type="radio" name="gender" value="" >
  <label>2.8 W/m2K </label> <input type="text" name=""></p>
  <p>
  <input class="w3-radio" type="radio" name="gender" value="" >
  <label>2.3 W/m2K </label> <input type="text" name=""></p>
  <p>
  <input class="w3-radio" type="radio" name="gender" value="" >
  <label>1.9 W/m2K </label> <input type="text" name=""></p>

  
  <input type="button" class="btn btn-info" value="Guardar">

</form>
</body>
</html> 
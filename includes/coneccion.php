<?php
$server="localhost";
$user="root";
$pass="";
$bd="tanques";
$conexion=@mysql_connect($server,$user,$pass);
$estabd=@mysql_select_db($bd);
?>
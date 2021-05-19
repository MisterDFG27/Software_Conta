<?php
include('conexion.php');
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuarios']=$usuario;


$conexion=mysqli_connect("localhost","root","","software");

$consulta="SELECT * FROM usuarios where nombreUsuario='$usuario' and Contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location: menu.php");

}else{
    ?>
    <?php
    include("index.php");

  ?>
  <h3 class="bad">El usuario o la contraseña estan incorrectos ingresar nuevamente</h3>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
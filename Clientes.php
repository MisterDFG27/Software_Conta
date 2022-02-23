<?php include("conexion.php");  ?>

<?php include('includes/header.php');  ?>
<!---------------------------------------------------------------- Principio COLLAPSE Formulario--------------------------------------------------->

<br>

<h2 align="center">Nuevos clientes</h2>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.btn {
  background-color: #2196F3;
  color: white;
  padding: 25px;
  font-size: 20px;
  border: none;
  outline: none;
  position: relative;
  width: 10%;
  height: 70px;
  left: 350px;
  bottom: 78px;
}

.dropdown {
  position: absolute;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: relative;
  background-color: #f1f1f1;
  min-width: 160px;
  z-index: 1;
  left: 350px;
  bottom: 78px;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd}

.dropdown:hover .dropdown-content {
  display: block;
}

.btn:hover, .dropdown:hover .btn {
  background-color: #0b7dda;
}
</style>
</head>
<body>
<br>
<h2>Elegir tipo de clientes:</h2>
<br>
<button class="btn">Cedula: </button>
<div class="dropdown">
  <button class="btn" style="border-left:1px solid #0d8bf2">
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content">
    <a href="Registro_Cliente_Ced_Fisica.php">Fisica</a>
    <a href="Registro_Cliente_Ced_Juridica.php">Juridica</a>
    <a href="Registro_Cliente_Dimex.php">DIMEX</a>
    <a href="Registro_Cliente_Nite.php">NITE</a>
  </div>
</div>

</body>
</html>


<br>

<?php include('includes/footer.php');  ?>
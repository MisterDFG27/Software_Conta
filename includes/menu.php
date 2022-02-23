<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.btn2 {
  background-color: #2196F3;
  color: white;
  padding: 25px;
  font-size: 20px;
  border: none;
  outline: none;
  position: relative;
  width: 60%;
  height: 70px;
  left: 300px;
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
  left: 300px;
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
 
.btn2:hover, .dropdown:hover .btn2 {
  background-color: #0b7dda;
}
</style>
</head>
<body>
<br>
 
<br>
<button class="btn2">Tipo de Cédula: </button>
<div class="dropdown">
  <button class="btn2" style="border-left:1px solid #0d8bf2">
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
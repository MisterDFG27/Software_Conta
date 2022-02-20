<?php include("conexion.php");  ?>

<?php include('includes/header.php');  ?>

<!---------------------------------------------------------------- INICIO      COLLAPSE --------------------------------------------------->
<br>
<h2 align="center">Nuevos clientes</h2>


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

.btn2:hover, .dropdown:hover .btn2 {
  background-color: #0b7dda;
}
</style>
</head>
<body>
<br>
<h2> Elegir tipo de clientes:</h2>
<br>
<button class="btn2">Cedula: </button>
<div class="dropdown">
  <button class="btn2" style="border-left:1px solid #0d8bf2">
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content">
    <a href="Registro_Cliente_Ced_Fisica.php">Fisica</a>
    <a href="Registro_Cliente_Ced_Juridica.php">Juridica</a>
    <a href="#">DIMEX</a>
    <a href="#">NITE</a>
  </div>
</div>

</body>
</html>



<main class="container p-4">
<h2>Datos clientes cedula Juridica</h2>
<br>

<div class="container register-form">
    <div class="form">
        <form action="Cliente_Juridic_DB.php" method="POST">

            <button type="button" class="collapsible">Información empresarial</button>
            <div class="content">
                <div class="form-content">
                    <div class="row">
                        <!-------------------------------- Registro Persona Fisica-------------------------- -->

                        <div class="col-md-6">

                            <!----------------------------------------------------->
                            <div class="form-group">
                                <input name="ced" type="text" class="form-control" placeholder="Cédula Juridica*" value="Cédula Jurídica" disabled  />
                            </div>
                            <!----------------------------------------------------->

                            

                            <div class="form-group">
                                <input name="nombre" type="text" class="form-control" placeholder="Nombre de Empresa*" value="" />
                            </div>


                            <div class="form-group">

                                <label for="start">Fecha de Creación:</label>

                                <input name="fecha" type="date" id="fecha" name="fecha" value="<?php echo date("Y-MM-D"); ?>" min="1400-01-01" max="300-12-31">
                            </div>

                        </div>

                        <!--------------------------------Culumna Derecha-------------------------- -->

                        <div class="col-md-6">




                            <!----------------------------------------------------->
                            <div class="form-group">
                                <select name="regimen" id="selectSm" class="form-control-sm form-control">
                                    <option value="0">Regímen Tributario</option>
                                    <option value="1">Tradicional</option>
                                    <option value="2">Simplificado</option>
                                    <option value="3">Especial Agropecuario</option>
                                    <option value="4">Rentas de capital inmobiliario</option>

                                </select>
                            </div>
                            <!----------------------------------------------------->
                            <!----------------------------------------------------->
                            <div class="form-group">
                                <select name="act" id="selectSm" class="form-control-sm form-control">
                                    <option value="0">Actividad Económica</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                            <!----------------------------------------------------->

                        </div>


                    </div>
                    <!----------------------------------------Fin row content ---->
                    <div class="row">
                        <!-------------------------------- Registro Persona Fisica-------------------------- -->

                        <div class="col-md-6">

                            <!----------------------------------------------------->

                        </div>
                    </div>
                </div>

            </div>


            <!--------------------------------INICIO INFORMACION DE CONTACTO EMPRESARIAL COLLAPSE-------------------------- -->

            <button type="button" class="collapsible">Información de contacto empresarial</button>
            <div class="content">

                <div class="form-content">

                    <div class="row">


                        <div class="col-md-6">



                            <div class="form-group">
                                <input type="number" name="tel" class="form-control" placeholder="Teléfono Principal*" value="" />
                            </div>
                            <div class="form-group">
                                <input type="number" name="ext1" class="form-control" placeholder="Ext 1*" value="" />
                            </div>
                            <div class="form-group">
                                <input type="number" name="ext2" class="form-control" placeholder="Ext 2*" value="" />
                            </div>


                            <div class="form-group">
                                <input type="number" name="telad" class="form-control" placeholder="Teléfono Opcional *" value="" />
                            </div>




                        </div>

                        <!--------------------------------Culumna Derecha-------------------------- -->

                        <div class="col-md-6">


                            <div class="form-group">
                                <input type="number" name="cel" class="form-control" placeholder="Celular Principal*" value="" />
                            </div>
                            <div class="form-group">
                                <input type="number" name="celop" class="form-control" placeholder="Celular Opcional*" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="correop" class="form-control" placeholder="Correo Personal *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="correofac" class="form-control" placeholder="Correo Facturacion Electrónica *" value="" />
                            </div>

                            <div class="form-group">
                                <p>Fecha de Contratacion: </p>
                                <input type="date" name="fechacontra" class="form-control" placeholder="Fecha de contratacion *" value="" />
                            </div>

                        </div>

                    </div>




                </div>



            </div>
            <button type="button" class="collapsible">Dirección fisica</button>
            <div class="content">

                <div class="form-content">

                    <div class="row">


                        <div class="col-md-6">



                            <div class="form-group">
                                <input name="provincia" type="text" class="form-control" placeholder="Provincia*" value="" />
                            </div>
                            <div class="form-group">
                                <input name="canton" type="text" class="form-control" placeholder="Cantón*" value="" />
                            </div>
                            <div class="form-group">
                                <input name="dist" type="text" class="form-control" placeholder="Distrito*" value="" />
                            </div>

                        </div>

                        <!--------------------------------Culumna Derecha-------------------------- -->

                        <div class="col-md-6">

                            <div class="form-group">
                                <input name="barrio" type="text" class="form-control" placeholder="Barrio*" value="" />
                            </div>


                            <div class="form-group">
                                <input name="otra" type="text" class="form-control" placeholder="Otras Señas *" value="" />
                            </div>

                        </div>

                    </div>


                    <link rel="stylesheet" href="estilo_agregacliente.css">


                </div>

            </div>
            <button type="button" class="collapsible">Correos y contraseñas</button>
            <div class="content">

                <div class="form-content">

                    <div class="row">


                        <div class="col-md-6">

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder=" Correo Principal" value="" disabled />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder=" Correo Facturacion" value="" disabled />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="TRAVI " value="" disabled />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder=" ATV" value="" disabled />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="CCSS VIRTUAL" value="" disabled />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="INS " value="" disabled />
                            </div>

                        </div>

                        <!--------------------------------Culumna Derecha-------------------------- -->

                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="clavecorre" class="form-control" placeholder=" Clave Correo Principal*" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="clavefac" class="form-control" placeholder=" Clave Correo Facturacion*" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="clavetravi" class="form-control" placeholder="Clave TRAVI *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="claveatv" class="form-control" placeholder="Clave ATV *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="claveccss" class="form-control" placeholder="Clave CCSS VIRTUAL*" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="claveins" class="form-control" placeholder="Clave INS *" value="" />
                            </div>

                        </div>

                    </div>



                </div>


            </div>


            <button type="button" class="collapsible">Clasificación Cliente y Ejecutivo Asignado</button>
                <div class="content">

                    <div class="form-content">

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Estado del cliente: " value="" disabled />
                                </div>
                            </div>




                            <div class="col-md-6">


                                <div class="form-group">
                                    <select name="tp" id="selectSm" class="form-control-sm form-control">
                                        <option value="Activo">Activo</option>
                                        <option value="Inactivo">Inactivo</option>
                                        <option value="Moroso">Moroso</option>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <select name="tp" ejecutivo_asignado="selectSm" class="form-control-sm form-control">
                                        <option value="Activo">Henry</option>
                                        <option value="Inactivo">Monica</option>
                                        <option value="Moroso">Ligia</option>
                                        <option value="Moroso">Yeymi</option>
                                        <option value="Moroso">Jackeline</option>
                                    </select>

                                </div>

                                <br>



                            </div>

                            <!--------------------------------Culumna Derecha-------------------------- -->

                            </div>
                            </div>

                        </div>

            <button type="submit" name="save" class="btn btn-success btn-block">GUARDAR</button>
        </form>
        <script>
            var coll = document.getElementsByClassName("collapsible");
            var i;

            for (i = 0; i < coll.length; i++) {
                coll[i].addEventListener("click", function() {
                    this.classList.toggle("active");
                    var content = this.nextElementSibling;
                    if (content.style.display === "block") {
                        content.style.display = "none";
                    } else {
                        content.style.display = "block";
                    }
                });
            }
        </script>
        <br>

    </div>
</div>

<br>
<br>
</main>
<?php include('includes/footer.php');  ?>
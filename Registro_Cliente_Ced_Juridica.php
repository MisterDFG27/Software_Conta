<?php include("conexion.php");  ?>

<?php include('includes/header.php');  ?>

<!---------------------------------------------------------------- INICIO      COLLAPSE --------------------------------------------------->
<br>
<br>
<?php include("includes/menu.php");  ?>


<main class="container p-4">

<br>

<div class="container register-form">
    <div class="form">
        <form action="Cliente_Juridic_DB.php" method="POST">

            <button type="button" class="collapsible">Información cédula juridica </button>
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
                            <div class="form-group">
                                <p>Fecha de Contratacion: </p>
                                <input type="date" name="fechacontra" class="form-control" placeholder="Fecha de contratacion *" value="" />
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
                                <p>Fecha de Inscripcion: </p>
                                <input type="date" name="fechacontra" class="form-control" placeholder="Fecha de Inscripcion *" value="" />
                            </div>

                        </div>

                    </div>




                </div>



            </div>
            <button type="button" class="collapsible">Dirección Domicilio Fiscal</button>
            <div class="content">

                <div class="form-content">

                    <div class="row">


                        <div class="col-md-6">



                           <div class="form-group">
                                    <select name="provincia" id="selectSm" class="form-control-sm form-control">
                                        <option value="0">Provincia</option>
                                        <option value="San José">San José</option>
                                        <option value="Alajuela">Alajuela</option>
                                        <option value="Heredia">Heredia</option>
                                        <option value="Cartago">Cartago</option>
                                        <option value="Guanacaste">Guanacaste</option>
                                        <option value="Puntarenas">Puntarenas</option>
                                        <option value="Limón">Limón</option>
                                    </select>
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
<?php include("conexion.php");  ?>

<?php include('includes/header.php');  ?>
        <!---------------------------------------------------------------- Principio COLLAPSE Formulario--------------------------------------------------->


        <main class="container p-4">
        <h2>Datos clientes cedula física</h2>

        <!---- <div class="">----->
        <div class="container register-form">
            <div class="form">
                <form action="Cliente_Fisic_DB.php" method="POST">
                    <button type="button" class="collapsible">Datos Personales</button>
                    <div class="content">



                        <div class="form-content">

                            <div class="row">
                                <!-------------------------------- Registro Persona Fisica-------------------------- -->

                                <div class="col-md-6">

                                    <!----------------------------------------------------->
                                    <div class="form-group">
                                        <select name="tipoid" id="selectSm" class="form-control-sm form-control">
                                            <option value="0">Tipo de identificacion</option>
                                            <option value="1">Fisíca Nacional</option>
                                            <option value="2">DIMEX</option>
                                            <option value="2">NITE</option>
                                        </select>
                                    </div>
                                    <!----------------------------------------------------->

                                    <div class="form-group">
                                        <input type="text" name="cedula" class="form-control" placeholder="Cédula de identidad*" value="" />
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="nombre" class="form-control" placeholder="Nombre *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="ape1" class="form-control" placeholder="Primer Apellido *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="ape2" class="form-control" placeholder="Segundo Apellido *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="edad" class="form-control" placeholder="Edad *" value="" />
                                    </div>

                                    <!----------------------------------------------------->
                                    <div class="form-group">
                                        <select name="genero" id="selectSm" class="form-control-sm form-control">
                                            <option value="0">Genero</option>
                                            <option value="1">HOMBRE</option>
                                            <option value="2">MUJER</option>
                                            <option value="3">INDEFINIDO</option>
                                        </select>
                                    </div>
                                    <!----------------------------------------------------->

                                    <!----------------------------------------------------->
                                    <div class="form-group">
                                        <select name="estado" id="selectSm" class="form-control-sm form-control">
                                            <option value="0">Estado Civíl</option>
                                            <option value="1">Soltero(a)</option>
                                            <option value="2">Casado(a)</option>
                                            <option value="3">Divorciado(a)</option>
                                            <option value="4">Unión Libre</option>
                                            <option value="5">Viudo(a)</option>
                                        </select>
                                    </div>
                                    <!----------------------------------------------------->





                                    <div class="form-group">

                                        <p>Fecha de Nacimiento *</p>
                                        <input type="date" name="fecha" class="form-control" placeholder="Fecha de Nacimiento *" value="" />

                                    </div>

                                </div>

                                <!--------------------------------Culumna Derecha-------------------------- -->


                                <div class="col-md-6">


                                    <div class="form-group">
                                        <input type="text" name="nacionalidad" class="form-control" placeholder="Nacionalidad *" value="" />
                                    </div>

                                    <!----------------------------------------------------->
                                    <div class="form-group">
                                        <select name="provinvia" id="selectSm" class="form-control-sm form-control">
                                            <option value="0">Provincia</option>
                                            <option value="1">San José</option>
                                            <option value="2">Alajuela</option>
                                            <option value="3">Heredia</option>
                                            <option value="4">Cartago</option>
                                            <option value="5">Guanacaste</option>
                                            <option value="6">Puntarenas</option>
                                            <option value="7">Limón</option>
                                        </select>
                                    </div>
                                    <!----------------------------------------------------->

                                    <div class="form-group">
                                        <input type="text" name="canton" class="form-control" placeholder="Cantón*" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="distrito" class="form-control" placeholder="Distrito*" />
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="barrio" class="form-control" placeholder="Barrio*" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="señas" class="form-control" placeholder="Otras Señas* " value="" />
                                    </div>
                                    <!----------------------------------------------------->
                                    <div class="form-group">
                                        <select name="hijos" id="selectSm" class="form-control-sm form-control">
                                            <option value="0">Cantidad de Hijos</option>
                                            <option value="1">1</option>
                                            <option value="2"> 2</option>
                                            <option value="3"> 3</option>
                                            <option value="5"> 4</option>
                                            <option value="6"> 5</option>
                                            <option value="7">6 </option>
                                            <option value="8">7 </option>
                                            <option value="9">8 </option>
                                            <option value="10">9 </option>
                                            <option value="11">10 </option>
                                            <option value="12">11 </option>
                                            <option value="13">12 </option>
                                            <option value="14">13 </option>
                                            <option value="15">14 </option>
                                            <option value="15">15 </option>


                                        </select>
                                    </div>
                                    <!----------------------------------------------------->

                                    <!----------------------------------------------------->
                                    <div class="form-group">
                                        <select name="regimen" id="selectSm" class="form-control-sm form-control">
                                            <option value="0">Regímen Tributario</option>
                                            <option value="1">Tradicional</option>
                                            <option value="2">Simplificado</option>
                                            <option value="3">Especial Agropecuario</option>
                                            <option value="4">Rentas de Capital Inmobiliario</option>
                                            <option value="5">Rentas de Capital Mobiliario</option>
                                            <option value="6">Ganancias de Capital</option>

                                        </select>
                                    </div>
                                    <!----------------------------------------------------->
                                    <!----------------------------------------------------->
                                    <div class="form-group">
                                        <select name="tipfac" id="selectSm" class="form-control-sm form-control">
                                            <option value="0">Tipo Facturación</option>
                                            <option value="1">Factura Eléctronica</option>
                                            <option value="2">Factura Pre-Impresos</option>
                                            <option value="3">No Factura</option>


                                        </select>
                                    </div>
                                    <!----------------------------------------------------->
                                    <!----------------------------------------------------->
                                    <div class="form-group">
                                        <select name="asalariado" id="selectSm" class="form-control-sm form-control">
                                            <option value="0">Asalariado ( 46 Bis )</option>
                                            <option value="1">Si</option>
                                            <option value="2">No</option>



                                        </select>
                                    </div>
                                    <!----------------------------------------------------->

                                    <div class="form-group">
                                        <input type="text" name="act1" class="form-control" placeholder="Actividad Económica 1* " value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="act2" class="form-control" placeholder="Actividad Económica 2* " value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Actividad Económica 3* " value="" />
                                    </div>
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

                    <button type="button" class="collapsible">Información de contacto</button>
                    <div class="content">

                        <div class="form-content">

                            <div class="row">


                                <div class="col-md-6">



                                    <div class="form-group">
                                        <input type="text" name="tel" class="form-control" placeholder="Teléfono Principal*" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="ext1" class="form-control" placeholder="Ext 1*" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="ext2" class="form-control" placeholder="Ext 2*" value="" />
                                    </div>


                                    <div class="form-group">
                                        <input type="text" name="telad" class="form-control" placeholder="Teléfono Opcional *" value="" />
                                    </div>




                                </div>

                                <!--------------------------------Culumna Derecha-------------------------- -->

                                <div class="col-md-6">


                                    <div class="form-group">
                                        <input type="text" name="cel" class="form-control" placeholder="Celular Principal*" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="celop" class="form-control" placeholder="Celular Opcional*" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="correop" class="form-control" placeholder="Correo Personal *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="correofac" class="form-control" placeholder="Correo Facturacion Electrónica *" value="" />
                                    </div>

                                    <div class="form-group">
                                        <p>Fecha de Contratacion *</p>
                                        <input type="date" name="fechacontra" class="form-control" placeholder="Fecha de contratacion *" value="" />
                                    </div>

                                </div>

                            </div>




                        </div>



                    </div>
                    <button type="button" class="collapsible">Domicilio Fiscal</button>
                    <div class="content">

                        <div class="form-content">

                            <div class="row">


                                <div class="col-md-6">



                                    <div class="form-group">
                                        <input type="text" name="provindf" class="form-control" placeholder="Provincia*" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="cantondf" class="form-control" placeholder="Cantón*" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="distrdf" class="form-control" placeholder="Distrito*" value="" />
                                    </div>

                                </div>

                                <!--------------------------------Culumna Derecha-------------------------- -->

                                <div class="col-md-6">

                                    <div class="form-group">
                                        <input type="text" name="barriodf" class="form-control" placeholder="Barrio*" value="" />
                                    </div>


                                    <div class="form-group">
                                        <input type="text" name="señasdf" class="form-control" placeholder="Otras Señas *" value="" />
                                    </div>

                                </div>

                            </div>




                        </div>

                    </div>
                    <button type="button" class="collapsible">Correos y Contraseñas</button>
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


                    <button type="button" class="collapsible">Clasificación de tipo cliente</button>
                    <div class="content">

                        <div class="form-content">

                            <div class="row">


                                <div class="col-md-6">


                                    <div class="form-group">
                                        <input type="text" name="provinctc" class="form-control" placeholder="Provincia*" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="cantonctc" class="form-control" placeholder="Cantón*" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="distritoctc" class="form-control" placeholder="Distrito*" value="" />
                                    </div>


                                </div>

                                <!--------------------------------Culumna Derecha-------------------------- -->

                                <div class="col-md-6">

                                    <div class="form-group">
                                        <input type="text" name="barrioctc" class="form-control" placeholder="Barrio*" value="" />
                                    </div>


                                    <div class="form-group">
                                        <input type="text" name="señasctc" class="form-control" placeholder="Otras Señas *" value="" />
                                    </div>

                                </div>

                            </div>



                        </div>


                    </div>

                    <button type="submit" name="save" class="btn btn-success btn-block">Guardar</button>
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

        </main>

        <?php include('includes/footer.php');  ?>
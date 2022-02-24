<?php include("conexion.php");  ?>

<?php include('includes/header.php');  ?>

<!---------------------------------------------------------------- eleccion tipos clientes--------------------------------------------------->
<br>
<br>

<?php include("includes/menu.php");  ?>
<!---------------------------------------------------------------- Principio COLLAPSE Formulario--------------------------------------------------->


<main class="container p-4">

<br>
    <!---- <div class="">----->
    <div class="container register-form">
        <div class="form">
            <form action="Cliente_Fisic_DB.php" method="POST">


                

                <button type="button" class="collapsible">Información cédula Física </button>

                <div class="content">

                    <div class="form-content">

                        <div class="row">
                            <!-------------------------------- Registro Persona Fisica-------------------------- -->

                            <div class="col-md-6">

                                <!----------------------------------------------------->
                                <div class="form-group">
                                <input name="ced" type="text" class="form-control"  value="Cédula Fisica" disabled  />
                                </div>
                                <!----------------------------------------------------->

                                <div class="form-group">
                                    <input type="text" name="cedula" class="form-control" placeholder="Cédula de identidad *" value="" />
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
                                    <input type="number" name="edad" class="form-control" placeholder="Edad *" value="" />
                                </div>

                                <!----------------------------------------------------->
                                <div class="form-group">
                                    <select name="genero" id="selectSm" class="form-control-sm form-control">
                                        <option value="0">Genero</option>
                                        <option value="Hombre">HOMBRE</option>
                                        <option value="Mujer">MUJER</option>
                                        <option value="Indefinido">INDEFINIDO</option>
                                    </select>
                                </div>
                                <!----------------------------------------------------->

                                <!----------------------------------------------------->
                                <div class="form-group">
                                    <select name="estado" id="selectSm" class="form-control-sm form-control">
                                        <option value="0">Estado Civíl</option>
                                        <option value="Soltero(a)">Soltero(a)</option>
                                        <option value="Casado(a)">Casado(a)</option>
                                        <option value="Divorciado(a)">Divorciado(a)</option>
                                        <option value="Unión Libre">Unión Libre</option>
                                        <option value="Viudo(a)">Viudo(a)</option>
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
                                <input name="nacionalidad" type="text" class="form-control"  value="Costarricense" disabled  />
                                </div>

                                <!----------------------------------------------------->
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
                                        <option value="0">0 </option>
                                         <option value="1">1 </option>
                                        <option value="2">2 </option>
                                        <option value="3">3 </option>
                                        <option value="4">4 </option>
                                        <option value="5">5 </option>
                                        <option value="6">6 </option>
                                        <option value="7">7 </option>
                                        <option value="8">8 </option>
                                        <option value="9">9 </option>
                                        <option value="10">10 </option>
                                        <option value="11">11 </option>
                                        <option value="12">12 </option>
                                        <option value="13">13 </option>
                                        <option value="14">14 </option>
                                        <option value="15">15 </option>


                                    </select>
                                </div>
                                <!----------------------------------------------------->

                                <!----------------------------------------------------->
                                <div class="form-group">
                                    <select name="regimen" id="selectSm" class="form-control-sm form-control">
                                        <option value="0">Regímen Tributario</option>
                                        <option value="Tradicional">Tradicional</option>
                                        <option value="Simplificado">Simplificado</option>
                                        <option value="Especial Agropecuario">Especial Agropecuario</option>
                                        <option value="Rentas de Capital Inmobiliario">Rentas de Capital Inmobiliario</option>
                                        <option value="Rentas de Capital Mobiliario">Rentas de Capital Mobiliario</option>
                                        <option value="Ganancias de Capital">Ganancias de Capital</option>

                                    </select>
                                </div>
                                <!----------------------------------------------------->
                                <!----------------------------------------------------->
                                <div class="form-group">
                                    <select name="tipfac" id="selectSm" class="form-control-sm form-control">
                                        <option value="0">Tipo Facturación</option>
                                        <option value="Factura Eléctronica">Factura Eléctronica</option>
                                        <option value="Factura Pre-Impresos">Factura Pre-Impresos</option>
                                        <option value="No Factura">No Factura</option>


                                    </select>
                                </div>
                                <!----------------------------------------------------->
                                <!----------------------------------------------------->
                                <div class="form-group">
                                    <select name="asalariado" id="selectSm" class="form-control-sm form-control">
                                        <option value="0">Asalariado ( 46 Bis )</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>



                                    </select>
                                </div>
                                <!----------------------------------------------------->

                                <div class="form-group">
                                    <input type="text" name="act1" class="form-control" placeholder="Actividad Económica 1 * " value="" />
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
                                    <input type="number" name="tel" class="form-control" placeholder="Teléfono Principal *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="number" name="ext1" class="form-control" placeholder="Ext 1 " value="" />
                                </div>
                                <div class="form-group">
                                    <input type="number" name="telad" class="form-control" placeholder="Teléfono Opcional *" value="" />
                                </div>




                            </div>

                            <!--------------------------------Culumna Derecha-------------------------- -->

                            <div class="col-md-6">


                                <div class="form-group">
                                    <input type="number" name="cel" class="form-control" placeholder="Celular Principal *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="number" name="celop" class="form-control" placeholder="Celular Opcional *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="correop" class="form-control" placeholder="Correo Personal *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="correofac" class="form-control" placeholder="Correo Facturacion Electrónico *" value="" />
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
                                    <input type="text" name="provindf" class="form-control" placeholder="Provincia *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="cantondf" class="form-control" placeholder="Cantón *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="distrdf" class="form-control" placeholder="Distrito *" value="" />
                                </div>

                            </div>

                            <!--------------------------------Culumna Derecha-------------------------- -->

                            <div class="col-md-6">

                                <div class="form-group">
                                    <input type="text" name="barriodf" class="form-control" placeholder="Barrio *" value="" />
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
                                    <input type="text" class="form-control" placeholder=" Correo Principal:" value="" disabled />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder=" Correo Facturacion:" value="" disabled />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="TRAVI: " value="" disabled />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder=" ATV: " value="" disabled />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="CCSS VIRTUAL: " value="" disabled />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="INS: " value="" disabled />
                                </div>

                            </div>

                            <!--------------------------------Culumna Derecha-------------------------- -->

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="clavecorre" class="form-control" placeholder=" Clave Correo Principal *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="clavefac" class="form-control" placeholder=" Clave Correo Facturacion *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="clavetravi" class="form-control" placeholder="Clave TRAVI *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="claveatv" class="form-control" placeholder="Clave ATV *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="claveccss" class="form-control" placeholder="Clave CCSS VIRTUAL *" value="" />
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
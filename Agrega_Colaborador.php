<?php include("conexion.php");  ?>

<?php include('includes/header.php');  ?>



        <!---------------------------------------------------------------- Principio Formulario--------------------------------------------------->
        <div class="container register-form">
            <div class="form">
                <div class="note">
                    <h1>DATOS PERSONALES <h1>
                </div>

                <div class="form-content">

                    <div class="row">
                        <!-------------------------------- Registro Persona Fisica-------------------------- -->

                        <div class="col-md-6">

                            <!----------------------------------------------------->
                            <div class="form-group">
                                <select name="selectSm" id="selectSm" class="form-control-sm form-control">
                                    <option value="0">Tipo de identificacion</option>
                                    <option value="1">NACIONAL</option>
                                    <option value="2">RESIDENTE</option>
                                    <option value="3">PERMISO DE TRABAJO</option>
                                    <option value="4">PASAPORTE</option>
                                </select>
                            </div>
                            <!----------------------------------------------------->

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Cédula de identidad*" value="" />
                            </div>


                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nombre *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Primer Apellido *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Segundo Apellido *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Edad *" value="" />
                            </div>

                            <!----------------------------------------------------->
                            <div class="form-group">
                                <select name="selectSm" id="selectSm" class="form-control-sm form-control">
                                    <option value="0">Genero</option>
                                    <option value="1">HOMBRE</option>
                                    <option value="2">MUJER</option>
                                    <option value="2">INDEFINIDO</option>
                                </select>
                            </div>
                            <!----------------------------------------------------->

                            <div class="form-group">
                            <input type="text" class="form-control" placeholder="Edad *" value="" />
                            </div>

                            <div class="form-group">
                                        <label for="start">Fecha de Nacimiento:</label>

                                        <input type="date" id="fecha" name="fecha" value="<?php echo date("Y-MM-D"); ?>" min="1400-01-01" max="300-12-31">
                                    </div>
                              


                        </div>

                        <!--------------------------------Culumna Derecha-------------------------- -->

                        <div class="col-md-6">

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nacionalidad *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Provincia *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Cantón*" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Distrito*" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Direccion*" />
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Barrio*" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Otras Señas " value="" />
                            </div>
                        </div>

                    </div>



                    <link rel="stylesheet" href="estilo_agregacliente.css">
                </div>

                <!-------------------------------------------------------------------Segundo -------------------------------------->
                <div class="container register-form">
                    <div class="form">
                        <div class="note">
                            <h3>INFORMACION ADICIONAL <h3>
                        </div>
                        <div class="form-content">

                            <div class="row">


                                <div class="col-md-6">

                                    <!----------------------------------------------------->
                                    <div class="form-group">
                                        <select name="selectSm" id="selectSm" class="form-control-sm form-control">
                                            <option value="0">Puestoss</option>
                                            <option value="1">Recaudador</option>
                                            <option value="2">Auxiliar Contable 1</option>
                                            <option value="3">Auxiliar Contable 2</option>
                                            <option value="4">Auxiliar Juntas Eduacación</option>
                                            <option value="5">Contador</option>
                                            
                                        </select>
                                    </div>
                                    <!----------------------------------------------------->

                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Teléfono Habitación*" value="" />
                                    </div>


                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Correo Personal *" value="" />
                                    </div>
                                    <div class="form-group">
                                <input type="text" class="form-control" placeholder="Correo Empresarial*" value="" />
                            </div>




                                </div>

                                <!--------------------------------Culumna Derecha-------------------------- -->

                                <div class="col-md-6">


                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Celular Principal*" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Correo Personal *" value="" />
                                    </div>

                                    <div class="form-group">
                                        <label for="start">Fecha Contratación:</label>

                                        <input type="date" id="fecha" name="fecha" value="<?php echo date("Y-MM-D"); ?>" min="1400-01-01" max="300-12-31">
                                    </div>

                                </div>

                            </div>


                            <button type="button" class="btnSubmit">Guardar</button>
                            <link rel="stylesheet" href="estilo_agregacliente.css">
                        </div>

                        <!-------------------------------------------------------------------sEGUNDO Final -------------------------------------->

                    </div>
                    <!-- /#header -->
                    <!-- Content -->
                    <br>
                    <br>
                    <br>
                    <br>

                    <?php include('includes/footer.php');  ?>
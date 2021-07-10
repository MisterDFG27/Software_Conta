<?php include("conexion.php");  ?>

<?php include('includes/header.php');  ?>

<!---------------------------------------------------------------- INICIO      COLLAPSE --------------------------------------------------->
<br>
<h2 align="center">Administrar clientes</h2>
<br>
<br>



<div class="container caja">
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table id="tablaUsuarios" class="table table-striped table-bordered table-condensed" style="width:100%">
                    <thead class="text-center">

                        <tr>
                            <td>Tipo de Identificacion</td>
                            <td>Cedula</td>
                            <td>Nombre</td>
                            <td>Primer apellido</td>
                            <td>Segundo apellido</td>
                            <td>Edad</td>
                            <td>Genero</td>
                            <td>Estado civil</td>
                            <td>Fecha de nacimiento</td>
                            <td>Nacionalidad</td>
                            <td>Provincia</td>
                            <td>Canton</td>
                            <td>Distrito</td>
                            <td>Barrio</td>
                            <td>Otras señas</td>
                            <td>Cantidad hijos</td>
                            <td>Regimen tributario</td>
                            <td>Tipo facturación</td>
                            <td>Asalariado</td>
                            <td>Actividad Economica</td>
                            <td>Telefono principal</td>
                            <td>Ext</td>
                            <td>Telefono opcional</td>
                            <td>Celular principal</td>
                            <td>Celular opcional</td>
                            <td>Correo personal</td>
                            <td>Correo factura elec.</td>
                            <td>Fecha de contratacion</td>
                            <td>Provincia domicilio fiscal</td>
                            <td>Canton domicilio fiscal</td>
                            <td>Distrito domicilio fiscal</td>
                            <td>Barrio domicilio fiscal</td>
                            <td>Otras señas domicilio fiscal</td>
                            <td>Clave correo electronico personal</td>
                            <td>Clave correo facturacion</td>
                            <td>Clave TRAVI</td>
                            <td>Clave ATV</td>
                            <td>Clave CCSS virtual</td>
                            <td>Clave INS</td>
                            <td>Estado del cliente</td>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!--Modal para CRUD-->
<div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formUsuarios">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="col-form-label">Tipo_Identificacion</label>
                                <input type="text" class="form-control" id="Tipo_Identificacion">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="col-form-label">Cedula</label>
                                <input type="text" class="form-control" id="Cedula">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="col-form-label">Nombre</label>
                                <input type="text" class="form-control" id="Nombre">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="col-form-label">Primer_Apellido</label>
                                <input type="text" class="form-control" id="Primer_Apellido">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="form-group">
                                <label for="" class="col-form-label">Segundo_Apellido</label>
                                <input type="text" class="form-control" id="Segundo_Apellido">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="" class="col-form-label">Edad</label>
                                <input type="number" class="form-control" id="Edad">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="col-form-label">Genero</label>
                                <input type="text" class="form-control" id="Genero">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="col-form-label">Estado_Civil</label>
                                <input type="text" class="form-control" id="Estado_Civil">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="col-form-label">Fecha_Nacimiento</label>
                                <input type="text" class="form-control" id="Fecha_Nacimiento">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="col-form-label">Nacionalidad</label>
                                <input type="text" class="form-control" id="Nacionalidad">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="form-group">
                                <label for="" class="col-form-label">Provincia</label>
                                <input type="text" class="form-control" id="Provincia">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="" class="col-form-label">Canton</label>
                                <input type="number" class="form-control" id="Canton">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="col-form-label">Distrito</label>
                                <input type="text" class="form-control" id="Distrito">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="col-form-label">Barrio</label>
                                <input type="text" class="form-control" id="Barrio">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="col-form-label">OtrasSeñas</label>
                                <input type="text" class="form-control" id="OtrasSeñas">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="col-form-label">Cantidad_Hijos</label>
                                <input type="text" class="form-control" id="Cantidad_Hijos">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="form-group">
                                <label for="" class="col-form-label">Regimen_Tributario</label>
                                <input type="text" class="form-control" id="Regimen_Tributario">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="" class="col-form-label">Tipo_Facturacion</label>
                                <input type="number" class="form-control" id="Tipo_Facturacion">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="col-form-label">Asalariado</label>
                                <input type="text" class="form-control" id="Asalariado">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="col-form-label">Actividad_Economica</label>
                                <input type="text" class="form-control" id="Actividad_Economica">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="col-form-label">Telefono_Principal</label>
                                <input type="text" class="form-control" id="Telefono_Principal">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="col-form-label">Ext1</label>
                                <input type="text" class="form-control" id="Ext1">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="form-group">
                                <label for="" class="col-form-label">Telefono_Opcional</label>
                                <input type="text" class="form-control" id="Telefono_Opcional">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="" class="col-form-label">Celular_Principal</label>
                                <input type="number" class="form-control" id="Celular_Principal">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="col-form-label">Celular_Opcional</label>
                                <input type="text" class="form-control" id="Celular_Opcional">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="col-form-label">Correo_Personal</label>
                                <input type="text" class="form-control" id="Correo_Personal">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="col-form-label">Correo_Factura_Elect</label>
                                <input type="text" class="form-control" id="Correo_Factura_Elect">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="col-form-label">Fecha_Contratacion</label>
                                <input type="text" class="form-control" id="Fecha_Contratacion">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="form-group">
                                <label for="" class="col-form-label">P_DF</label>
                                <input type="text" class="form-control" id="P_DF">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="" class="col-form-label">C_DF</label>
                                <input type="number" class="form-control" id="C_DF">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="col-form-label">D_DF</label>
                                <input type="text" class="form-control" id="D_DF">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="col-form-label">B_DF</label>
                                <input type="text" class="form-control" id="B_DF">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="col-form-label">OtrSeña_DF</label>
                                <input type="text" class="form-control" id="OtrSeña_DF">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="col-form-label">C_CorreoP</label>
                                <input type="text" class="form-control" id="C_CorreoP">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="form-group">
                                <label for="" class="col-form-label">C_MailFac</label>
                                <input type="text" class="form-control" id="C_MailFac">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="" class="col-form-label">Clave_Travi</label>
                                <input type="number" class="form-control" id="Clave_Travi">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="col-form-label">Clave_ATV</label>
                                <input type="text" class="form-control" id="Clave_ATV">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="col-form-label">Clave_CCSS</label>
                                <input type="text" class="form-control" id="Clave_CCSS">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="col-form-label">Clave_INS</label>
                                <input type="text" class="form-control" id="Clave_INS">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="col-form-label">Est_cli</label>
                                <input type="text" class="form-control" id="Est_cli">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                    <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>




<br>
<br>
<br>

<br>
<br>
<br>

<script src="assets/jquery/jquery-3.3.1.min.js"></script>
<script src="assets/popper/popper.min.js"></script>

<!-- datatables JS -->
<script type="text/javascript" src="assets/datatables/datatables.min.js"></script>

<script type="text/javascript" src="main.js"></script>

<?php include('includes/footer.php');  ?>

<!-- jQuery, Popper.js, Bootstrap JS -->
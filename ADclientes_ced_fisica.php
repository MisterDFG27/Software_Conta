<?php include("conexion.php");  ?>

<?php include('includes/header.php');  ?>

<!---------------------------------------------------------------- INICIO      COLLAPSE --------------------------------------------------->
<br>
<h2 align="center">Administrar clientes</h2>
<br>
<br>
<?php
$query = "SELECT * FROM persona_fisica ORDER BY id DESC ";
$result = mysqli_query($conn, $query);
if (!$result) {
     die("Query Failed.");
}
?>

<div class="container">
     <div class="table">
          <table id="employee_data" class="table-striped table">
               <thead>
                    
                        <tr>
                            <td>id</td>
                            <td>Tipo_Identificacion</td>
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
                            <td></td>
                            <td></td>
                        </tr>

                        </thead>
               <tbody>
               <?php
               while ($row = mysqli_fetch_array($result)) {
                    ?> 
                               <tr>  
                                    <th><?php echo $row["id"]?></th>  
                                    <th><?php echo $row["Tipo_Identificacion"] ?></th>  
                                    <th><?php echo $row["Cedula"] ?></th>  
                                    <th><?php echo $row["Nombre"] ?></th>  
                                    <th><?php echo $row["Primer_Apellido"] ?></th>  
                                    <th><?php echo $row["Segundo_Apellido"] ?></th>  
                                    <th><?php echo $row["Edad"] ?></th>  
                                    <th><?php echo $row["Genero"] ?></th>  
                                    <th><?php echo $row["Estado_Civil"] ?></th>  
                                    <th><?php echo $row["Fecha_Nacimiento"] ?></th>  
                                    <th><?php echo $row["Nacionalidad"] ?></th>  
                                    <th><?php echo $row["Provincia"]?></th>  
                                    <th><?php echo $row["Canton"] ?></th>  
                                    <th><?php echo $row["Distrito"] ?></th>  
                                    <th><?php echo $row["Barrio"] ?></th>  
                                    <th><?php echo $row["OtrasSeñas"] ?></th>  
                                    <th><?php echo $row["Cantidad_Hijos"] ?></th>  
                                    <th><?php echo $row["Regimen_Tributario"]?></th>  
                                    <th><?php echo $row["Tipo_Facturacion"] ?></th>  
                                    <th><?php echo $row["Asalariado"] ?></th>  
                                    <th><?php echo $row["Actividad_Economica"] ?></th>  
                                    <th><?php echo $row["Telefono_Principal"] ?></th>  
                                    <th><?php echo $row["Ext1"] ?></th>  
                                    <th><?php echo $row["Telefono_Opcional"] ?></th>  
                                    <th><?php echo $row["Celular_Principal"] ?></th>  
                                    <th><?php echo $row["Celular_Opcional"] ?></th>  
                                    <th><?php echo $row["Correo_Personal"] ?></th>  
                                    <th><?php echo $row["Correo_Factura_Elect"] ?></th>  
                                    <th><?php echo $row["Fecha_Contratacion"] ?></th>  
                                    <th><?php echo $row["P_DF"] ?></th>  
                                    <th><?php echo $row["C_DF"] ?></th>  
                                    <th><?php echo $row["D_DF"] ?></th>  
                                    <th><?php echo $row["B_DF"] ?></th>  
                                    <th><?php echo $row["OtrSeña_DF"] ?></th>  
                                    <th><?php echo $row["C_CorreoP"] ?></th>  
                                    <th><?php echo $row["C_MailFac"] ?></th>  
                                    <th><?php echo $row["Clave_Travi"] ?></th>  
                                    <th><?php echo $row["Clave_ATV"] ?></th>  
                                    <th><?php echo $row["Clave_CCSS"] ?></th>  
                                    <th><?php echo $row["Clave_INS"] ?></th>  
                                    <th><?php echo $row["Est_cli"] ?></th>  
                                    <th><a href="UPclientes_ced_fisica.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                    <th><a href="DELclientes_ced_fisica.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>
                                    
                               </tr> 
                               <?php  
                               
               }
               ?>
               </tbody>
          </table>
     </div>
</div>
</body>

<script>
     $(document).ready(function() {
          $('#employee_data').DataTable();
     });
</script>





<br>
<br>
<br>

<br>
<br>
<br>

<br>
<br>
<br>


<br>
<br>
<br>

<br>
<br>
<br>

<?php include('includes/footer.php');  ?>
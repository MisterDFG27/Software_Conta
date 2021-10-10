<?php include("conexion.php");  ?>

<?php include('includes/header.php');  ?>

<!---------------------------------------------------------------- INICIO      COLLAPSE --------------------------------------------------->
<br>
<h2 align="center">Todos Los Clientes</h2>

<?php
$query = "SELECT Tipo_Identificacion,Cedula, Nombre, Primer_Apellido, Segundo_Apellido,Correo_Personal,Telefono_Principal,Telefono_Opcional,Celular_Principal,  Est_cli FROM persona_fisica ORDER BY id DESC ";
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
                    <td>Tipo de Cédula</td>
                    <td>Cedula</td>
                    <td>Nombre</td>
                    <td>Primer apellido</td>
                    <td>Segundo_Apellido</td>
                    <td>E-mail</td>
                    <td>Teléfono Principal</td>
                    <td>Teléfono Opcional</td>
                    <td>Celular</td>
                    <td>Situacion</td>

                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <th><?php echo $row["Tipo_Identificacion"] ?></th>
                        <th><?php echo $row["Cedula"] ?></th>
                        <th><?php echo $row["Nombre"] ?></th>
                        <th><?php echo $row["Primer_Apellido"] ?></th>
                        <th><?php echo $row["Segundo_Apellido"] ?></th>
                        <th><?php echo $row["Correo_Personal"] ?></th>
                        <th><?php echo $row["Telefono_Principal"] ?></th>
                        <th><?php echo $row["Telefono_Opcional"] ?></th>
                        <th><?php echo $row["Celular_Principal"] ?></th>
                        <th><?php echo $row["Est_cli"] ?></th>


                    </tr>
                <?php

                }
                ?>
            </tbody>
        </table>
    </div>
</div>


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

<?php include('includes/footer.php');  ?>
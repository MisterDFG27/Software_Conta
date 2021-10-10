<?php include("conexion.php");  ?>

<?php include('includes/header.php');  ?>

<!---------------------------------------------------------------- INICIO      COLLAPSE --------------------------------------------------->

<body>

    <br>
    <h2 align="center">Correos y Contraseñas</h2>

    <?php
    $query = "SELECT Tipo_Identificacion,Cedula, Nombre, Primer_Apellido, Correo_Personal,
 C_CorreoP,Correo_Factura_Elect, C_MailFac, Clave_ATV, Clave_CCSS, Clave_INS, Clave_Travi FROM persona_fisica ORDER BY id DESC ";
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
                        <td>Correo Principal</td>
                        <td>Contraseña</td>
                        <td>Correo Facturacion</td>
                        <td>Contraseña</td>
                        <td>ATV</td>
                        <td>CCSS Virtual</td>
                        <td>INS</td>
                        <td>TRAVI</td>
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
                            <th><?php echo $row["Correo_Personal"] ?></th>
                            <th><?php echo $row["C_CorreoP"] ?></th>
                            <th><?php echo $row["Correo_Factura_Elect"] ?></th>
                            <th><?php echo $row["C_MailFac"] ?></th>
                            <th><?php echo $row["Clave_ATV"] ?></th>
                            <th><?php echo $row["Clave_CCSS"] ?></th>
                            <th><?php echo $row["Clave_INS"] ?></th>
                            <th><?php echo $row["Clave_Travi"] ?></th>
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



<?php include('includes/footer.php');  ?>




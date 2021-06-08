<?php include("conexion.php");  ?>

<?php include('includes/header.php');  ?>

<!---------------------------------------------------------------- INICIO      COLLAPSE --------------------------------------------------->
<br>
<h2 align="center">Clientes Inactivos</h2>
<br>
<br>
<?php
$query = "SELECT Cedula, Nombre, Genero, Primer_Apellido, Segundo_Apellido, Edad FROM persona_fisica ORDER BY id DESC WHERE Actividad_Economica = '2' ";
$result = mysqli_query($conn, $query);
if (!$result) {
     die("Query Failed.");
}
?>

<div class="container">
     <div class="table-responsive">
          <table id="employee_data" class="table table-striped table-bordered">
               <thead>
                    <tr>
                         <td>Cedula</td>
                         <td>Nombre</td>
                         <td>Genero</td>
                         <td>Primer apellido</td>
                         <td>Segundo_Apellido</td>
                         <td>Edad</td>
                    </tr>
               </thead>
               <?php
               while ($row = mysqli_fetch_array($result)) {
                    echo '  
                               <tr>  
                                    <td>' . $row["Cedula"] . '</td>  
                                    <td>' . $row["Nombre"] . '</td>  
                                    <td>' . $row["Genero"] . '</td>  
                                    <td>' . $row["Primer_Apellido"] . '</td>  
                                    <td>' . $row["Segundo_Apellido"] . '</td>  
                                    <td>' . $row["Edad"] . '</td>  
                               </tr>  
                               ';
               }
               ?>
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
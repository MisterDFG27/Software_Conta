<?php include("conexion.php");  ?>

<?php include('includes/header.php');  ?>

<!---------------------------------------------------------------- INICIO      COLLAPSE --------------------------------------------------->
<br>
<h2 align="center">Clientes activos</h2>
<br>
<br>
<?php
$query = "SELECT Cedula, Nombre, Genero, Primer_Apellido, Segundo_Apellido, Edad FROM persona_fisica ORDER BY id DESC ";
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
                         <td>Cedula</td>
                         <td>Nombre</td>
                         <td>Genero</td>
                         <td>Primer apellido</td>
                         <td>Segundo_Apellido</td>
                         <td>Edad</td>
                        
                   
                        
                    </tr>
               </thead>
               <tbody>
               <?php
               while ($row = mysqli_fetch_array($result)) {
                    ?> 
                               <tr>  
                                    <th><?php  echo $row["Cedula"]?></th>  
                                    <th><?php echo $row["Nombre"] ?></th>  
                                    <th><?php echo $row["Genero"] ?></th>  
                                    <th><?php echo $row["Primer_Apellido"] ?></th>  
                                    <th><?php echo $row["Segundo_Apellido"] ?></th>  
                                    <th><?php echo $row["Edad"] ?></th>  
                                   
                                    
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
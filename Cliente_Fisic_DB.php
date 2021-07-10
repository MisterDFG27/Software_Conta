<?php

include('conexion.php');

if (isset($_POST['save'])) {

  $id = $_POST['id'];
  $q1 = $_POST['tipoid'];
  $q2 = $_POST['cedula'];
  $q3 = $_POST['nombre'];
  $q4 = $_POST['ape1'];
  $q5 = $_POST['ape2'];
  $q6 = $_POST['edad'];
  $q7 = $_POST['genero'];
  $q8 = $_POST['estado'];
  $q9 = $_POST['fecha'];
  $q10 = $_POST['nacionalidad'];
  $q11 = $_POST['provincia'];
  $q12 = $_POST['canton'];
  $q13 = $_POST['distrito'];
  $q14 = $_POST['barrio'];
  $q15 = $_POST['señas'];
  $q16 = $_POST['hijos'];
  $q17 = $_POST['regimen'];
  $q18 = $_POST['tipfac'];
  $q19 = $_POST['asalariado'];
  $q20 = $_POST['act1'];
  $q21 = $_POST['tel'];
  $q22 = $_POST['ext1'];
  $q23 = $_POST['telad'];
  $q24 = $_POST['cel'];
  $q25 = $_POST['celop'];
  $q26 = $_POST['correop'];
  $q27 = $_POST['correofac'];
  $q28 = $_POST['fechacontra'];
  $q29 = $_POST['provindf'];
  $q30 = $_POST['cantondf'];
  $q31 = $_POST['distrdf'];
  $q32 = $_POST['barriodf'];
  $q33 = $_POST['señasdf'];
  $q34 = $_POST['clavecorre'];
  $q35 = $_POST['clavefac'];
  $q36 = $_POST['clavetravi'];
  $q37 = $_POST['claveatv'];
  $q38 = $_POST['claveccss'];
  $q39 = $_POST['claveins'];
  $q40 = $_POST['tp'];
 


  $query = "INSERT INTO persona_fisica(id,Tipo_Identificacion, Cedula, Nombre, Primer_Apellido, Segundo_Apellido, Edad, Genero,
              Estado_Civil, Fecha_Nacimiento, Nacionalidad, Provincia, Canton, Distrito, Barrio,
              OtrasSeñas, Cantidad_Hijos,  Regimen_Tributario, Tipo_Facturacion, Asalariado,
              Actividad_Economica, Telefono_Principal, Ext1, Telefono_Opcional, Celular_Principal,
              Celular_Opcional, Correo_Personal, Correo_Factura_Elect, Fecha_Contratacion, 
              P_DF, C_DF, D_DF, B_DF,OtrSeña_DF, C_CorreoP, C_MailFac, Clave_Travi, Clave_ATV,
               Clave_CCSS, Clave_INS, Est_cli) 
               VALUES ('$id','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$q18','$q19','$q20','$q21','$q22','$q23',
               '$q24','$q25','$q26','$q27','$q28','$q29','$q30','$q31','$q32','$q33','$q34','$q35','$q36','$q37','$q38','$q39','$q40')";
  
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }
  $_SESSION['message'] = 'La informacion ha sido guardado exitosamente';
  $_SESSION['message_type'] = 'success';
  header('Location: Registro_Cliente_Ced_Fisica.php');

}

?>
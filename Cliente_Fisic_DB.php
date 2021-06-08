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
  $q22 = $_POST['tel'];
  $q23 = $_POST['ext1'];
  $q24 = $_POST['ext2'];
  $q25 = $_POST['telad'];
  $q26 = $_POST['cel'];
  $q27 = $_POST['celop'];
  $q28 = $_POST['correop'];
  $q29 = $_POST['correofac'];
  $q30 = $_POST['fechacontra'];
  $q31 = $_POST['provindf'];
  $q32 = $_POST['cantondf'];
  $q33 = $_POST['distrdf'];
  $q34 = $_POST['barriodf'];
  $q35 = $_POST['señasdf'];
  $q36 = $_POST['clavecorre'];
  $q37 = $_POST['clavefac'];
  $q38 = $_POST['clavetravi'];
  $q39 = $_POST['claveatv'];
  $q40 = $_POST['claveccss'];
  $q41 = $_POST['claveins'];
  $q42 = $_POST['provinctc'];
  $q43 = $_POST['cantonctc'];
  $q44 = $_POST['distritoctc'];
  $q45 = $_POST['barrioctc'];
  $q46 = $_POST['señasctc'];


  $query = "INSERT INTO persona_fisica(id,Tipo_Identificacion, Cedula, Nombre, Primer_Apellido, Segundo_Apellido, Edad, Genero,
              Estado_Civil, Fecha_Nacimiento, Nacionalidad, Provincia, Canton, Distrito, Barrio, OtrasSeñas, Cantidad_Hijos, 
              Regimen_Tributario, Tipo_Facturacion, Asalariado, Actividad_Economica, Telefono_Principal, Ext1, Ext2, Telefono_Opcional, 
              Celular_Principal, Celular_Opcional, Correo_Personal, Correo_Factura_Elect, Fecha_Contratacion, P_DF, C_DF, D_DF, B_DF,
               OtrSeña_DF, C_CorreoP, C_MailFac, Clave_Travi, Clave_ATV, Clave_CCSS, Clave_INS, P_CTC, C_CTC, D_CTC, B_CTC, OtrSeñ_CTC) 
               VALUES ('$id','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$q18','$q19','$q20','$q22','$q23','$q24',
               '$q25','$q26','$q27','$q28','$q29','$q30','$q31','$q32','$q33','$q34','$q35','$q36','$q37','$q38','$q39','$q40','$q41','$q42','$q43','$q44','$q45','$q46')";
  
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }
  $_SESSION['message'] = 'La informacion ha sido guardado exitosamente';
  $_SESSION['message_type'] = 'success';
  header('Location: Registro_Cliente_Ced_Fisica.php');

}

?>
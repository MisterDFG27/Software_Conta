<?php

include('conexion.php');

if (isset($_POST['save'])) {

  $id = $_POST['id'];
  $q1 = $_POST['tipoid'];
  $q2 = $_POST['ced'];
  $q3 = $_POST['nombre'];
  $q4 = $_POST['fecha'];
  $q5 = $_POST['regimen'];
  $q6 = $_POST['act'];
  $q7 = $_POST['tel'];
  $q8 = $_POST['ext1'];
  $q9 = $_POST['ext2'];
  $q10 = $_POST['telad'];
  $q11 = $_POST['cel'];
  $q12 = $_POST['celop'];
  $q13 = $_POST['correop'];
  $q14 = $_POST['correofac'];
  $q15 = $_POST['fechacontra'];
  $q16 = $_POST['provincia'];
  $q17 = $_POST['canton'];
  $q18 = $_POST['dist'];
  $q19 = $_POST['barrio'];
  $q20 = $_POST['otra'];
  $q22= $_POST['clavecorre'];
  $q23 = $_POST['clavefac'];
  $q24 = $_POST['clavetravi'];
  $q25 = $_POST['claveatv'];
  $q26 = $_POST['claveccss'];
  $q27 = $_POST['claveins'];
  $q28 = $_POST['provinctc'];
  $q29 = $_POST['cantonctc'];
  $q30 = $_POST['distritoctc'];
  $q31 = $_POST['barrioctc'];
  $q32 = $_POST['señasctc'];
  

  $query = "INSERT INTO `persona_juridica`(id, Tipo_identificacion, Cedula_Juridica, Nombre_Empresa, Fecha_Creacion, Regimen_Tributario, Actividad_Economica, Telefono_Principal, Ext1, Ext2, 
            Telefono_Opcional, Celular_Principal, Celular_Opcional, Correo_Personal, Correo_Fact_Elect, Fecha_Contratacion, Provincia, Canton, Distrito, Barrio, OtrasSeñas, Clave_Correo_Princ,
             Clave_Correo_Fact, Clave_TRAVI, Clave_ATV, Clave_CCSS, Clave_INS, Provincia_CTC, Canton_CTC, Distrito_CTC, Barrio_CTC, Otras_CTC) 
            VALUES ('$id','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$q18','$q19','$q20','$q22','$q23','$q24', '$q25','$q26','$q27','$q28','$q29',
                    '$q30','$q31','$q32')";
  
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }
  $_SESSION['message'] = 'La informacion ha sido guardado exitosamente';
  $_SESSION['message_type'] = 'success';
  header('Location: Registro_Cliente_Ced_Juridica.php');
}

?>
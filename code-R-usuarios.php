<?php
    
    // Incluir archivo de conexion a la base de datos
    require_once "conexion.php";
    
    // Definir variable e inicializar con valores vacio
    
    $nombre = $ape1 = $ape2 = $cedula = $correo = $local = $tel = $sexo = "";
    $nombre_err = $ape1_err = $ape2_err = $cedula_err = $correo_err = $local_err = $tel_err = $sexo_err = "";
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        // VALIDANDO INPUT DE NOMBRE DE USUARIO
        if(empty(trim($_POST["nombre"]))){
            $nombre_err = "Por favor, ingrese su nombre";
        }else{
            //prepara una declaracion de seleccion
            $sql = "SELECT id FROM persona_fisica WHERE Nombre = ?";
            
            if($stmt = mysqli_prepare($link, $sql)){
                mysqli_stmt_bind_param($stmt, "s", $param_nombre);
                
                $param_nombre = trim($_POST["nombre"]);
                
                if(mysqli_stmt_execute($stmt)){
                    mysqli_stmt_store_result($stmt);
                    
                    //if(mysqli_stmt_num_rows($stmt) == 1){
                      //  $nombre_err = "Este nombre de usuario ya está en uso";
                    //}else{
                       $nombre = trim($_POST["nombre"]);
                    //}
                //}
                
            }else{
                echo "Ups! Algo salió mal, inténtalo mas tarde";
            }
        }
        }
        
        
        // VALIDANDO INPUT DE apellido 1
        if(empty(trim($_POST["ape1"]))){
            $ape1_err = "Por favor, ingrese su primer apellido";
        }else{
            //prepara una declaracion de seleccion
            $sql = "SELECT id FROM persona_fisica WHERE Apellido1 = ?";
            
            if($stmt = mysqli_prepare($link, $sql)){
                mysqli_stmt_bind_param($stmt, "s", $param_ape1);
                
                $param_ape1 = trim($_POST["ape1"]);
                
                if(mysqli_stmt_execute($stmt)){
                    mysqli_stmt_store_result($stmt);
                    
                    //if(mysqli_stmt_num_rows($stmt) == 1){
                      //  $nombre_err = "Este nombre de usuario ya está en uso";
                    //}else{
                        $ape1 = trim($_POST["ape1"]);
                    //}
                //}
                
            }else{
                echo "Ups! Algo salió mal, inténtalo mas tarde";
            }
        }
        }
        
        // VALIDANDO INPUT DE apellido 2
        if(empty(trim($_POST["ape2"]))){
            $ape2_err = "Por favor, ingrese su segundo apellido";
        }else{
            //prepara una declaracion de seleccion
            $sql = "SELECT id FROM persona_fisica WHERE Apellido2 = ?";
            
            if($stmt = mysqli_prepare($link, $sql)){
                mysqli_stmt_bind_param($stmt, "s", $param_ape2);
                
                $param_ape2 = trim($_POST["ape2"]);
                
                if(mysqli_stmt_execute($stmt)){
                    mysqli_stmt_store_result($stmt);
                    
                    //if(mysqli_stmt_num_rows($stmt) == 1){
                      //  $nombre_err = "Este nombre de usuario ya está en uso";
                    //}else{
                       $ape2 = trim($_POST["ape2"]);
                    //}
                //}
                
            }else{
                echo "Ups! Algo salió mal, inténtalo mas tarde";
            }
        }
        }

        // VALIDANDO INPUT DE cedula
        if(empty(trim($_POST["cedula"]))){
            $cedula_err = "Por favor, ingrese su cedula";
        }else{
            //prepara una declaracion de seleccion
            $sql = "SELECT id FROM persona_fisica WHERE Cedula = ?";
            
            if($stmt = mysqli_prepare($link, $sql)){
                mysqli_stmt_bind_param($stmt, "s", $param_cedula);
                
                $param_cedula = trim($_POST["cedula"]);
                
                if(mysqli_stmt_execute($stmt)){
                    mysqli_stmt_store_result($stmt);
                    
                    //if(mysqli_stmt_num_rows($stmt) == 1){
                      //  $nombre_err = "Este nombre de usuario ya está en uso";
                    //}else{
                       $cedula = trim($_POST["cedula"]);
                    //}
                //}
                
            }else{
                echo "Ups! Algo salió mal, inténtalo mas tarde";
            }
        }
        }

        // VALIDANDO INPUT DE Email
        if(empty(trim($_POST["correo"]))){
            $correo_err = "Por favor, ingrese su correo";
        }else{
            //prepara una declaracion de seleccion
            $sql = "SELECT id FROM persona_fisica WHERE Email = ?";
            
            if($stmt = mysqli_prepare($link, $sql)){
                mysqli_stmt_bind_param($stmt, "s", $param_correo);
                
                $param_correo = trim($_POST["correo"]);
                
                if(mysqli_stmt_execute($stmt)){
                    mysqli_stmt_store_result($stmt);
                    
                    //if(mysqli_stmt_num_rows($stmt) == 1){
                      //  $nombre_err = "Este nombre de usuario ya está en uso";
                    //}else{
                        $correo = trim($_POST["correo"]);
                    //}
                //}
                
            }else{
                echo "Ups! Algo salió mal, inténtalo mas tarde";
            }
        }
        }

        // VALIDANDO INPUT DE local
        if(empty(trim($_POST["local"]))){
            $local_err = "Por favor, ingrese su localizacion";
        }else{
            //prepara una declaracion de seleccion
            $sql = "SELECT id FROM persona_fisica WHERE Localizacion = ?";
            
            if($stmt = mysqli_prepare($link, $sql)){
                mysqli_stmt_bind_param($stmt, "s", $param_local);
                
                $param_nombre = trim($_POST["local"]);
                
                if(mysqli_stmt_execute($stmt)){
                    mysqli_stmt_store_result($stmt);
                    
                    //if(mysqli_stmt_num_rows($stmt) == 1){
                      //  $nombre_err = "Este nombre de usuario ya está en uso";
                    //}else{
                        $local = trim($_POST["local"]);
                    //}
                //}
                
            }else{
                echo "Ups! Algo salió mal, inténtalo mas tarde";
            }
        }
        }

        // VALIDANDO INPUT DE telefono
        if(empty(trim($_POST["tel"]))){
            $tel_err = "Por favor, ingrese su telefono";
        }else{
            //prepara una declaracion de seleccion
            $sql = "SELECT id FROM persona_fisica WHERE Telefono = ?";
            
            if($stmt = mysqli_prepare($link, $sql)){
                mysqli_stmt_bind_param($stmt, "s", $param_tel);
                
                $param_tel = trim($_POST["tel"]);
                
                if(mysqli_stmt_execute($stmt)){
                    mysqli_stmt_store_result($stmt);
                    
                    //if(mysqli_stmt_num_rows($stmt) == 1){
                      //  $nombre_err = "Este nombre de usuario ya está en uso";
                    //}else{
                        $tel = trim($_POST["tel"]);
                    //}
                //}
                
            }else{
                echo "Ups! Algo salió mal, inténtalo mas tarde";
            }
        }
        }

        // VALIDANDO INPUT DE sexo
        if(empty(trim($_POST["sexo"]))){
            $sexo_err = "Por favor, ingrese su sexo";
        }else{
            //prepara una declaracion de seleccion
            $sql = "SELECT id FROM persona_fisica WHERE Sexo = ?";
            
            if($stmt = mysqli_prepare($link, $sql)){
                mysqli_stmt_bind_param($stmt, "s", $param_sexo);
                
                $param_sexo = trim($_POST["sexo"]);
                
                if(mysqli_stmt_execute($stmt)){
                    mysqli_stmt_store_result($stmt);
                    
                    //if(mysqli_stmt_num_rows($stmt) == 1){
                      //  $nombre_err = "Este nombre de usuario ya está en uso";
                    //}else{
                        $sexo = trim($_POST["sexo"]);
                    //}
                //}
                
            }else{
                echo "Ups! Algo salió mal, inténtalo mas tarde";
            }
        }
        }
        
  
        
        // COMPROBANDO LOS ERRORES DE ENTRADA ANTES DE INSERTAR LOS DATOS EN LA BASE DE DATOS
        if(empty($nombre_err) && empty($ape1_err) && empty($ape2_err) && empty($cedula_err) && empty($correo_err) && empty($local_err) && empty($tel_err) && empty($sexo_err)){
            
            $sql = "INSERT INTO persona_fisica (Nombre, Apellido1, Apellido2, Cedula, Email, Localizacion, Telefono, Sexo) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            
            if($stmt = mysqli_prepare($link, $sql)){
                mysqli_stmt_bind_param($stmt, "ssssssss", $param_nombre, $param_ape1, $param_ape2, $param_cedula, $param_correo, $param_local, $param_tel, $param_sexo);
                
                // ESTABLECIENDO PARAMETRO
                $param_nombre = $nombre;
                $param_ape1 = $ape1;
                $param_ape2 = $ape2;
                $param_cedula = $cedula;
                $param_correo = $correo;
                $param_local = $local;
                $param_tel = $tel;
                $param_sexo = $sexo;
                
                
                if(mysqli_stmt_execute($stmt)){
                    header("location: Registro_Usuarios.php");
                }else{
                    echo "Algo Salio mal, intentalo despues";
                }
            }
        }
        
        mysqli_close($link);
        
    }
    
?>
<?php

    //INICIALIZAR LA SESION
    session_start();
    
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){

        header("location: index.php");

        exit;
    }

require_once "conexion.php";

$email = $password ="";
$email_err = $password_err = "";

if($_SERVER["REQUEST_METHOD"] === "POST"){
    
    if(empty(trim($_POST["email"]))){
        $email_err = "Por favor, ingrese su nombre de usuario";
    }else{
        $email = trim($_POST["email"]);
    }
    
    if(empty(trim($_POST["password"]))){
        $password_err = "Por favor, ingrese una contraseña";
    }else{
        $password = trim($_POST["password"]);
    }
    
    
    

    //VALIDAR CREDENCIALES
    if(empty($email_err) && empty($password_err)){
        
        $sql = "SELECT id, nombreUsuario, Correo, Contraseña FROM usuarios WHERE nombreUsuario = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            $param_email = $email;
            
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
            }
            
            if(mysqli_stmt_num_rows($stmt) == 1){
                mysqli_stmt_bind_result($stmt, $id, $usuario, $email, $password);
                if(mysqli_stmt_fetch($stmt)){
                    if($password){
                        session_start();
                        
                        // ALMACENAR DATOS EN VARABLES DE SESION
                        $_SESSION["loggedin"] = true;
                        $_SESSION["id"] = $id;
                        $_SESSION["Correo"] = $email;
                        
                        header("location: menu.html");
                    }else{
                        $password_err = "La contraseña que has introducido no es valida";
                    }
                    
                } 
            }else{
                    $email_err = "No se ha encontrado ninguna cuenta con ese usuario.";
                }
            
        }else{
                    echo "UPS! algo salio mal, intentalo mas tarde";
                }
    }
    
    mysqli_close($link);
    
}

?>

























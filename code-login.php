<?php

    //INICIALIZAR LA SESION
    
    
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){

        header("location: index.php");

        exit;
    }

require_once "conexion.php";

$user = $password ="";
$user_err = $password_err = "";

if($_SERVER["REQUEST_METHOD"] === "POST"){
    
    if(empty(trim($_POST["nombreUsuario"]))){
        $user_err = "Por favor, ingrese su nombre de usuario";
    }else{
        $user = trim($_POST["user"]);
    }
    
    if(empty(trim($_POST["Contraseña"]))){
        $password_err = "Por favor, ingrese una contraseña";
    }else{
        $password = trim($_POST["password"]);
    }
    
    
    

    //VALIDAR CREDENCIALES
    if(empty($user_err) && empty($password_err)){
        
        $sql = "SELECT nombreUsuario, Contraseña FROM usuarios WHERE nombreUsuario = ?  AND Contraseña = ? ";
        
        if($stmt = mysqli_prepare($link, $sql)){
            
            mysqli_stmt_bind_param($stmt, "s", $param_user);
            mysqli_stmt_bind_param($stmt, "s", $param_password);
            
            $param_user = $user;
            $param_password = $password; 
            
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
            }
            
            if(mysqli_stmt_num_rows($stmt) == 1){
                mysqli_stmt_bind_result($stmt, $user, $password);
                if(mysqli_stmt_fetch($stmt)){
                    if($password){
                        session_start();
                        
                        // ALMACENAR DATOS EN VARABLES DE SESION
                        $_SESSION["loggedin"] = true;
                        $_SESSION["nombreUsuario"] = $user;
                        $_SESSION["Contraseña"] = $password;
                        
                        header("location: menu.php");
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

























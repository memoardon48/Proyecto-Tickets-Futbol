<?php

if(isset($_POST['btnLogin'])){

    switch($_POST['btnLogin']){
        
        case 'Entrar':
            $usuario2 = $_POST['usuario'];
            $contrasena2 = $_POST['contrasena'];
            $quer1 = "SELECT * FROM usuario where username = '".$usuario2."' and password = '".$contrasena2."' and estado = 'AC'";
            $sentencia1 = $pdo->prepare($quer1);
            $sentencia1->execute();
            $verUsuario = $sentencia1 ->fetchAll(PDO::FETCH_ASSOC);  
            if(count($verUsuario)==1){
                
                $_SESSION['USUARIO']  = $usuario2;
                $_SESSION['ID_USUARIO']  = $verUsuario[0]['id'];
                $_SESSION['CORREO_USUARIO']  = $verUsuario[0]['email'];
                
                header('Location: inicio.php');                              
            }              
            else{
                echo "<div class='form__input-error-message form__message'>
                        <li> No estás registrado.</i>
                        </div>";                                
                } 
        break;
        case 'Cerrar':
            session_destroy();
            header("Location: login.php");
        break;

    }


}

?>

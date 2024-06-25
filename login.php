
<?php
    include 'global/config.php';
    include 'global/conexion.php';
    include 'iniciar_sesion.php';
    include 'validate_session.php';
    
    if (isset($_POST['usuario'])) {   
        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];
        $campos = array();

    }
    

?>



       

<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Login / Sign Up | DT</title>
    <link rel="preload" href="css/normalize.css" as="style">
    <link rel="stylesheet" href="css/normalize.css">    
    
    <link rel="preload" href="css/login.css" as="style">
    <link rel="stylesheet" href="css/login.css">
    <link rel="preload" href="css/footer.css" as="style">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
</head>
<body>

    <?php include("template/encabezado.php");?>

    <main id="main">
        <div class="container">

            <form class="form" action="login.php" method="POST" id="login">
                
                <h1 class="form__title">LogIn</h1>
                <?php
                    if (isset($_POST['usuario'])) {                        

                        if($usuario == ""){
                            array_push($campos, "El campo de nombre de usuario no puede estar vacio");
                        }

                        if($contrasena == "" || strlen($contrasena)<6){
                            array_push($campos, "El campo de contrasena no puede estar vacio");

                        }

                        if(count($campos)>0){
                            echo "<div class='form__input-error-message form__message'>";
                            for($i = 0; $i< count($campos);$i++){
                                echo "<li>".$campos[$i]."</i>";
                            }
                            echo "</div>";
                        }
                        
                    }
                ?>
                <div class="form__message form__message--error"></div>
                <div class="form__input-group">
                    <input type="text" class="form__input" name="usuario" autofocus placeholder="Username" value="<?php if(isset($usuario)) echo $usuario ?>">
                    <div class="form__input-error-message"></div>
                    <php> </php>
                </div>
                <div class="form__input-group">
                    <input type="password" class="form__input" name="contrasena" autofocus placeholder="Password" value="<?php if(isset($contrasena)) echo $contrasena ?>">
                    <div class="form__input-error-message"></div>
                </div>
                <button class="form__button" name="btnLogin" value="Entrar" type="submit">Continuar</button>
                
                <p class="form__text">
                    <a class="form__link" href="login2.php" id="linkCreateAccount">¿No tienes una cuenta? Crea una</a>
                </p>
                
            </form>
           
        </div>
    </main>
    
    <?php include("template/pie.php");?>
</body>

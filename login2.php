<?php
    include 'global/config.php';
    include 'global/conexion.php';
    include 'iniciar_sesion.php';
    include 'validate_session.php';   
    if (isset($_POST['name'])) {
                        
                                   
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $lugar = $_POST['lugar'];
            $phone = $_POST['phone'];
            $usuario = $_POST['usuario']; 
            $correo = $_POST['correo'];
            $contrasena = $_POST['contrasena'];
            $ccontrasena = $_POST['ccontrasena'];
            $fecha = $_POST['fecha'];
            $campos = array();
                        
    }

    $fechaactual = date('Y-m-d');
    $nuevafecha = strtotime ('-18 year' , strtotime($fechaactual)); 
    $nuevafecha = date ('Y-m-d',$nuevafecha);

    
?>


<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Login / Crear Cuenta | DT</title>
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

    <main id="main" class="form2">
        <div class="container">

            
            <form class="form" action="login2.php" method="POST" id="createAccount">
            <h1 class="form__title">Crear Cuenta</h1>
            <?php
                    if (isset($_POST['name'])) {
                        
                        if($usuario == "" || strlen($usuario)<6){
                            array_push($campos, "El campo de nombre de usuario no puede estar vacio");
                        }                        
                        
                        if($name == "" || strlen($surname)<4){
                            array_push($campos, "El campo de nombre no puede estar vacio");
                        }

                        if($surname == "" || strlen($surname)<4){
                            array_push($campos, "El campo de apellido  no puede estar vacio");
                        }

                        if($lugar == "" || strlen($lugar)<6){
                            array_push($campos, "El campo de dirección de usuario no puede estar vacio");
                        }
                        if(!is_numeric($phone ) || strlen($phone)<8){
                            array_push($campos, "El campo de número telefónico de usuario no puede estar vacio");
                        }
                        if($correo == ""){
                            array_push($campos, "El campo de correo de usuario no puede estar vacio");
                        }
                        else{
                            if(!filter_var($correo,FILTER_VALIDATE_EMAIL)){
                                array_push($campos, "El campo de correo de usuario no esta disponible");
                            }
                        }

                        if($contrasena == ""){
                            array_push($campos, "El campo de contraseña de usuario no puede estar vacio");                
                        }elseif(strlen($contrasena)<8){
                            array_push($campos, "La contraseña debe tener al menos 8 caracteres");                                
                        }elseif(!preg_match('`[a-z]`',$contrasena)){
                            array_push($campos, "La contraseña debe tener al menos una letra minúscula");                                
                        }elseif(!preg_match('`[A-Z]`',$contrasena)){
                            array_push($campos, "La contraseña debe tener al menos una letra mayúscula");                               
                        }elseif(!preg_match('`[0-9]`',$contrasena)){
                            array_push($campos, "La contraseña debe tener al menos un número");                              
                        }

                        if($ccontrasena == ""){
                            array_push($campos, "El campo de confirmación de contraseña de usuario no puede estar vacio");                
                        }elseif($ccontrasena != $contrasena){
                            array_push($campos, "Las contraseñas no coinciden");                                
                        }
                        
                        if(count($campos)>0){
                            echo "<div class='form__input-error-message'>";
                            for($i = 0; $i< count($campos);$i++){
                                echo "<li>".$campos[$i]."</i>";
                            }
                            echo "</div>";
                        }else{
                            echo $fecha;
                            $sentencia = $pdo -> prepare("INSERT INTO usuario (username, password, nombre, apellido, email, fecha_nacimiento, direccion, telefono) VALUES (:usuario, :contrasena, :nombre, :apellido, :correo, :fecha, :direccion, :telefono);");
                            $sentencia->bindParam(":usuario",$usuario);
                            $sentencia->bindParam(":contrasena",$contrasena);
                            $sentencia->bindParam(":nombre",$name);
                            $sentencia->bindParam(":apellido",$surname);
                            $sentencia->bindParam(":correo",$correo);
                            $sentencia->bindParam(":fecha",$fecha);                            
                            $sentencia->bindParam(":direccion",$lugar);
                            $sentencia->bindParam(":telefono",$phone);
                            $sentencia->execute();
                            header('Location: inicio.php');
                        }
                        
                    }
                ?>
                
                <div class="form__message form__message--error"></div>
                <div class="form__input-group">
                    <input type="text" class="form__input" name="name" autofocus placeholder="Nombre" minlength="4" maxlength="15" value="<?php if(isset($name)) echo $name ?>" >
                    
                </div>
                <div class="form__input-group">
                    <input type="text" class="form__input" name="surname" autofocus placeholder="Apellido" minlength="4" maxlength="15" value="<?php if(isset($surname)) echo $surname ?>">                    
                </div>
                <label for="fecha">Fecha de nacimiento: </label>
                <div class="form__input-group">
                    <input type="date" class="form__input" name="fecha" max="<?php echo $nuevafecha?>">
                </div>   
                <div class="form__input-group">
                    <input type="text" class="form__input" name="lugar" autofocus placeholder="Dirección" minlength="6" maxlength="50" value="<?php if(isset($lugar)) echo $lugar ?>">
                </div>                
                <div class="form__input-group">
                    <input type="tel" class="form__input" name="phone" autofocus placeholder="Teléfono" minlength="8" maxlength="15" value="<?php if(isset($phone)) echo $phone ?>">     
                </div>                
                <div class="form__input-group">
                    <input type="text" class="form__input" name="usuario" autofocus placeholder="Nombre de usuario" minlength="6" value="<?php if(isset($usuario)) echo $usuario ?>">
                </div>
                <div class="form__input-group">
                    <input type="text" class="form__input" name="correo" autofocus placeholder="Correo electrónico" minlength="8" maxlength="40"  value="<?php if(isset($correo)) echo $correo ?>">
                </div>
                <div class="form__input-group">
                    <input type="password" class="form__input" name="contrasena" autofocus placeholder="Contraseña" minlength="8" value="<?php if(isset($contrasena)) echo $contrasena ?>">
                </div>
                <div class="form__input-group">
                    <input type="password" class="form__input" name="ccontrasena" autofocus placeholder="Confirmar contraseña" minlength="8" value="<?php if(isset($ccontrasena)) echo $ccontrasena ?>">
                </div>

                <button class="form__button" type="submit">Continue</button>
                <p class="form__text">
                    <a class="form__link" href="login.php" id="linkLogin">¿Ya tienes una cuenta? LogIn</a>
                </p>
                <!--validaciones php-->
                
            </form>
        </div>
    </main>
    
    <?php include("template/pie.php");?>
</body>

<?php
    if (isset($_POST['nombre'])) {
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $msj = $_POST['msj'];

        $campos = array();
                        
    }
    
    include 'iniciar_sesion.php';
    include 'validate_session.php';    

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contáctanos | DT</title>
    <link rel="stylesheet" href="css/contactanos.css">
    <link rel="preload" href="css/footer.css" as="style">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <script src="https://kit.fontawesome.com/131823c38b.js" crossorigin="anonymous"></script>
</head>
<script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>

<body>


    <section class="contact">
        <?php include("template/encabezado.php");?>
        <div class="content">
            <h2>Contáctanos</h2>
            <p>Estamos para ayudarte en cualquier inconveniente o duda que tengas. ¡No dudes en comunicarte con nosotros siempre que lo necesites!</p>
        </div>

        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon2"><i class="fa fa-thumb-tack fa-color" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <h3>Dirección</h3>
                        <p>Colonia Los Robles, <br>frente al Garden Place, <br>Tegucigalpa, <br> Honduras</p>
                    </div>
                </div>

                <div class="box">
                    <div class="icon2"><i class="fa-solid fa-phone fa-color"></i></i></div>
                    <div class="text">
                        <h3>Teléfono</h3>
                        <p>504 9556-4578</p>
                    </div>

                </div>

                <div class="box">
                    <div class="icon2"><i class="fa fa-envelope fa-color" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>dtickets<span class="correo">@gmail.com</span></p>
                    </div>
                </div>
            </div>


            <div class="contactForm">
                <form name="contactanosForm" action="contactanos.php" method="POST">
                    <h2>Enviar Mensaje</h2>

                    <div class="inputBox"  > 
                        <span>Nombre Completo</span>
                        <input type="text" name="nombre" required="required" minlength="6" maxlength="60" ">
                    </div>

                    <div class="inputBox" >
                        <span>Email</span>
                        <input type="email" name="correo" required="required" minlength="6" maxlength="60">

                    </div>

                    <div class="inputBox">
                        <span>Escriba su mensaje...</span>
                        <textarea required="required" minlength="10" maxlength="250" name= "msj"></textarea>

                    </div>


                    <div class="inputBox">
                        <input type="submit" name="" value="Send">

                    </div>
                    <?php
                    if (isset($_POST['nombre'])) {                        

                        if($nombre == "" || strlen($nombre)<5){
                            array_push($campos, "El campo de nombre de usuario no puede estar vacio o ser menor a 5 caracteres");
                        }

                        if($correo == ""){
                            array_push($campos, "El campo de correo de usuario no puede estar vacio");
                        }
                        else{
                            if(!filter_var($correo,FILTER_VALIDATE_EMAIL)){
                                array_push($campos, "El campo de correo de usuario no esta disponible");
                            }


                        if($msj == "" ){
                            array_push($campos, "El campo de Mensaje no puede estar vacio o ser menor a 200 caracteres");

                        }

                        if(count($campos)>0){
                            echo "<div class='form__input-error-message'>";
                            for($i = 0; $i< count($campos);$i++){
                                echo "<li>".$campos[$i]."</i>";
                            }
                        }else{
                            
                        }
                        echo "</div>";
                    }
                }


                    ?>

                </form>

            </div>
    </section>

    <?php include("template/pie.php");?>
</body>

</html>
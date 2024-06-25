<?php
    include 'global/config.php';
    include 'global/conexion.php';
    include 'iniciar_sesion.php';    
    include 'validate_session.php';   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link rel="preload" href="css/normalize.css" as="style">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preload" href="css/comprarTicket.css" as="style">
    <link rel="stylesheet" href="css/comprarTicket.css">
    <link rel="preload" href="css/footer.css" as="style">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/131823c38b.js" crossorigin="anonymous"></script>
    
    
    <title>Comprar Tickets | DT</title>
</head>
<body>
    
    <main>
        <div class="contenedorTop">
            <section class="banner coll-12 coll-s-12">
                
                
               
            </section>

            <?php include("template/encabezado.php");?>
        </div>
        
            <section class="areaTickets coll-12 coll-s-12">
                         
            <div class="container">
                <br><br><br>
                <div class="row">                   
                    
                    <div class="col-12 inst1">
                        Información de Usuario
                    </div>
                    
                    <div class="col-12">
                        
                           
                            <div class="row seccionZona">
                            
                                <i class="fa-solid fa-user col-2"></i>
                                <div class="col-5 col-sm-6 zona">
                                    Nombre de usuario: <?php echo $_SESSION['USUARIO'];?>
                                </div>                         
                                
                            </div>
                            <div class="row seccionZona">
                                <i class="fa-solid fa-envelope col-2"></i>
                                <div class="col-5 col-sm-6 zona">
                                    Correo electrónico: <?php echo $_SESSION['CORREO_USUARIO'];?>
                                </div>                         
                                
                            </div>
                                             
                        
                    </div>                    
                </div>
                                
                <br><br>
                <form action="" method="post">
                    <button type="submit" name = "btnLogin" value="Cerrar" class="btn btn-success col-5 col-sm-4">Cerrar Sesión</button>

                </form>
                                        
                <br><br><br>
                

            </div>

            
        </section>
       
        

        
        
    </main>
    
    <?php include("template/pie.php");?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>
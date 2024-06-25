<?php
    include 'global/config.php';
    include 'global/conexion.php';
    include 'iniciar_sesion.php';
    include 'validate_session.php';
    include 'carrito.php';
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
    <link rel="preload" href="css/verCarrito.css" as="style">
    <link rel="stylesheet" href="css/verCarrito.css">
    <link rel="preload" href="css/footer.css" as="style">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/131823c38b.js" crossorigin="anonymous"></script>
    
    
    <title>Carrito | DT</title>
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
                    <?php if(!empty($_SESSION['USUARIO'])) {?>
                        <?php if(!empty($_SESSION['CARRITO'])) {?>
                        <br><br><br>
                        <h2>Tickets en el Carrito</h2>
                        <br><br>
                        <?php $total=0;?>
                        <?php foreach($_SESSION['CARRITO'] as $indice => $producto){?>
                            
                            <div class="row ticket">
                                <div class="col-12 decoracion">

                                </div>
                                <div class="col-12 col-md-6 parteA">
                                    <div class="row col-12">
                                    <i class="fa-solid fa-futbol col-2"></i>
                                    <div class="col-10">
                                        <h3>Partido</h3>                                
                                    </div>
                                    <div class="col-12">
                                        <p>Estadio: <?php echo $producto['estadio']?></p>
                                        <p>Fecha y hora: <?php echo $producto['fecha_hora']?></p>
                                        <p><?php echo $producto['equipo1']?> VS <?php echo $producto['equipo2']?> </p>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 parteB">
                                    <div class="row col-12">
                                    <i class='fa-solid fa-ticket col-2'></i>                            
                                    <div class="col-10">
                                        <h3>Asiento</h3>                                
                                    </div>
                                    <div class="col-12">
                                        <p>Asiento: <?php echo $producto['asiento']?></p>
                                        <p>Fila: <?php echo $producto['fila']?></p>
                                        <p>Puerta: <?php echo $producto['puerta']?></p>
                                        <p>Sector: <?php echo $producto['sector']?></p>
                                        <p>Zona: <?php echo $producto['zona']?></p>
                                        <p>Precio: <?php echo $producto['precio']?></p>
                                    </div>
                                    </div>
                                </div>
                                <form action="" method="post">
                                    <input type="hidden" name="id" value="<?php echo $producto['idTicket'];?>">
                                    <div class= "row col-12">
                                        <div class="col-12 col-md-9"></div>                            
                                        <button value= "Eliminar" name= "btnAccion" type="submit" class="btn btn-secondary col-md-3 col-12 botonEl">Eliminar</button>                          
                                        
                                    </div>
                                </form>
                            </div>
                            <br><br>
                            <?php $total = $total + $producto['precio']?>
                        <?php } ?>              
                                
                        </div>
                        <br><br><br><br>                        
                        <div class="container">
                        <form action="" method="post">
                            <div class= "row col-12">
                                <div class="col-12 col-md-7"></div>                            
                                <button value= "Pagar" name= "btnAccion" type="submit" class="btn btn-success col-md-5 col-12 botonEl">Pagar L. <?php echo number_format($total,2); ?></button>                          
                                    
                            </div>
                        </form>
                        
                        </div>
                        
                        <?php } else { ?>
                            <br><br><br><br><br><br>
                            <div class = "alert alert-success">
                                Oops! Aún no tienes tickets en tu carrito.

                            </div>
                        <?php } ?>

                    <?php } else { ?>
                        <br><br><br><br><br><br>
                        <div class="container">
                            <div class = "alert alert-success">
                                Debes iniciar sesión para poder comprar.
                            </div>
                        </div>
                        <br><br><br><br><br><br>
                    <?php } ?>
                    
            </div>  
            
            
            
        </section>
        <br><br><br>

        
        
    </main>
    
    <?php include("template/pie.php");?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>
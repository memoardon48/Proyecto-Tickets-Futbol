<?php
    include 'global/config.php';
    include 'global/conexion.php';
    include 'iniciar_sesion.php';
    include 'carrito.php';
    include 'validate_session.php';
    $idPartido = $_GET['partido'];

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
        <?php if(!empty($_SESSION['USUARIO'])) {?>
            <section class="areaTickets coll-12 coll-s-12">
            <?php
                $quer1= "SELECT pz.id, nombre, precio FROM partido_zona pz INNER JOIN zona z ON pz.id_zona = z.id  WHERE id_partido =".$idPartido;
                $sentencia1 = $pdo->prepare($quer1);
                $sentencia1->execute();
                $listaPrecios = $sentencia1 ->fetchAll(PDO::FETCH_ASSOC);  
                            
            ?>

             
            <div class="container">
                <br><br><br>
                <div class="row">                    
                    <div class="col-12 mensaje">
                    <i class="fa-solid fa-circle-info"></i>
                    Información sobre el partido
                    <p>Recuerda que debes seguir los protocolos de bioseguridad al asistir al estadio.</p>
                    </div>
                    <div class="col-12 inst1">
                        Elige la zona que prefieres
                    </div>
                    
                    <div class="col-12">
                        <?php foreach($listaPrecios as $precio){?>
                            <form action="" method="post">
                            <div class="row seccionZona">
                            <i class="fa-solid fa-futbol col-2"></i>
                            <div class="col-5 col-sm-6 zona">
                                <?php echo $precio['nombre'] ?>
                            </div>                            
                            <button value= "<?php echo $precio['id'] ?>" name= "btnZona" type="submit" class="btn btn-secondary col-5 col-sm-4">L. <?php echo $precio['precio'] ?></button>
                           
                            </div>
                            </form>
                        <?php } ?>                        
                        
                    </div>                    
                </div>
                <?php
                    if(isset($_POST['btnZona'])){
                        $quer2= "SELECT * FROM ticket WHERE id_partido_zona =".$_POST['btnZona']." AND estado = 'disponible'";
                        $sentencia2 = $pdo->prepare($quer2);
                        $sentencia2->execute();
                        $listaTickets = $sentencia2 ->fetchAll(PDO::FETCH_ASSOC);  
                        
                        if(count($listaTickets)==0){
                            echo "<div class='alert alert-danger' role='alert'>
                            Lo sentimos mucho, ya no hay tickets disponibles para esta zona.
                          </div>";
                        } 
                        else{
                            echo "<div class='row'>
                            <div class='col-12 inst1'>
                                Elige el ticket
                            </div>";
                            foreach($listaTickets as $ticket){

                                echo "
                                <form action='' method='post'>
                                <div class='col-12'>
                                    <div class='row seccionZona'>
                                        <i class='fa-solid fa-ticket col-2'></i>
                                        <div class='col-5 col-sm-6 zona infoTicket'>Asiento: ".$ticket['asiento']."<br>Fila: ".$ticket['fila']."</div>                            
                                        <input name='idTicket' type='hidden' value=".$ticket['id'].">
                                        <button type='submit' name='btnAccion' value='Agregar' class='btn btn-secondary col-5 col-sm-4 btnComprar'>Comprar</button>
                                        
                                    </div>
                                
                                </div>
                                </form>
                                ";
                            }

                            echo "</div>";
                            
                        }
                        

                        
                    }
                
                
                ?>
                
                <br><br>
                <a href="verCarrito.php"><button type="button" class="btn btn-success col-5 col-sm-4">Siguiente</button></a>
                                        
                <br><br><br>
                

            </div>

            
        </section>
        <?php }else {?>
            <br><br><br><br><br><br>
            <div class="container">
                <div class = "alerta">
                    Debes iniciar sesión para poder comprar.
                </div>
            </div>
            <br><br><br><br><br>
        <?php } ?>
        

        
        
    </main>
    
    <?php include("template/pie.php");?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>
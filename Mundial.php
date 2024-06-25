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
    <link rel="preload" href="css/Mundial.css" as="style">
    <link rel="stylesheet" href="css/Mundial.css">
    <link rel="preload" href="css/footer.css" as="style">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    
    
    <title>Mundial Qatar | DT</title>
</head>
<body>
    
    <main>
        <div class="contenedorTop">
            <section class="banner coll-12 coll-s-12">
                <div class="cajaBanner coll-6 coll-s-7">
                    <a href="inicio.php">Inicio </a>/ Mundial 2022<!-- ------------------- aqui  -->           
                    <h1>Tickets Qatar 2022</h1>
                    <p>Tickets para tus equipos nacionales favoritos.</p><!-- ------------------- aqui  -->      
                    <p>Los partidos que a tí más te gusten. Échales un vistazo. </p>
                </div>
                
               
            </section>

            <?php include("template/encabezado.php");?>
        </div>
    
        <section class="areaTickets coll-12 coll-s-12">

            <h2>PRÓXIMOS PARTIDOS</h2>

            <?php
                $sentencia = $pdo->prepare("SELECT p.id, fecha_hora, e.nombre as estadio, e.ciudad, temporada, jornada, l.nombre as liga FROM partido as p INNER JOIN estadio e ON p.id_estadio = e.id INNER JOIN liga l ON p.id_liga = l.id WHERE p.id_liga=4");
                $sentencia->execute();
                $listaTickets = $sentencia ->fetchAll(PDO::FETCH_ASSOC);                
            ?>

            <?php foreach($listaTickets as $ticket){ ?>
                <?php
                $quer= "SELECT nombre,logo FROM equipo_partido ep INNER JOIN equipo e ON ep.id_equipo = e.id  WHERE id_partido =".$ticket['id'];
                $sentencia2 = $pdo->prepare($quer);
                $sentencia2->execute();
                $listaEquipos = $sentencia2 ->fetchAll(PDO::FETCH_ASSOC); 
                            
                ?>
                <div class="ticket coll-9 coll-s-11">
                <div class="decoracion coll-2 coll-s-12">

                </div>
                <div class="infoTicket coll-10 coll-s-12">
                    <div class="infoIzquierda coll-8 coll-s-12">
                        <div class="infoImagenes coll-12 coll-s-12">
                            <div class="infoImg coll-s-3 coll-3">
                                <img src="https://drive.google.com/uc?export=download&id=<?php echo $listaEquipos[0]['logo'] ?>" alt="logo del Barcelona">
                                <p><?php echo $listaEquipos[0]['nombre'] ?></p>
                            </div>
                            <div class="infoImg coll-s-2 coll-3">
                                <span class="spanVS">VS</span>
                            </div>
                            <div class="infoImg coll-s-2 coll-3">
                                <img src="https://drive.google.com/uc?export=download&id=<?php echo $listaEquipos[1]['logo'] ?>" alt="logo del Mallorca">
                                <p><?php echo $listaEquipos[1]['nombre'] ?></p>
                            </div>
                        </div>
                        <div class="infoDetalles coll-12 coll-s-12">
                            <p><?php echo $ticket['estadio']." - ".$ticket['ciudad'] ?></p>
                            <p><?php echo $ticket['fecha_hora'] ?></p>
                        </div>

                    </div>
                    <div class="infoDerecha coll-4 coll-s-12">
                        <h3 data-bs-toggle="modal" data-bs-target="#myModal<?php echo $ticket['id'] ?>">Ver Precios</h3>
                        <a href="./comprarTicket.php?partido=<?php echo $ticket['id'] ?>" class="btnComprarLink">
                        <button class="btnComprar"> 
                            COMPRAR
                        </button>
                        </a>
                         <!--INICIO BOOTSTRAP-->

                         <div class="modal" id="myModal<?php echo $ticket['id'] ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                <?php
                                    $quer2= "SELECT nombre, precio FROM partido_zona pz INNER JOIN zona z ON pz.id_zona = z.id  WHERE id_partido =".$ticket['id'];
                                    $sentencia3 = $pdo->prepare($quer2);
                                    $sentencia3->execute();
                                    $listaPrecios = $sentencia3 ->fetchAll(PDO::FETCH_ASSOC);                
                                ?>
                                    <div class="modal-header">
                                        <h4 class="modal-title text-white">PRECIOS DEL PARTIDO</h4>
                                        <button class="btn btn-close bg-white" data-bs-dismiss="modal"></button>
                                    </div>

                                    <div class="modal-body">
                                        <div class="row subtituloPrecios">
                                            <div class="col-6 py-3 text-white ">
                                                Lps.
                                            </div>
                                            <div class="col-6 py-3 text-white ">
                                                Zona
                                            </div>
                                        </div>
                                        <?php foreach($listaPrecios as $precio){?>
                                            <div class="row rowPrecio">
                                            <div class="col-6 py-3 text-dark">
                                                <?php echo $precio['precio'] ?>
                                            </div>
                                            <div class="col-6 py-3 text-dark">
                                                <?php echo $precio['nombre'] ?>
                                            </div>                                            
                                            </div>
                                        <?php } ?>
                                        
                                        
                                    </div>

                                </div>

                            </div>

                        </div>
                        <!--FIN BOOTSTRAP-->

                        
                    </div>
                </div>            

            </div>
            <?php }?>            
        </section>

        <section class="publicidad coll-s-12 coll-12 ">     
            <a href="https://www.nike.com/it/" class="img1" target="_blank"><img  src="img/laLiga/image.jpg" alt="Logo de Nike" ></a>
            <a href="https://www.nike.com/us/es/w/mercurial-futbol-calzado-1gdj0z4f1bzy7ok" class= "img2" target="_blank"><img  src="img/laLiga/elbicho.webp" alt="Nike y CR7">  </a>     
              
                
        </section>
        
    </main>
    
    <?php include("template/pie.php");?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>
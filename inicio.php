<?php    
    include 'iniciar_sesion.php';
    include 'validate_session.php';    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preload" href="css/normalize.css" as="style">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preload" href="css/inicio.css" as="style">
    <link rel="stylesheet" href="css/inicio.css">
    <link rel="preload" href="css/footer.css" as="style">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <title>Inicio | DT</title>
</head>
<body>

    

      <main>
        
        <div class="contenedorTop">
            
            <section class="heroVideo col-12 col-s-12" >
                <video autoplay loop muted >            
                    <source src="img/inicio/vidEsta.mp4" type="video/mp4">
                </video>
                <div class="capaHero col-12 col-s-12">
                    <H1> Delta <br>
                    <span class="spanTickets">TICKETS</span></H1>
                    <p>Los mejores partidos al mejor precio</p>
                    <img src="img/inicio/logoDT2.png" alt="logo de Delta tickets" width="50" height="70" >
                    <a href="#seccion1"><img class= "flecha" src="img/inicio/arrow.png" width="50" height="40" alt=""></a>
                </div>
            </section>

            <?php include("template/encabezado.php");?>
        </div>
    
    
        <section id="seccion1" class="seccion1 col-12 col-s-12 " >
            <h2>Ligas para Explorar</h2>
            <div class="cajaPadre col-11 col-s-11 reveal">
                <a href="SerieA.php" class="cajaHijo">
                    
                    <img src="img/inicio/italiana.webp" alt="imagen de Dybala">
                    <h3> Tickets Serie A</h3>
                    <p>Temporada 2022-2023</p>
                    
                </a>
                <a href="ligaSpain.php" class="cajaHijo">
                    
                    <img src="img/inicio/espaniola.webp" alt="imagen de Lewandowski">
                    <h3> Tickets LaLiga</h3>
                    <p>Temporada 2022-2023</p>
                    
                </a>
                <a href="ligaNacional.php" class="cajaHijo">
                    
                    <img src="img/inicio/hondurena.webp" alt="imagen de Olimpia vs Motagua">
                    <h3> Tickets liga Hondureña</h3>
                    <p>Temporada 2022-2023</p>
                    
                </a>
            </div>
        </section>
        <section class="seccion2">
            <div class="cajaPadre col-11 col-s-11 ">
                <div class="cajaArriba col-12 col-s-12">
                    <h2>FIFA WORLD CUP <br> QATAR 2022</h2>
                    <p>¿Estás listo para el momento que más has esperado? </p>
                </div>
                <div class="cajaAbajo col-12 col-s-12">
                    <a href="Mundial.php">
                        <button>
                            <span>Tickets</span>
                        </button>
                    </a>
                    <a href="mundialInfo.php">
                        <button>
                            <span>+Info</span>
                        </button>
                    </a>
                </div>
            </div>
        </section>
        <section class="seccion3 col-12 col-s-12 ">
            <h2>Preguntas Frecuentes</h2>
            <div class="cajaPadre col-11 col-s-11 reveal">
                <article class="cajaHijo">
                    <h5>CUENTA</h5>
                    <p>¿Cómo puedo cambiar mi contraseña?</p>
                    <a href="faqs.php#cuenta" class="boton">
                        <button> Leer Más
                        </button>
                    </a>
                </article>
                <article class="cajaHijo">
                    <h5>COMPRAR</h5>
                    <p>¿De qué formas puedo pagar mis boletos?</p>
                    <a href="faqs.php#comprar" class="boton">
                        <button> Leer Más
                        </button>
                    </a>
                </article>
                <article class="cajaHijo">
                    <h5>ORDEN</h5>
                    <p>¿Puedo cancelar mi orden?</p>
                    <a href="faqs.php#orden" class="boton">
                        <button> Leer Más
                        </button>
                    </a>
        </section>
        <section class="seccion4 col-12 col-s-12">
            <div class="cajaServicio col-3 col-s-3">
                <h2>100% Garantía del Comprador</h2>
                <p>Diseñado para darte tranquilidad.</p>
            </div>

            <div class="cajaServicio col-3 col-s-3">
                <h2>Transacciones seguras</h2>
                <p>Tu información privada y personal debe permanecer privada y personal.</p>
            </div>
            <div class="cajaServicio col-3 col-s-3">
                <h2>Atención al cliente de servicio completo</h2>
                <p>Te mereces asistencia sin problemas de principio a fin.</p>
            </div>
        </section>
        <section class="publicidad col-12 col-s-12">
            <a href="https://www.nike.com/ca/w/new-3n82y" target="_blank">
            <img src="img/inicio/nikeLogo.png" alt="logo de Nike" >

            </a>
        </section>
        
    </main>

    <script type="text/javascript">
        window.addEventListener('scroll', reveal);

        function reveal(){
            var reveals = document.querySelectorAll('.reveal');

            for(var i = 0; i < reveals.length; i++){
                var windoheight = window.innerHeight;
                var revealtop = reveals[i].getBoundingClientRect().top;
                var revealpoint = 150;

                if(revealtop < windoheight - revealpoint){
                    reveals[i].classList.add('active');
                }
                else{
                    reveals[i].classList.remove('active');
                }

            }
        }
    </script>
   
   <?php include("template/pie.php");?>
</body>
</html>
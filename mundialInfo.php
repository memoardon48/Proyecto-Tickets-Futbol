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
    <title>Información Mundial | DT </title>
    <link rel="preload" href="css/normalize.css" as="style">
    <link rel="stylesheet" href="css/normalize.css">
    <!-- css link -->
    <link rel="preload" href="css/mundialInfo.css" as="style">
    <link rel="stylesheet" href="css/mundialInfo.css">

    <!-- fontawesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="preload" href="css/footer.css" as="style">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
</head>

<body>

    <header class="'col-12 col-s-12 contenedorTop">

        <div class="encabezado col-12 col-s-12">
          <div class="cajaImagen col-12 col-s-12 ">
            <img src="img/mundialInfo/logoM.png" alt="imagen de futbol" height="90%" width="auto">
          </div>
          <div class="cajaTexto col-12 col-s-12">
            <h1>QATAR 2022</h1>
          </div>
        </div>
    
        <?php include("template/encabezado.php");?>
      </header>
    <div id="container">
        <!--MENU-->

        

        <section id="seccion1" class="seccion1 col-12 col-s-12">
            <h2>NOTICIAS DEL MUNDIAL</h2>
            <div class="cajaPadre col-11 col-s-11">
                <a href="./noticias/noticia1.html" class="cajaHijo">

                    <img src="img/mundialInfo/GRINGOS.webp" alt="imagen de Gringo">
                    <h3> Generación dorada estadounidense tiene grandes aspiraciones

                    </h3>


                </a>
                <a href="./noticias/noticia2.html" class="cajaHijo">

                    <img src="img/mundialInfo/Hansi-Flick.webp" alt="imagen de flick">
                    <h3>Hansi Flick: "Las expectativas sobre Alemania son muy altas"</h3>


                </a>
                <a href="./noticias/noticia3.html" class="cajaHijo">

                    <img src="img/mundialInfo/MEXICO.webp" alt="imagen de Mexico">
                    <h3> México quiere sacarse las dudas en Catar y sorprender al mundo </h3>


                </a>


            </div>
        </section>

        <section class="introPrecios">
            <p>¿Estás listo para el mundial Qatar 2022? Sé parte de esta experiencia y vívela en vivo con los boletos que te ofrecemos para cada una de las fases. </p>
            <p>En la tabla inferior podrás informarte de cada uno de ellos. ¿¡Qué esperas!?</p>
        </section>

        <div class="table-container">

            <h1 class="heading">Tabla de Precios</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>Fases</th>
                        <th>Precio</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-label="Fases">Fase de Grupos</td>
                        <td data-label="Precio">2500lps.</td>
                    </tr>
                    <tr>
                        <td data-label="Fases">Octavos de Final</td>
                        <td data-label="Precio">4500lps.</td>
                    </tr>
                    <tr>
                        <td data-label="Fases">Cuartos de Final</td>
                        <td data-label="Precio">6500lps.</td>
                    </tr>
                    <tr>
                        <td data-label="Fases">Semifinal</td>
                        <td data-label="Precio">8500lps.</td>
                    </tr>
                    <tr>
                        <td data-label="Fases">Final</td>
                        <td data-label="Precio">10000lps</td>
                    </tr>
                </tbody>

            </table>

        </div>

    </div>

    <?php include("template/pie.php");?>

</body>

</html>
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
  <link rel="stylesheet" href="css/nosotros.css">
  <link rel="preload" href="css/footer.css" as="style">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
  <title>Nosotros | DT</title>
</head>

<body>
  <header class="'col-12 col-s-12 contenedorTop">

    <div class="encabezado col-12 col-s-12">
      <div class="cajaImagen col-12 col-s-12 ">
        <img src="img/nosotros/logo.png" alt="imagen de futbol">
      </div>
      <div class="cajaTexto col-12 col-s-12">
        <h1>DELTA TICKETS</h1>
      </div>
    </div>

    <?php include("template/encabezado.php");?>
  </header>
  <main>

    <div class="maximo ">
      <section class="seccion1 col-12 col-s-12 ">
        <h2>¿Quiénes Somos?</h2>
        <p>Nosotros somos un servicio de boletería que atendiende a sus clientes con la mejor calidad desde el 2013 y
          brindando la mejor calidad para cada uno de sus clientes al mejorar su experiencia comprando tickets de
          su deporte favorito.</p>
      </section>
      <section class="seccion2  col-12 col-s-12">
        <div class="texto col-6 col-s-6">
          <h2>MISIÓN</h2>
          <p>Mejorar continuamente el
            nivel de la experiencia del cliente mediante el
            uso de nuestro sitio web para ayudar a los
            clientes a encontrar y comprar boletos para los partidos que más les interesen.
          </p>
        </div>
        <div class="imagen col-6 col-s-6">
          <img src="./img/nosotros/mision.png" alt="">
        </div>
        
      </section>

      <section class="seccion3  col-12 col-s-12">
        
        <div class="texto col-6 col-s-12">
          <h2>VISIÓN</h2>
          <p>Ser la empresa de boletería líder en Honduras, reconocida por la calidad, excelencia operativa y continua innovación,
            impulsada por el talento de nuestra gente, guiada por un modelo de negocio que comparte el riesgo y la
            rentabilidad.</p>
        </div>
        <div class="imagen col-6 col-s-12">
          <img src="./img/nosotros/vision.png" alt="">
        </div>
      </section>
    </div>

  </main>

  <?php include("template/pie.php");?>

</body>

</html>
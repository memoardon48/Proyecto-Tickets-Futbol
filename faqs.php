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
    <link rel="preload" href="css/faqs.css" as="style">
    <link rel="stylesheet" href="./css/faqs.css">
    <link rel="preload" href="css/footer.css" as="style">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <title>FAQs | DT</title>
</head>


<body>
    
    <?php include("template/encabezado.php");?>
    
    <div class="titulo col-12 col-s-12">
        <div class="tituloArriba col-12 col-s-12">
            <img src="img/faqs/zyro-image.png" alt="imagen de faqs">
            <h1>¿Necesitas Ayuda?</h1>
        </div>
                  
        <h2>Preguntas más Frecuentes</h2>
       
    </div>
    <main>       
        
        <section class="cajaPreguntas"> <!--SECCION DE PREGUNTAS INICIO-->
            <span id="cuenta">CUENTA</span>
            <div class="faq open"><!-- FAQ 1 -->
                <div class="faq_text">
                    <h2>¿Como restablezco mi contraseña?</h2>
                    <p> Puedes cambiar tu contraseña en Delta Tickets desde tu teléfono inteligente o desde una computadora. En la pantalla de inicio de sesión, verá una opción de Contraseña olvidada  para hacer clic. Ahora ingrese la dirección de correo electrónico asociada con su cuenta Delta Tickets . Ahora se enviará un correo electrónico de restablecimiento de contraseña a esa dirección de correo electrónico. Siga las indicaciones en ese correo electrónico para establecer una nueva contraseña.
                    </p>
                </div>
                <span class="btn">&#8722;</span>
            </div><!-- FAQ 1 End -->
    
            <div class="faq"><!-- FAQ 2 -->
                <div class="faq_text">
                    <h2>¿Como cierro o elimino mi cuenta?</h2>
                    <p>Si desea cerrar su cuenta Delta Tickets, comuníquese con nosotros con esta solicitud desplazándose hacia abajo y tocando  Contactar con soporte mientras ve su pedido en la sección Yo de su cuenta Deltatickets. </p>
                </div>
                <span class="btn">&#43;</span>
            </div><!-- FAQ 2 End -->
    
            <div class="faq"><!-- FAQ 3 -->
                <div class="faq_text">
                    <h2>¿Qué es la autenticación de dos factores?</h2>
                    <p>La autenticación de dos factores, o 2FA, es una capa adicional de protección que puede habilitar para mantener su cuenta SeatGeek más segura.

                        Una vez que habilite 2FA, necesitará su teléfono para iniciar sesión en su cuenta. Después de ingresar su contraseña, se le solicitará un código de verificación, que se obtiene a través de SMS o una aplicación de autenticación. Una vez que ingrese ese código, iniciará sesión, ¡y cualquier persona que intente acceder de manera fraudulenta a su cuenta no podrá entrar!</p>
                </div>
                <span class="btn">&#43;</span>
            </div><!-- FAQ 3 End -->
    
            <div class="faq"><!-- FAQ 4 -->
                <div class="faq_text">
                    <h2>¿Porque ya no puedo iniciar sesion con Facebook?</h2>
                    <p>A partir de abril de 2020, Delta Tickets ya no admite registrarse o iniciar sesión en Facebook. Para asegurarse de que su cuenta esté protegida y de que pueda iniciar sesión, deberá confirmar los detalles de su cuenta y agregar una contraseña. Es posible que ya haya recibido un correo electrónico que le pide que lo haga, o podrá confirmar sus datos en la aplicación o el sitio web la próxima vez que inicie sesión.</p>
                </div>
                <span class="btn">&#43;</span>
            </div><!-- FAQ 4 End -->
    
            <div class="faq"><!-- FAQ 5 -->
                <div class="faq_text">
                    <h2>¿Si un amigo no tiene una cuenta yo podría hacer un pedido para él?</h2>
                    <p> Puedes hacer pedidos para amigos solo que el boleto se enviaría a tu correo electrónico, ya que tú eres el dueño de la cuenta, quien está haciendo el pedido</p>
                </div>
                <span class="btn">&#43;</span>


                <!--PREGUNTAS DE COMPRAS-->

            </div><!-- FAQ 5 End -->
        </section><!--SECCION DE PREGUNTAS FIN-->

        <section class="cajaPreguntas"> <!--SECCION DE PREGUNTAS INICIO-->
            <span id="comprar">COMPRAR</span>
            <div class="faq open"><!-- FAQ 1 -->
                <div class="faq_text">
                    <h2>¿De qué formas puedo pagar mis boletos?</h2>
                    <p> Los puntos de venta oficiales de Delta ticket pueden recibir efectivo, tarjeta de crédito y débito. (Visa, Mastercard y American Express)</p>
                </div>
                <span class="btn">&#8722;</span>
            </div><!-- FAQ 1 End -->
    
            <div class="faq"><!-- FAQ 2 -->
                <div class="faq_text">
                    <h2>¿Existe algún límite en la cantidad de boletos a comprar?</h2>
                    <p>El límite de boletos que puedo comprar está limitado a un máximo de 10 boletos por persona. Esto con el objetivo de evitar compras por revendedores y ofrecerle al usuario el mejor servicio garantizando el flujo adecuado de boletos y la disponibilidad de lugares hasta donde sea posible.</p>
                </div>
                <span class="btn">&#43;</span>
            </div><!-- FAQ 2 End -->
    
            <div class="faq"><!-- FAQ 3 -->
                <div class="faq_text">
                    <h2>¿El día del evento puedo comprar mis boletos en algún punto de venta?</h2>
                    <p>No, los puntos de venta dejarán de emitir boletos para el evento el día que se lleve a cabo, centralizando la venta de boletos para ese evento exclusivamente en la taquilla del inmueble el día del evento.</p>
                </div>
                <span class="btn">&#43;</span>
            </div><!-- FAQ 3 End -->
    
            <div class="faq"><!-- FAQ 4 -->
                <div class="faq_text">
                    <h2>¿Ocurrió un error al momento de mi compra en internet ¿Cómo puedo asegurarme de que se realizó la compra y el cargo a mi tarjeta?</h2>
                    <p>Es muy fácil, solo tienes que ingresar a MI CUENTA y en la pestaña de "Mis próximos eventos" aparecerán todas las compras que has realizado para nuevos eventos. 
    
                        Si la compra aparece en la lista anota el número de folio que aparece en la parte superior del poster del evento, y acude a cualquier punto de venta para recoger tus boletos. IMPORTANTE: Si escogiste la opción de PRINT-TICKET, solo da click en la imagen para descargar e imprimir tus boletos.</p>
                </div>
                <span class="btn">&#43;</span>
            </div><!-- FAQ 4 End -->
    
            <div class="faq"><!-- FAQ 5 -->
                <div class="faq_text">
                    <h2>Al comprar por medio de su página web, ¿Con qué anticipación puedo comprar boletos?</h2>
                    <p> La venta por internet estará disponible para compra de boletos hasta 1 día antes de la fecha del evento. El día del evento la única forma de adquirir boletos es en las taquillas del lugar</p>
                </div>
                <span class="btn">&#43;</span>
            </div><!-- FAQ 5 End -->
        </section><!--SECCION DE PREGUNTAS FIN-->

        <!--PREGUNTAS DE ORDEN-->

        <section class="cajaPreguntas"> <!--SECCION DE PREGUNTAS INICIO-->
            <span id="orden">ORDEN</span>
            <div class="faq open"><!-- FAQ 1 -->
                <div class="faq_text">
                    <h2>¿Puedo cambiar, cancelar o devolver mi pedido?</h2>
                    <p> Delta Ticket es una pagina que vende boletos de una variedad de fuentes. Esto significa que existen diferentes políticas de cambio, cancelación y reembolso de boletos según los detalles de su pedido.</p>
                </div>
                <span class="btn">&#8722;</span>
            </div><!-- FAQ 1 End -->
    
            <div class="faq"><!-- FAQ 2 -->
                <div class="faq_text">
                    <h2>¿Cuáles son los números de asiento para mis boletos?</h2>
                    <p>Toda la información de nuestros boletos proviene directamente de proveedores y vendedores. No siempre especifican los números de asiento cuando listan sus boletos, y solo podemos mostrar la información que brindan.

                        Podemos asegurarle que todos los boletos dentro del mismo listado estarán uno al lado del otro a menos que se indique lo contrario en las notas del boleto (es decir, a cuestas, al otro lado del pasillo, etc.). 
                    </p>
                </div>
                <span class="btn">&#43;</span>
            </div><!-- FAQ 2 End -->
    
            <div class="faq"><!-- FAQ 3 -->
                <div class="faq_text">
                    <h2>¿Puedo ordenar mis boletos en alguna agencia?</h2>
                    <p>No, desafotunadamente no contamos con tiendas fisicas para que puedas realizar tus compras de boletos y poder disfrutar de tus eventos deportivos favoritos. </p>
                </div>
                <span class="btn">&#43;</span>
            </div><!-- FAQ 3 End -->
    
            <div class="faq"><!-- FAQ 4 -->
                <div class="faq_text">
                    <h2>¿Que es un metodo de pago?</h2>
                    <p>Un método de pago es la forma en que se le pagará cuando se vendan sus boletos. Actualmente podemos emitir el pago a su cuenta bancaria.</p>
                </div>
                <span class="btn">&#43;</span>
            </div><!-- FAQ 4 End -->
    
            <div class="faq"><!-- FAQ 5 -->
                <div class="faq_text">
                    <h2>¿Puedo reservar boletos?</h2>
                    <p>Si puedes reservar boletos pero debes de dejar un adelannto del 30% del costo del boleto y si ya no quieres ese boleto de devolvemos el 15%.</p>
                </div>
                <span class="btn">&#43;</span>
            </div><!-- FAQ 5 End -->
        </section><!--SECCION DE PREGUNTAS FIN-->
    </main>


    <?php include("template/pie.php");?>
    
    <script src="./js/faqs.js"></script>
</body>
</html>
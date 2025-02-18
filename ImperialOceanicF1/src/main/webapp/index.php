<?php
session_start();
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imperial Oceánico</title>
    <script src="https://kit.fontawesome.com/f282478839.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="inicio.css">
</head>
<body>
<div id="central">
    <header id="cabecera" class="sticky-header">
        <div class="header-container">
            <!-- Logo y traductor -->
            <div class="logo">
                <a href="index.php"><img src="image/logon.png" alt="Logo"></a>
            </div>
            <div id="google_translate_element"></div>
            <!-- Menú y registro -->
            <div class="actions">
                <ul>
                    <li><a href="Proyecto.html">Quiénes somos</a></li>
                    <li><a href="Crucero.html">Cruceros y experiencias</a></li>
                    <li><a href="reserva1.jsp">Reserva</a></li>
                </ul>
                <div class="reg">
                    <a href="iniciosesion.html">Mi Cuenta</a>
                </div>
            </div>
        </div>
    </header>
    <div class="video-background">
        <video autoplay loop muted class="video">
            <source src="image/vide.mp4" type="video/mp4">
            Tu navegador no soporta este formato de video.
        </video>
        <div class="contenido">
            <p class="welcome-text">BIENVENIDO A</p>
            <h1 class="main-title">Imperial Oceánico</h1>
            <p class="subtitle">Crucero Mediterráneo</p>
            <a href="reserva1.jsp" class="hero-button">Reserva Ahora</a>
        </div>
    </div>
    <br>
    <div class="ofertas" align="center">
        <h2>OFERTAS CRUCEROS</h2>
    </div>
    <hr width="40%" size="2" color="#002E5D">
</div>
<br>
<div class="foto1">
    <center><img src="image/primera.jpg" width="950" height="350"></center>

    <div class="text-img">
        <h1 class="title">EL MEJOR REGALO PARA NAVIDAD</h1>
        <p class="subtitle">Invierno 2024-25 y Verano 2025</p>
        <a href="destinos.html" class="boton">Reserva Ahora</a>
    </div>
</div>
<div class="containeres">
    <div class="card">
        <figure>
            <img src="image/suit.jpg" width="200" height="220">
        </figure>
        <hr>
        <div class="cont">
            <h3>Suites de lujo</h3>
            <p>Alojamiento premium con vistas al mar, servicio de mayordomo, y detalles perso al zados para tu comodidad.</p>
            <a href="suites.html">CONOCE NUESTROS CAMAROTES</a>
        </div>
    </div>
    <div class="card">
        <figure>
            <img src="image/gastro.jpg" width="400" height="220">
        </figure>
        <hr>
        <div class="cont">
            <h3>Grastronomía</h3>
            <p>Disfruta de menús exclusivos creados por chefs de renombre, con ingredientes frescos y opciones para todos los paladares.</p>
            <a href="reserva1.jsp">EXPLORA NUESTRA EXPERIENCIA CULINARIA</a>
        </div>
    </div>
    <div class="card">
        <figure>
            <img src="image/excursiones.jpeg" width="200" height="220">
        </figure>
        <div class="cont">
            <h3>Excursiones exclusivas</h3>
            <p>Explora destinos culturales y paisajes exóticos con excursiones privadas diseñadas a tu medida.</p>
            <a href="destinos.html">DESCUBRE NUESTROS DESTINOS</a>
        </div>
    </div>
</div>
<br>
<div class="nmd">
    <div class="nmd-text">
        <h1>NUESTROS MEJORES DESTINOS</h1>
        <p>La costa italiana es un paraíso que combina paisajes espectaculares, rica cultura y gastronomía incomparable. Desde los acantilados de la Costa Amalfitana, donde pueblos como Positano y Amalfi parecen colgarse entre el cielo y el mar, hasta las aguas cristalinas de Cerdeña, cada rincón tiene su encanto único.</p>
        <p>Las Cinque Terre ofrecen senderos pintorescos y visitas inolvidables, mientras que la Costa de Liguria invita a disfrutar de sus playas escondidas. En Sicilia, la mezcla de historia, volcanes como el Etna y aguas turquesas crean una atmósfera mágica.</p>
        <p>La costa italiana no es solo un destino, sino una experiencia para los sentidos, con su brisa marina, colores vibrantes y el sabor auténtico de la cocina mediterránea. Es un lugar que despierta la imaginación y el alma.</p>
        <a href="reserva1.jsp"><button class="btn-explorar">EXPLORA ITALIA</button></a>
        <br><p></p>
    </div>
    <div class="nmd-im">
        <img src="image/ita.jpg" alt="Costa Italiana">
    </div>
</div>
<br><br>
<footer>
    <h2 class="title1">IMPERIAL OCEANICO</h2>
    <div class="social-icons">
        <a href="https://facebook.com" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="https://twitter.com" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
        <a href="https://instagram.com" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
    </div>
    <div class="linea-social"></div>

    <div class="linea"></div>
    <div class="cajas-container">
        <div class="Caja1">
            <h2 class="footerh">INFORMACIÓN</h2>
                <div>Puerto de Barcelona nº 657<br>
                    Tel: 672 332 234<br>
                    crucero@imperial.com
                </div>
        </div>
        <div class="Caja2">
            <h2 class="footerh">ACERCA DE</h2>
                <div><a href="Proyecto.html">Quiénes somos </a><br>
                    <a href="Crucero.html">Cruceros y experiencias</a><br>
                    <a href="suites.html">Suites</a> <br>
                    <a href="contacto.html">Contacto</a> <br>
                    <a href="destinos.html">Ofertas</a> <br>
                    <a href="Crucero777.html">Aviso legal y política de privacidad</a>
                </div>
        </div>
        <div class="Caja3">
            <h2>¡ÚNETE A NUESTRA NEWSLETTER!</h2>
            <div class="newsletter-form">
                <label for="email">
                    <i class="fas fa-envelope"></i>
                </label>
                <input type="email" id="email" placeholder="Correo electrónico" />
                <button type="submit">ENVIAR</button>
            </div>
            <div class="map-container">
                <a href="https://www.google.com/maps/place/C.+del+Puerto+de+Barcelona,+28821+Coslada,+Madrid/@40.4194595,-3.5771,17z/data=!3m1!4b1!4m10!1m2!2m1!1sPuerto+de+Barcelona,+nº+657.!3m6!1s0xd42300635429b5b:0x1bcc82e27af00f5e!8m2!3d40.4194596!4d-3.5722344!15sCh1QdWVydG8gZGUgQmFyY2Vsb25hLCBuwrogNjU3LpIBBXJvdXRl4AEA!16s%2Fg%2F1tqnmyn0?entry=ttu&g_ep=EgoyMDI1MDExNS4wIKXMDSoASAFQAw%3D%3D"><img src="image/PuertoDeBarcelona.png" alt="Mapa de ubicación" /></a>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'es',
            includedLanguages: 'es,en,it,fr,ru,ar,ja,ko,hi',
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE
        }, 'google_translate_element');
    }
</script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const select = document.getElementById('language-select');

        select.addEventListener('change', () => {
            const googleSelect = document.querySelector('select.goog-te-combo');
            if (googleSelect) {
                googleSelect.value = select.value;
                googleSelect.dispatchEvent(new Event('change'));
            }
        });
    });
</script>
<script>
    document.addEventListener("scroll", () => {
        const header = document.querySelector(".sticky-header");
        if (window.scrollY > 50) {
            header.classList.add("scrolled");
        } else {
            header.classList.remove("scrolled");
        }
    });
</script>
<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

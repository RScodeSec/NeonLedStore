<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="data:,">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" type="text/css" href="public/css/index.css">
    <!--<link rel="stylesheet" type="text/css" href="public/css/shared/header.css">-->
    <!--<link rel="stylesheet" type="text/css" href="public/css/shared/footer.css">-->
    <link rel="preload" href="public/css/shared/header.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="public/css/shared/footer.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
</head>
<body>
    <div class="page-container">
        <div class="cabecera-container">
            <header class="cabecera">
                <figure class="logo-container">
                    <a href="../index.php"><img src="public/images/logo.webp" alt=""></a>
                </figure>
                <div class="list-container">
                    <nav class="menu">
                        <ul class="list-left">
                            <li><a href="inicio.php">Inicio</a></li>
                            <li><a href="vistas/tienda.php">Tienda</a></li>
                            <li><a href="#Contact">Contacto</a></li>
                            <?php
                            if (!isset($_SESSION["cli_estado"])) { ?>
                            <li class="hidden-desk">
                                <a href="vistas/registrate.php">Iniciar Sesión<i class="far fa-user"></i></a>
                            </li>
                            <?php } ?>
                        </ul>
                    </nav>
                </div>
                <div class="elements-mobile">
                    <?php
                    if (isset($_SESSION["cli_estado"])) { ?>
                        <p><?php echo $_SESSION["cli_nombre"] ?></p>
                        <a href="controladores/cerrarsesion.php">Salir</a>
                        <i class="fas fa-shopping-cart"></i>
                    <?php } ?>
                        <div class="burger-button">
                            <i class="fas fa-bars"></i>
                        </div>
                </div>
            </header>
        </div>
        <section class="hero-container">
            <figure class="logo-container">
                <img src="public/images/logo_NLS.jfif" alt="">
            </figure>
            <section class="right-container">
                <nav class="menu">
                    <ul class="list-left">
                        <li><a href="inicio.php">Inicio</a></li>
                        <li><a href="vistas/tienda.php">Tienda</a></li>
                        <li><a href="#Contact">Contacto</a></li>
                    </ul>
                    <?php
                        if (isset($_SESSION["cli_estado"])) { ?>
                            <ul class="list-right">
                                <li class="hidden-mobile">
                                    <a><?php echo $_SESSION["cli_nombre"] ?></a>
                                    <a href="controladores/cerrarsesion.php">Salir</a>
                                    <i class="fas fa-shopping-cart"></i>
                                </li>
                            </ul>
                        <?php } else { ?>
                            <ul class="list-right">
                                <li><a href="vistas/registrate.php">Iniciar Sesión<i class="far fa-user"></i></a></li>
                            </ul>
                        <?php } ?>
                </nav>
                <div class="video-container">
                    <video loop muted autoplay preload="auto">
                        <source src="public/videos/video_index.mp4" type="video/mp4"> Tú navegador no soporta el video
                    </video>
                </div>
            </section>
        </section>
        <section class="designs-container">
            <div class="background-container">
                <h2 class="designs-title">Diseños en Led Neón</h2>
                <div class="designs-description-container">
                    <figure class="designs-img-container">
                        <img src="public/images/fondos/fondo_s.jpg" alt="">
                    </figure>
                    <article class="text-container">
                        <h3>Experiencia visual</h3>
                        <p>En Neon Led Store apostamos por ampliar tu zona visualmente y hacer de cualquier espacio uno más brillante y amplio sin perder su esencia. Decorarás tu ambiente de manera que quieras expresar tu mundo.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="contact-container" id="Contact">
            <div class="contact-background-container">
                <h2 class="contact-title">Contacto</h2>
                <div class="contact-form-container">
                    <form action="controladores/enviarcorreo.php" method="post">
                        <div class="inputs-container">
                            <article class="left-side">
                                <label for="name">
                                    <h3>Nombre completo:</h3>
                                    <input type="text" name="nombre" id="name">
                                </label>
                                <label for="email">
                                    <h3>Correo:</h3>
                                    <input type="text" name="email" id="email">
                                </label>
                                <label for="telephone">
                                    <h3>Número telefónico:</h3>
                                    <input type="text" name="telefono" id="telephone">
                                </label>
                            </article>
                            <article class="right-side">
                                <label for="message">
                                    <h3>Mensaje:</h3>
                                    <textarea name="mensaje" id="message" cols="30" rows="20"></textarea>
                                </label>
                            </article>
                        </div>
                        <div class="form-button-container">
                            <button class="button-contact" name="enviar">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <?php include_once "vistas/footer.php"; ?>
    </div>
    <script type="text/javascript" src="public/js/menu.js" defer></script>
    <!-- Iconos importadas -->
    <script  type="text/javascript" src="https://kit.fontawesome.com/c702fce202.js" crossorigin="anonymous" defer></script>
</body>
</html>
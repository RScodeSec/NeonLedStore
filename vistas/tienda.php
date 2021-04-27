<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="data:,">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link rel="stylesheet" href="../public/css/shared/header.css">
    <link rel="preload" href="../public/css/style/estilo.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="../public/css/shared/footer.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <!--<link rel="stylesheet" href="../public/css/shared/tienda.css">
    <link rel="stylesheet" href="../public/css/shared/footer.css">-->
</head>
<body>
    <div class="page-container">
            <?php include_once "menu.php"; ?>
            <figure class="shop-title">
                        <!--<img src="../public/images/animados/imagen_larga.jpg" alt="">-->
            </figure>
            <main class="main">
                <aside class="menu-left">
                    <!-- <figure class="shop-title-mobile">
                        <img src="../public/images/animados/imagen_larga.jpg" alt="">
                    </figure>   -->
   
                   <div class="desplazador-opciones">
                    <h3 >Filtros</h3>
                    <h3 class="menu-title">Categoría <span>+</span></h3>
                    <h3 class="menu-title">Precio <span>+</span></h3>
                    <h3 class="menu-title">Color <span>+</span></h3>
                    <h3 >Tamaño <span>+</span></h3>
                   </div>
                    <nav class="menu-categories">
                        <ul class="contenedor_categorias">
                        <!--<li><a href="">Cintas</a></li>
                            <li><a href="">Cómics</a></li>
                            <li><a href="">Deportes</a></li>
                            <li><a href="">Emojis</a></li>
                            <li><a href="">Videojuegos</a></li>
                            <li><a href="">Personajes</a></li>
                            <li><a href="">Música</a></li>
                            <li><a href="">Frases</a></li>
                            <li><a href="">Festividades</a></li> -->
                        </ul>
                    </nav>
                </aside>
                
                <section class="shop">
                   
                    <div class="articles-section">
                        <?php if (isset($_SESSION["cli_estado"])) { ?>
                            <div class="link-container">
                                <a href="personaliza.php">Personaliza tu diseño</a>
                            </div>
                        <?php } ?>
                        <!--<article class="article-card">
                            <a href="#">
                                <img src="../public/images/animados/mariposa.webp" alt="">
                            </a>
                            <h3>Título 1</h3>
                        </article>-->
                     </div>
                </section>
            </main>
        <?php include_once "footer.php"; ?>
    </div>
    <script rel="preconnect" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="../js/listacategorias.js" ></script>
    <script type="text/javascript" src="../public/js/menu.js" defer></script>
    <script rel="preconnect" src="https://kit.fontawesome.com/c702fce202.js" crossorigin="anonymous" defer></script>
</body>
</html>

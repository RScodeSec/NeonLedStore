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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/css/ion.rangeSlider.min.css"/>
    <!--<link rel="stylesheet" href="../public/css/shared/tienda.css">
    <link rel="stylesheet" href="../public/css/shared/footer.css">-->
</head>
<body>
    <div class="page-container">
            <?php include_once "menu.php"; ?>
            <?php include '../vistas/reusable/carrusel2.php'  ?>
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
                    <div class="categoria-tienda">
                        <h3 class="menu-title">Categoría <span class="ver-menu">+</span></h3>
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
                    </div>
                    <div class="categoria-precio">
                        <h3 class="menu-title">Precio <span class="ver-precio">+</span></h3>
                        <div class="range">
							<!-- <h6>Filtro por precio</h6> -->
							<div class='container mt-4'>
							<input type="text" id="inputrange"class="js-range-slider" name="my_range" value=""/>    
							</div>
							<p>Precio S/.10 - S/.500</p>
							<button id="optrange">Filtrar</button>
						</div>
                    </div>
                    <div class="categoria-color">
                         <h3 class="menu-title">Color <span class="ver-color">+</span></h3>
                         <nav class="color">
                            <ul class="contenedor-color">
                            <li><a href=""><p class="bola bola-1"></p></a></li>
                                <li><a href=""><p class="bola bola-2"></p></a></li>
                                <li><a href=""><p class="bola bola-3"></p></a></li>
                                <li><a href=""><p class="bola bola-4"></p></a></li>
                                <li><a href=""><p class="bola bola-5"></p></a></li>
                                <li><a href=""><p class="bola bola-6"></p></a></li>
                                <li><a href=""><p class="bola bola-7"></p></a></li>
                                <li><a href=""><p class="bola bola-8"></p></a></li>
                                <li><a href=""><p class="bola bola-9"></p></a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- <div class="categoria-tamaño">
                        <h3 >Tamaño <span>+</span></h3>
                    </div> -->
                   
                   
                   </div>
                    
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
    <?php include '../vistas/reusable/footerCarrusel.php'  ?>
    <script rel="preconnect" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="../js/listacategorias.js" ></script>
    <script type="text/javascript" src="../public/js/menu.js" defer></script>
    <script rel="preconnect" src="https://kit.fontawesome.com/c702fce202.js" crossorigin="anonymous" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/js/ion.rangeSlider.min.js"></script>
	<script>
		$(".js-range-slider").ionRangeSlider({
    skin: "round",
    step: 30,
    type: "double",
    // grid: true,
    min: 0,
    max: 500,
    from: 30,
    to: 300,
    prefix: "S/.",

});


	</script>
</body>
</html>

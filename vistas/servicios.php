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
            
            <div class="contenedor">
                <div class="subtitulo">
                    <h3>¿Ya conoces todos nuestros servicios?</h3>
                    <p>¡Entérate de todos nuestros servicios y</p>
                    <p class="minimo">promociones registrándote en nuestra página!<p>
                </div>
            </div>
            
        <?php include_once "footer.php"; ?>
    </div>
    <script rel="preconnect" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="../js/listacategorias.js" ></script>
    <script type="text/javascript" src="../public/js/menu.js" defer></script>
    <script rel="preconnect" src="https://kit.fontawesome.com/c702fce202.js" crossorigin="anonymous" defer></script>
</body>
</html>

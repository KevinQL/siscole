<!DOCTYPE html>
<html lang="es">
<head>
    
    <?php
        include_once('views/modules/cdnsheader.html');
    ?>

    <title>INICIO</title>
</head>
<body>

    <?php
        include_once("views/modules/navegacion.html");
    ?>



    <!-- CUADR DE VIENDENIDA AL USUARIO-->
    <div class="container mt-4">
        <h1 class="display-3">Bienvenido, <?= $_SESSION['data']['nombre'] ?>!</h1>    
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="#" role="button">Más información</a>
        </p>

    </div>



    <?php        
        include_once('views/modules/cdnsfooter.html');
        include_once('views/modules/links_in_session.html');
    ?>

</body>
</html>
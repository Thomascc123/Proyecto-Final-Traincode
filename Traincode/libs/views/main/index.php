<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="http://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="<?php constant('URL') ?>public/js/main.js"></script>
    <title>Document</title>
</head>

<body>
    <!-- paso 15 -->
    <?php require 'views/header.php'; ?>

    <div class="fondo">
        <div class="filtro">
            <!--filtro-->
        </div>
    </div>
    <div class="sec-1">
        <div class="cont_principal">
            <h1 class="centro">Bienvenido a TrainCode</h1>
            <p>Esta es una platafotma en la que podras interactuar con la comuidad publicando y resolviendo ejercicios programación.</p>
            <p>si aun no estas registrado <a href="<?php echo constant('URL'); ?>registro_seccion">Inicia Aqui</a></p>
        </div>
    </div>

    <?php require 'views/footer.php';?>
</body>

</html>
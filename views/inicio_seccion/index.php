<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/style.css">
    <link rel="stylesheet" href="/Proyecto/proyecto2021/plantilla_proyecto/public/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

    <?php require 'views/header_seccion.php';?>

    <div class="fondo_in_sec">
        <div class="filtro_sec"><!-- Filtro --></div>
    </div>
    <div class="p_seccion">
        <div id="form_seccion">
            <h1 class="centro">Iniciar Sección</h1>
            <form method="POST" action="<?php echo constant('URL'); ?>inicio_seccion/ingreso">
                <div id="correo"><label> <b> CORREO </b></label> <br>
                    <input type="email" name="correo" class="input_texto" required> <br>
                </div>
                <label> <b>CONTRASEÑA</b> </label> <br>
                <input type="password" name="contrasenia" class="input_texto" required> <br>
                <input type="submit" value="Iniciar Sección" class="boton_sec">
            </form>
            <p>No tienes cuenta? <a href="<?php echo constant('URL'); ?>registro_seccion">Crea una</a></p>
        </div>
    </div>
</body>

</html>
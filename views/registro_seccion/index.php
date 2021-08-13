<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
</head>
<body>
    <?php require 'views/header_seccion.php';?>

    <div class="fondo_reg_sec"> <div class="filtro_sec"> <!-- Filtro --></div> </div>

    <div class="p_seccion">
        <div id="form_seccion">
            <h1 class="centro">Registrarse</h1>
            <form method="POST" action="<?php echo constant('URL')?>registro_seccion/POSTForm">
                <label> <b>NOMBRE DE USUARIO</b> </label> <br>
                <input type="text" name="nombre_usuario" class="input_texto" required> <br>
                <label> <b> CORREO </b></label> <br>
                <input type="email" name="correo" class="input_texto" required> <br>
                <label> <b>CONTRASEÑA</b> </label> <br>
                <input type="password" name="contrasenia" class="input_texto" required> <br>
                <input type="submit" value="Crear Cuenta" class="boton_sec">
            </form>
            <p>Ya tienes cuenta? <a href="<?php echo constant('URL'); ?>inicio_seccion">Iniciar Sección</a></p>
        </div>
    </div>

</body>
</html>
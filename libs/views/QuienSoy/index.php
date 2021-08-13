<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php require 'views/header.php'; ?>
    <script src="<?php echo constant('URL'); ?>public/js/QuienSoy.js"></script>

    <div class="content-fluid">
        <div class="row">
            <div class="col-md-12">

                <div id="cabecera">
                    <div class="titulo_cab">
                        <h2 class="h2_deco">《</h2>
                        <h2><b><i>Train<span style="color:rgb(200, 26, 200);">Code</span></i></b></h2>
                        <h2 class="h2_deco">》</h2>
                    </div>
                    <div class="filtro_cab"></div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-12 nav_qs">
                <div class="centrar">
                    <ul>
                        <button id="op_1">
                            <li>Integrantes</li>
                        </button>
                        <button id="op_2">
                            <li>Logo</li>
                        </button>
                        <button id="op_3">
                            <li>Objetivos</li>
                        </button>
                        <button id="op_4">
                            <li>Contenidos</li>
                        </button>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row f_integrantes">
            <div class="col-md-5">
                <img src="/Proyecto/proyecto2021/plantilla_proyecto/public/imagenes/foto.png" id="foto_p" class="d-block m-auto">
            </div>
            <div class="col-md-5">

                <div class="integrantes_qs">
                    <h3 id="t_integrantes"><b>Integrantes</b></h3>
                    <b><p>Thomas Ciro Correa</p></b> 
                    <p class="text-left">Soy un joven culminando mis estudios bachillerato aprendiendo programación para dedicarme a ella en un futuro, mis hobbies son los video juegos, armar cubos de rubik, tocar guitarra y la programación.</p>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <div class="logo_qs">
                    <h3 id="t_logo" class="centro"><b>Logo</b></h3>
                    <img src="/Proyecto/proyecto2021/plantilla_proyecto/public/imagenes/Train_Code.png" class="d-block m-auto">
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <div class="objetivos_qs">
                    <h3 id="t_objetivos"><b>Objetivos</b></h3> 
                    <p>Crear una plataforma dedicada a los ejercicios de programación enfocada a múltiples lenguajes, para facilitar el aprendizaje y la práctica de estos y poco a poco mejorar el nivel de programación en las personas principiantes y reforzarlo en avanzados.</p>
                </div>

            </div>
        </div>
        <div class="row cont_qs">
            <div class="col-md-12">

                <div>
                    <h3 id="t_contenidos"><b>Contenidos</b></h3>
                </div>

            </div>
            <div class="col-md-4">
                <div class="sub_cont_qs">
                   <h4>tecnologias</h4>
                    <ul>
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>PHP</li>
                        <li>SQL</li>
                        <li>JavaScript</li>
                    </ul> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="sub_cont_qs">
                    <h4>Librerias</h4>
                    <ul>
                        <li>Jquery</li>
                        <li>bootstrap</li>
                    </ul> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="sub_cont_qs">
                    <h4>estado</h4>
                    <p>El proyecto aun se encuentra en desarrollo tanto la parte Front-end como Back-end Pero tiene hecha su estructura y ciertas funciones realizadas</p>
                </div>
                
            </div>
        </div>

    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/style.css">
    <link rel="stylesheet" href="/Proyecto/proyecto2021/plantilla_proyecto/public/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="http://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body id="b_header">

    <!-- paso 14 -->
    <div class="content-fluid">
        <div class="row">
            <div class="col-md-12">
                <div id="header">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="<?php echo constant('URL'); ?>main">TrainCode</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse dropstart" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="<?php echo constant('URL'); ?>Foro">Foro</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="<?php echo constant('URL'); ?>Perfil">Perfil</a>
                                    </li>
                                    
                                </ul>
                                <div id="buscador">
                                    <form action="<?php echo constant('URL'); ?>Foro" method="GET">
                                        <input type="text" placeholder="Buscar" name="Buscar" id="elemento_buscar"> <button type="submit" id="boton_buscar">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                            </svg>
                                        </button>
                                       
                                    </form>

                                </div>
                                <li class="nav-item dropdown" style="list-style: none;">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                        </svg>
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="<?php echo constant('URL'); ?>cerrar_seccion">Cerrar sección</a></li>
                                            <li><a class="dropdown-item" aria-current="page" href="<?php echo constant('URL'); ?>inicio_seccion">Iniciar sección</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a class="dropdown-item" href="<?php echo constant('URL'); ?>registro_seccion">Crear Cuenta</a></li>
                                        </ul>
                                    </li>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foro</title>
</head>
<body class="h_100">
    <?php require 'views/header.php';?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
            <?php 
                    if (isset($_GET['Buscar'])) {
                        $buscar = $_GET['Buscar'];
                        echo "<h3 class='centro' id='buscado'> Resultados para '".$buscar."'.</h3";
                    }
                    
                ?>
            </div>
        </div>

        <div class="row">
                    
            <div class="col-md-9">
                <div class="principal">
                    <?php
                        // if (isset($_GET['Buscar'])) {
                            $datos = $this->datos; 
                            foreach ($datos as $key => $tablas) {
                                foreach ($tablas as $registros) {
                                    echo "<div Class='vista_pub'>";
                                    echo '<a href="'.constant('URL').'publicacion?id='.$registros['id_pub'].'" ><p class="pub_titulo">'.$registros['titulo'].'</p></a>';
                                    echo "<i>".$registros['nombre_usuario']."</i><br>";
                                    echo "<p class='fech_pub'>".$registros['fecha_pub']."</p>";
                                    echo '</div><hr>'; 
                                }
                            } ?>

                        <div>
                            <a href="<?php echo constant('URL'); ?>publicacion?"></a>
                        </div>
                        <?php  //}?> 
                    
                </div>
            </div>

            <div class="col-md-3">
                <div class="con_seg_1">
                    <p class="comentario_hacer_publicacion">Comparte tu contenido con la comunidad!</p>
                    <a href="<?php echo constant('URL'); ?>Publicar"><button class="boton_hacer_publicacion">hacer una publicación</button></a>
                </div>

                <div class="con_seg_2">
                    
                    <ul class="ul_publicaciones">
                        <h4 class="text-center">Explora</h4>
                        <?php
                        $publi_lat = $this->pub_lat;
                        foreach ($publi_lat as $key => $value) {

                            foreach ($value as $var_key) {
                                echo '<div class="elemento_pub_nav"><a href="'.constant('URL').'publicacion?id='.$var_key['id_pub'].'" ><p class="pub_titulo">'.$var_key['titulo'].'</p></a>';
                                echo "<p class='usuario_nav'><i>".$var_key['nombre_usuario'] . "</i></p>";
                                echo "<p class='fecha_nav'>".$var_key['fecha_pub'] . "</p></div><hr>";
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>  
    <?php require 'views/footer.php';?> 
</body>
</html>
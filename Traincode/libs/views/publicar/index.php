<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php require 'views/header.php'; ?>
    

    <div class="container-fluid">
        <div class="row">

            <div class="col-md-9">
                <div class="principal">
                    <form action="<?php echo constant('URL'); ?>publicar/publicar" method="post">
                        <input type="text" name="titulo" class="textarea_p" placeholder="titulo" required>
                        <textarea placeholder="Descripción" name="ejercicio" class="textarea_p" rows="3" required></textarea><br>
                        <hr>
                        <pre  contenteditable="true" class="pre_codigo"></pre>
                        <input placeholder="Solución" name="solucion" id="code" hidden class="pre_codigo"></input><br>
                        <input type="submit" value="Publicar" class="boton_publicar">
                    </form>
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
    <script src="<?php echo constant('URL'); ?>public/js/codigo.js"></script>
</body>
</html>
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
                <div class="principal mb-0 cont_pub">
                    <div class="pub_main">
                        <?php 
                            $foro = $this->foro[0];
                        ?>
                        <h2> <?php echo $foro['titulo']; ?> </h1> 
                        <div class="pub_n_f">
                        <p class="pub_nombre"><?php echo $foro['nombre_usuario']; ?></p>
                        <p class="pub_fecha"> <?php echo $foro['fecha_pub']; ?> </p>
                        </div> <hr>
                        <p class="pub_desc"> <?php echo $foro['ejercicio'] ?></p>
                        <button class="pub_boton_solucion" id="mostrar"> Mostrar Solución</button>
                        <button class="pub_boton_solucion" id="ocultar"> Oculutar Solución</button>
                        <div id="element_solucion"> <pre><?php echo $foro['solucion']; ?></pre> </div>
                    </div> 
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
        <div class="row">
            <div class="col-md-9">
                <div class="comentarios">
                    <h2 class="titulo_comentario">Comentarios</h1>
                    <form action="<?php echo constant('URL'); ?>publicacion/comentar" method="POST">
                        <div class="coment">
                            <textarea required type="text" class="coment_area" placeholder="Comenta" name="comment"></textarea> 
                            <pre id="coment_codigo" contenteditable="true" class="pre_codigo_coment"></pre>
                            <input placeholder="Solución" name="solucion" id="code" hidden class="pre_codigo"></input>
                            <input type="text" name="id_pub" value="<?php echo $foro['id_pub'];?>" hidden></input>
                            <button class="boton_borrar_coment">Borrar</button>
                            <button class="boton_codigo">Añadir Codigo</button>
                            <button class="boton_cerrar_codigo">Cerrar Codigo</button>
                            <input type="submit" value="Comentar" class="boton_comentar">
                        </div> 
                    </form>
                    <?php $comentarios = $this->comentarios; ?>
                    <div>
                        <?php 
                        foreach ($comentarios as $key => $value) {?>

                            <div class="vista_comentario">
                                <p class="nombre_usu_comentario"><b><?php echo $value['nombre_usuario']; ?></b></p> 
                                <p class="fecha_coment"><?php echo $value['fecha_com']; ?></p>
                                <p class="mb-2"> <?php echo $value['coment']; ?></p>
                                <?php if($value['solucion']!=NULL){ ?>
                                <pre class="solucion_comment"> <?php echo $value['solucion'];?></pre> <?php } ?>
                                <button class="responder_boton" >Responder</button>
                                <button class="cancelar_resp_boton">Cancelar</button>
                                <div class="botones_respuesta">
                                    
                                <?php $respuesta = $this->respuesta;

                                    if ($respuesta != NULL) { 
                                       
                                
                                    foreach ($respuesta as $val_key => $val_resp) {
                                        if ($val_resp['id_com_res'] == $value['id_com']) {
                                ?>
                                    
                                        <div class="respuestas">
                                            <hr>
                                            <p class="usuario_resp"><b><?php echo $val_resp['nombre_usuario']; ?></b></p>
                                            <p class="fecha_resp"> <?php echo $val_resp['fecha_resp']; ?> </p>
                                            <p> <?php echo $val_resp['respuesta']; ?> </p> 
                                            <?php if($val_resp['codigo_resp'] != NULL){ ?>
                                            <pre class="code_resp"> <?php echo $val_resp['codigo_resp']; ?> </pre> <?php } ?> 
                                            <button class="responder_boton" >Responder</button>
                                            <button class="cancelar_resp_boton">Cancelar</button>
                                        </div>
                                    
                                    
                                <?php   }   } echo "</div>";  }?>

                                <div class="responder">
                                    <form action="<?php echo constant('URL'); ?>publicacion/responder" method="post">
                                        <textarea placeholder="Responde" name="respuesta" class="coment_respuesta" required></textarea> <!-- respuesta -->
                                        <pre contenteditable="true" class="resp_codigo_coment"></pre> <!-- codigo -->
                                        <input placeholder="Solución" name="codigo_resp" class="resp_code" hidden class="pre_codigo"></input>
                                        <input type="text" name="id_com_res" hidden value="<?php echo $value['id_com'] ?>" required></input> <!-- id_com -->
                                        <input type="text" name="id_usu_res" hidden value="<?php echo $value['id_usuario'] ?>" required></input>
                                        <button class="borrar_respuesta">Borrar</button>
                                        <button class="cerrar_codigo_resp">Cerrar Codigo</button>
                                        <button class="add_code_resp">Añadir Codigo</button>
                                        <input type="submit" class="boton_responder" value="Responder">
                                    </form>
                                </div>
                                
                                <hr>
                                
                            </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require 'views/footer.php';?>
    <script src="<?php echo constant('URL'); ?>public/js/mostrar_solucion.js"></script>
    <script src="<?php echo constant('URL'); ?>public/js/cargar.js"></script>
</body>

</html>
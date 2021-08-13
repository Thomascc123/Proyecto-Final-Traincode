<div class="col-md-3">
    <div class="con_seg_1">
        <ul>
            <li></li>
            <li></li>
        </ul>
    </div>

    <div class="con_seg_2">
        <button><a href="<?php echo constant('URL'); ?>Publicar">hacer una publicación</a></button>
        <ul>
        <?php
        $publi_lat = $this->pub_lat;
                            foreach ($publi_lat as $key => $value) {
                                
                                foreach($value as $var_key){
                                    echo $var_key['titulo']."<br>";
                                    echo $var_key['nombre_usuario']."<br>";
                                    echo $var_key['fecha_pub']."<br>";
                                }
                            }
        ?>
        </ul>
    </div>
</div>
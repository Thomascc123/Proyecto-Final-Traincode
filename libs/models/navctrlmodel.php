<?php 
class navctrlModel extends Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function lateral(){
        $publicaciones_lat = [];

        $sql = 'SELECT p.id_pub, p.titulo, p.fecha_pub, p.id_usu_pub, u.id_usuario, u.nombre_usuario
                FROM publicacion p, usuario u
                WHERE u.id_usuario = p.id_usu_pub
                ORDER BY rand() LIMIT 2';
        
        $conectar = $this->db->conectar();
        $resultado = $conectar->query($sql);
        
        while($fila = $resultado->fetchALL(\PDO::FETCH_ASSOC)){
            array_push($publicaciones_lat , $fila);
        }
        return $publicaciones_lat;
    }
}

?>
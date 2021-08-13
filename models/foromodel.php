<?php
class foroModel extends Model{

        public function __construct(){
            parent::__construct();
        }

        public function Consulta($Buscado){
            $datos = [];
            try {
                $sql = "SELECT p.id_pub, p.ejercicio, p.fecha_pub ,p.titulo ,u.id_usuario ,u.nombre_usuario
                    FROM publicacion p, usuario u
                    WHERE u.id_usuario = p.id_usu_pub
                    AND (p.ejercicio LIKE '%".$Buscado."%'
                    OR p.titulo LIKE '%".$Buscado."%'
                    OR p.solucion LIKE '%".$Buscado."%')";
                
                // $param = ['buscar' => "%$Buscado%"];
                
                $conectar = $this->db->conectar();
                $resultado = $conectar->query($sql);
                // $resultado->execute($param);
                while($fila = $resultado->fetchALL(\PDO::FETCH_ASSOC)){
                    array_push($datos , $fila);
                }
                return $datos;
            }catch (PDOException $e) {
                throw new \PDOException($e->getMessage(), (int)$e->getCode());
                print_r("Error connection: ". $e->getMessage());
                return $e->getMessage();
            }
        }
        public function general(){
            $datos = [];
            $sql = "SELECT p.id_pub, p.ejercicio, p.fecha_pub ,p.titulo ,u.id_usuario ,u.nombre_usuario
                    FROM publicacion p, usuario u
                    WHERE u.id_usuario = p.id_usu_pub
                    ORDER BY p.fecha_pub DESC";
            $conectar = $this->db->conectar();
            $resultado = $conectar->query($sql);
            
            while($fila = $resultado->fetchALL(\PDO::FETCH_ASSOC)){
                array_push($datos , $fila);
            }
            return $datos;
            
        }
        
    }
?>

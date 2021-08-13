<?php 
    class publicacionModel extends Model{
        public function __construct()
        {
            parent::__construct();
        }

        public function foro($param){
            $datos = [];
            try {
            
            $sql = "SELECT p.id_pub, p.ejercicio, p.fecha_pub ,p.titulo ,p.solucion ,u.id_usuario ,u.nombre_usuario
                FROM publicacion p, usuario u
                WHERE u.id_usuario = p.id_usu_pub
                AND p.id_pub = :id_pub ";
            
            
            $query = $this->db->conectar();
            $resultado = $query->prepare($sql);
            $resultado->execute(['id_pub' => $param]);
            while($fila = $resultado->fetch(PDO::FETCH_ASSOC)){
                array_push($datos , $fila);
            }

            return $datos;
            }catch (PDOException $e) {
                throw new \PDOException($e->getMessage(), (int)$e->getCode());
                print_r("Error connection: ". $e->getMessage());
                return $e->getMessage();
            }
        
        }
        public function comentario($datos){
            $sql ="INSERT INTO comentarios(id_pub_com, id_usu_com, coment, solucion) 
                    VALUES (:id_pub_com, :id_usu_com, :coment, :solucion )";
            
            $param =['id_pub_com' => $datos['id_pub'],
                    'id_usu_com' => $datos['id_u'],
                    'coment' => $datos['comment'],
                    'solucion' => $datos['solucion']];
            
            $conectar = $this->db->conectar();
            $conectar->beginTransaction();

            try {
                $resultado = $conectar->prepare($sql);
                $resultado->execute($param);
                $conectar->commit();
                return true;
            } catch (\Throwable $e) {
                throw new \PDOException($e->getMessage(), (int)$e->getCode());
                print_r("Error connection: ". $e->getMessage());
                return $e->getMessage();
            }            
                  
        }
        public function mostrar_comentario($id_pub){
            $ver_comentarios = [];
            try {
                $sql = "SELECT c.id_pub_com, c.id_usu_com, c.coment, c.solucion, c.fecha_com, c.id_com, p.id_pub, u.nombre_usuario, u.id_usuario
                FROM comentarios c, publicacion p, usuario u
                WHERE c.id_pub_com = p.id_pub
                AND c.id_usu_com = u.id_usuario
                AND p.id_pub = :id_pub";

                $param = ['id_pub' => $id_pub];

                $consulta = $this->db->conectar();
                $resultado =  $consulta->prepare($sql);
                $resultado->execute($param);

                while($a = $resultado->fetch()){
                    array_push($ver_comentarios, $a);                    
                }
                return $ver_comentarios;
            } catch (\Throwable $e) {
                throw new \PDOException($e->getMessage(), (int)$e->getCode());
                print_r("Error connection: ". $e->getMessage());
                return $e->getMessage();
            }

        }
        public function respuesta($dat_r){
            $sql = 'INSERT INTO respuesta(id_com_res, id_usu_res, respuesta, codigo_resp) 
            VALUES (:id_com_res, :id_usu_res, :respuesta, :codigo_resp)';

            $param = ['id_com_res' => $dat_r['id_com_res'],
                    'id_usu_res' => $dat_r['id_usu_res'],
                    'respuesta' => $dat_r['respuesta'],
                    'codigo_resp' => $dat_r['codigo_resp']];

            $conectar = $this->db->conectar();
            $conectar->beginTransaction();

            try {
                $resultado = $conectar->prepare($sql);
                $resultado->execute($param);
                $conectar->commit();
                return true;
            } catch (\Throwable $e) {
                throw new \PDOException($e->getMessage(), (int)$e->getCode());
                print_r("Error connection: ". $e->getMessage());
                return $e->getMessage();
            }
            
        }
        public function mostrar_respuesta($id_pub){
            $ver_respuesta = [];
            $sql= 'SELECT r.id_com_res, r.id_usu_res, r.respuesta, r.codigo_resp, r.fecha_resp, c.id_com,c.id_pub_com, u.id_usuario, u.nombre_usuario
                    FROM respuesta r, comentarios c, usuario u
                    WHERE r.id_com_res = c.id_com
                    AND u.id_usuario = r.id_usu_res
                    AND c.id_pub_com = :id_pub';

            $param = ['id_pub' => $id_pub];

            try {
                $consulta = $this->db->conectar();
                $resultado =  $consulta->prepare($sql);
                $resultado->execute($param);

                while($a = $resultado->fetch()){
                    array_push($ver_respuesta, $a);                 
                }
                return $ver_respuesta;
            } catch (\Throwable $e) {
                throw new \PDOException($e->getMessage(), (int)$e->getCode());
                print_r("Error connection: ". $e->getMessage());
                return $e->getMessage();
            }
        }
    }
?>
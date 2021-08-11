<?php 
    class perfilModel extends Model{
        public function __construct()
        {
            parent::__construct();
        }

        public function desc($id_usu){
            $datos_desc = [];

            $sql = 'SELECT p.id_perfil, p.descripcion, u.id_usuario, u.nombre_usuario
                    FROM perfil p, usuario u
                    WHERE p.id_perfil = :id_usu
                    AND u.id_usuario = p.id_perfil';
                
            $param = ['id_usu' => $id_usu];

            try {
                $consulta = $this->db->conectar();
                $resultado =  $consulta->prepare($sql);
                $resultado->execute($param);

                while($a = $resultado->fetch()){
                    array_push($datos_desc, $a);                 
                }
                return $datos_desc;
            } catch (\Throwable $e) {
                throw new \PDOException($e->getMessage(), (int)$e->getCode());
                print_r("Error connection: ". $e->getMessage());
                return $e->getMessage();
            }
        }

        public function descripcion_usuario($id_perfil){
            $sql = 'INSERT INTO `perfil`(`id_perfil`) 
            VALUES (:id_perfil)';

            $param = ['id_perfil' => $id_perfil];
            $query = $this->db->conectar();
            
            $query->beginTransaction();
    
            try{
                $result = $query->prepare($sql);
                $result->execute($param);
    
                $query->commit();
    
                return true;
            }catch (PDOException $e) {
                throw new \PDOException($e->getMessage(), (int)$e->getCode());
                print_r("Error connection: ". $e->getMessage());
                return $e->getMessage();
            }
        }

        public function publicaciones_usuario($id_usuario){
            $publicaciones_usu = [];

            $sql='SELECT p.id_pub, p.titulo, p.fecha_pub, p.id_usu_pub, u.id_usuario
                FROM publicacion p, usuario u
                WHERE u.id_usuario = p.id_usu_pub
                AND u.id_usuario = :id_usuario
                ORDER BY p.fecha_pub DESC';

            $param = ['id_usuario' => $id_usuario];

            try {
                $consulta = $this->db->conectar();
                $resultado =  $consulta->prepare($sql);
                $resultado->execute($param);

                while($a = $resultado->fetch()){
                    array_push($publicaciones_usu, $a);                 
                }
                return $publicaciones_usu;
            } catch (\Throwable $e) {
                throw new \PDOException($e->getMessage(), (int)$e->getCode());
                print_r("Error connection: ". $e->getMessage());
                return $e->getMessage();
            }
        }

        public function editar_descripcion($desc){
            $sql = 'UPDATE perfil
                    SET descripcion = :descripcion
                    WHERE id_perfil = :id_perfil';
            
            $param = ['descripcion' => $desc['descripcion'],
                    'id_perfil' => $desc['id_perfil']];

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
    }

?>
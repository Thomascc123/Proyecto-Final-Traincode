<?php 
class registro_seccionModel extends Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function insertar($datos){
        $sql = 'INSERT INTO usuario (nombre_usuario,correo,codigo,contrasenia)
        values (:nombre_usuario,:correo,:codigo,:contrasenia)';

        $query = $this->db->conectar();
        // generar una transaccación en la base de datos. Representan cualquier cambio en la base de datos 
        // Proporcionando secuencias de trabajo fiables y aislamiento entre programas accediendo a la vez a la base de datos
        $query->beginTransaction();

        try{
            //insert tala 1
            $result = $query->prepare($sql);
            $result->execute(['nombre_usuario'=>$datos['nombre_usuario'],
                              'correo'=>$datos['correo'],
                              'codigo'=>$datos['codigo'],
                              'contrasenia'=>$datos['contrasenia']]);

            // control en las transacciones SQL, guardar los cambios.
            $query->commit();

            return true;
        }catch (PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
            print_r("Error connection: ". $e->getMessage());
            return $e->getMessage();
        }

    }

    public function user($dato){
        try{
            $query = $this->db->conectar()->prepare(
                'SELECT correo, contrasenia, id_usuario, codigo
                FROM usuario 
                WHERE correo = :usuario'
            );
            $query->execute(['usuario'=>$dato]); 
            return $query->fetch();
        }catch (PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
            print_r("Error connection: ". $e->getMessage());
            return $e->getMessage();
        }
    }
}
?>
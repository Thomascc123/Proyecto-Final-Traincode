<?php 
class ContactoModel extends Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function insertar($datos){
        $sql = 'INSERT INTO dimension_cliente (nombre,correo,telefono,mensaje)
        values (:nombre,:correo,:telefono,:mensaje)';

        $query = $this->db->conectar();
        // generar una transaccación en la base de datos. Representan cualquier cambio en la base de datos 
        // Proporcionando secuencias de trabajo fiables y aislamiento entre programas accediendo a la vez a la base de datos
        $query->beginTransaction();

        try{
            //insert tala 1
            $result = $query->prepare($sql);
            $result->execute(['nombre'=>$datos['nombre'],
                              'correo'=>$datos['correo'],
                              'telefono'=>$datos['telefono'],
                              'mensaje'=>$datos['mensaje']]);

            // control en las transacciones SQL, guardar los cambios.
            $query->commit();

            return true;
        }catch (PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
            print_r("Error connection: ". $e->getMessage());
            return $e->getMessage();
        }
    }
}
?>
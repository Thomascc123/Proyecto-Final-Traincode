<?php
    class inicio_seccionModel extends Model{
        public function __construct()
        {
            parent::__construct();
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
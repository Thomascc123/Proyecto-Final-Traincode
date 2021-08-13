<?php
class publicarModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insertar($datos){
        $sql = 'INSERT INTO `publicacion`(`ejercicio`, `solucion`, `id_usu_pub`,`titulo`) 
        VALUES (:ejercicio ,:solucion ,:id_u ,:titulo)';

        $param = ['ejercicio' => $datos['ejercicio'],
                'solucion' => $datos['solución'],
                'id_u' => $datos['id_u'],
                'titulo' => $datos['titulo']
                ];
        $conectar = $this->db->conectar();
        $conectar->beginTransaction();

        try{
            $resultado = $conectar->prepare($sql);
            $resultado->execute($param);
            $conectar->commit();
            return true;
        }catch (PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
            print_r("Error connection: ". $e->getMessage());
            return $e->getMessage();
        }
    }
}

<?php

class Database {

  private $host;
  private $db;
  private $user;
  private $password;
  private $charset;

  public function __construct(){
      //El constructor acepta parámetros para especificar el origen de la base de datos
        $this->host     = constant('HOST'); //DNS
        $this->db       = constant('DB'); //DNS
        $this->user     = constant('USER'); //usuario
        $this->password = constant('PASSWORD'); // constraseña
        $this->charset  = constant('CHARSET'); //codificación del lenguaje
  }

  public function conectar(){
    try{
        $connection = "mysql:host=".$this->host.";dbname=".$this->db.";charset=".$this->charset;
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_EMULATE_PREPARES => false, 
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]; //opciones para la entrega de datos de mysql, dan formato a stdclass

        $pdo = new PDO($connection,$this ->user, $this->password,$options);
        //conectar con pdp 

        return $pdo;
    }catch(PDOException $error){
        print "¡Error de conexión!: " . $error->getMessage() . "<br/>";
    }
  }
}


 ?>

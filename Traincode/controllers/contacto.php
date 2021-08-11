<?php 
class Contacto extends Controller {
    function __construct()
    {
        parent::__construct();
        $this->view->render('contacto/index');
    }

    function mempty($array)
    {
        foreach($array as $value)
            if(!empty($value))
                continue;
            else
                return false;
        return true;
    }

    function getForm()
    {
        if (isset($_GET['nombre'],$_GET['email'],$_GET['mensaje'])) {
            $nombre=$_GET['nombre'];
            $email=$_GET['email'];
            $mensaje=$_GET['mensaje'];
            $telefono=isset($_GET['telefono']) ? $_GET['telefono']:null;

            $datos = array('nombre'=>$nombre,'correo'=>$email,'telefono'=>$telefono,'mensaje'=>$mensaje);

            if ($this->mempty($datos)) {
                $this->model->insertar($datos);
                echo '<div class="alert alert-success" role="alert">Envío exitoso</div>';
            
            }else {
                echo '<div class="alert alert-danger" role="alert">Ocurrió un error, por favor intenta otra vez</div>';
            }
            
        }
    }
}
?>
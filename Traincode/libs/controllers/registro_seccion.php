<?php 
class registro_seccion extends Controller {
    function __construct()
    {
        parent::__construct();
    }

    /*function render(){
        $rol = isset($_SESSION['rol']) ? $_SESSION['rol'] : null;
        $id_u = isset($_SESSION['id_u']) ? $_SESSION['id_u'] : null;
        if($rol!=null and  $id_u!=null){
            if ($rol == 'USER') {
                $direccion = 'Perfil';

            }
            header('Location: '.constant('URL').$direccion);
            exit;
        }else{
            $this->view->render('inicio_seccion/index');
        }
        
    }*/

    function mempty($array)
    {
        foreach($array as $value)
            if(!empty($value))
                continue;
            else
                return false;
        return true;
    }

    function POSTForm()
    {
        if (isset($_POST['nombre_usuario'],$_POST['correo'],$_POST['contrasenia'])) {
            $nombre_usuario=$_POST['nombre_usuario'];
            $correo=$_POST['correo'];
            $contrasenia=md5($_POST['contrasenia']);
            $codigo='USER';

            $datos = array('nombre_usuario'=>$nombre_usuario,'correo'=>$correo,'contrasenia'=>$contrasenia, 'codigo'=>$codigo);

            if ($this->mempty($datos)) {
                $this->model->insertar($datos);
                echo '<div class="alert alert-success" role="alert">Envío exitoso</div>';
            
            }else {
                echo '<div class="alert alert-danger" role="alert">Ocurrió un error, por favor intenta otra vez</div>';
            }
            
        }
    }

    /*function ingreso(){
        $correo = $_POST['correo'];
        $contrasenia = md5($_POST['contrasenia']);
        //echo $contrasenia;
        $datos = $this->buscar($correo);
        //print_r($datos);
        if ($datos==null) {
            echo 'El usuario no existe por favor registrese';
            

        }else {
            if ($contrasenia==$datos['contrasenia']) {
                $id_usuario=$datos['id_usuario'];
                session_start();
                
                //session_regenerate_id(true);
                $_SESSION['id_u'] = $id_usuario;
                $_SESSION['rol'] = $datos['codigo'];
                $_SESSION['user'] = $correo;
                session_write_close();
                $this->render();
                echo $_SESSION['user'];
            }else {
                echo 'error';
            }
        }
        
    }*/

    /*function buscar($correo){
        $usuario = $this->model->user($correo);
        if($usuario == []){
            return null;
        }else{
            return $usuario;
        }

    }*/
    function render(){
        $this->view->render('registro_seccion/index');
    }
}
?>
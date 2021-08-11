<?php 
    class inicio_seccion extends Controller {
        function __construct()
        {
            parent::__construct();
        }

        function ingreso(){
            $correo = $_POST['correo'];
            $contrasenia = md5($_POST['contrasenia']);
            $datos = $this->buscar($correo);
            if($datos==null) {
                echo '<script type="text/javascript">
                alert("El usuario no existe por favor registrese")
                window.location.href="'.constant('URL').'inicio_seccion"
                </script>';
            }else {
                if ($contrasenia==$datos['contrasenia']) {
                    session_start();
                    $id_usuario=$datos['id_usuario'];
                    $_SESSION['id_u'] = $id_usuario;
                    $_SESSION['rol'] = $datos['codigo'];
                    $_SESSION['user'] = $correo;
                    if ($_SESSION['rol']=='USER') {
                        header('Location: '.constant('URL').'main');
                    }
                }else {
                    echo'<script type="text/javascript">
                alert("La contraseña es incorrecta")
                window.location.href="'.constant('URL').'inicio_seccion"
                </script>';

                }
            }
            
        }

        function buscar($correo){
            $usuario = $this->model->user($correo);
            if($usuario == []){
                return null;
            }else{
                return $usuario;
            }
    
        }
        function render(){
            $this->view->render('inicio_seccion/index');
        }
        
    }
?>
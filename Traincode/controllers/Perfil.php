<?php 
    class Perfil extends Controller {
        private $id_u;
        private $rol;

        function __construct()
        {
            parent::__construct();
            session_start();
            $this->id_u = $_SESSION['id_u'];
            $this->rol = $_SESSION['rol'];
            session_write_close();
            
        }

        function render(){
            if (isset($this->id_u)) {
                require 'controllers/navctrl.php';
                $publicaciones_lat = new navctrl;
                $publicaciones_lat->cargarModelo("navctrl");
                $this->view->pub_lat = $publicaciones_lat->publicaciones();
                $this->view->pub_usu = $this->model->publicaciones_usuario($this->id_u);
                $this->view->descripcion = $this->model->desc($this->id_u);
                if ($this->view->descripcion == NULL) {
                    $this->model->descripcion_usuario($this->id_u);
                    $this->view->descripcion = $this->model->desc($this->id_u);
                }
                $this->view->render('Perfil/index');
            }else{
                header('Location:'.constant('URL').'inicio_seccion');
            }
        }

        

        function edit_desc(){
            if ($_POST) {
                $descripcion = $_POST['descripcion'];
                $id_perfil = $this->id_u;

                $datos =['descripcion' => $descripcion,
                        'id_perfil' => $id_perfil];
                
                $this->model->editar_descripcion($datos);
            }

        }
        
    }
?>
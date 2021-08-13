<?php 
    class publicar extends Controller {
        private $id_u;
        private $rol;

        function __construct()
        {
            parent::__construct();
            session_start();
            $this->id_u = $_SESSION['id_u'];
            session_write_close();
            
        }
        function publicar(){
            if ($_POST) {
                $titulo = $_POST['titulo'];
                $ejercicio = $_POST['ejercicio'];
                $solucion = $_POST['solucion'];
                
                $datos=['titulo' => $titulo,
                        'ejercicio' => $ejercicio,
                        'solución' => $solucion,
                        'id_u' => $this->id_u
                ];
                $this->model->insertar($datos);
            }
        }
        function render(){
            if (isset($this->id_u)){
                require 'controllers/navctrl.php';
                $publicaciones_lat = new navctrl;
                $publicaciones_lat->cargarModelo("navctrl");
                $this->view->pub_lat = $publicaciones_lat->publicaciones();
                $this->view->render('publicar/index');
            }else{
                header('Location:'.constant('URL').'inicio_seccion');
            }
        }
    }
?>
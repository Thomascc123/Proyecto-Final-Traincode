<?php 
    class publicacion extends Controller {
        private $id_u;

        function __construct()
        {
            parent::__construct();
            session_start();
            if (isset($_SESSION['id_u'])) {
                $this->id_u = $_SESSION['id_u'];
            }
            session_write_close();
        }
        function render(){
            $this->id = $_GET['id'];
            $this->view->id = $this->id;
            $this->view->foro = $this->model->foro($this->id);
            $this->view->comentarios = $this->model->mostrar_comentario($this->id);
            $this->view->respuesta = $this->model->mostrar_respuesta($this->id);
            require 'controllers/navctrl.php';
            $publicaciones_lat = new navctrl;
            $publicaciones_lat->cargarModelo("navctrl");
            $this->view->pub_lat = $publicaciones_lat->publicaciones();
            $this->view->render('Publicacion/index'); 
        }
        function comentar(){
            if (isset($this->id_u)) {
                if (isset($_POST) and isset($_POST['id_pub']) ) {
                    $id_pub = $_POST['id_pub'];
                    $solucion = $_POST['solucion'];
                    $comentario = $_POST['comment'];
    
                    $datos = [ 'id_pub' => $id_pub,
                            'solucion'  => $solucion,
                            'comment' =>  $comentario,
                            'id_u' =>$this->id_u];
                        
                    $this->model->comentario($datos);
                }
            }else{
                header('Location:'.constant('URL').'inicio_seccion');
            }
        }
        function responder(){
            if (isset($this->id_u)) {
                if (isset($_POST) AND isset($_POST['id_com_res']) AND isset($_POST['id_usu_res'])) {
                    $respuesta = $_POST['respuesta'];
                    $codigo = $_POST['codigo_resp'];
                    $id_coment = $_POST['id_com_res'];
                    $id_usu = $_POST['id_usu_res'];

                    $datos_R = ['respuesta' => $respuesta,
                                'codigo_resp' => $codigo,
                                'id_com_res' => $id_coment,
                                'id_usu_res' => $id_usu];

                    $this->model->respuesta($datos_R);
                    echo'<script type="text/javascript">
                    window.location.href="'.constant('URL').'publicacion?id='.$this->id.'
                    </script>';
                }
            }else{
                header('Location:'.constant('URL').'inicio_seccion');
            }
        }
    }
?>
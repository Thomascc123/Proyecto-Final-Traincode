<?php
class Foro extends Controller
{
    function __construct()
    {
        parent::__construct();
    }
    // function buscar()
    // {
    // }
    function render()
    {
        require 'controllers/navctrl.php';
        $publicaciones_lat = new navctrl;
        $publicaciones_lat->cargarModelo("navctrl");
        $this->view->pub_lat = $publicaciones_lat->publicaciones();
        
        if (isset($_GET['Buscar'])) {
            $Buscado = $_GET['Buscar'];
            $consulta = $this->model->Consulta($Buscado);

            $this->view->datos = $consulta;
        }else {
            $consulta = $this->model->general();
            $this->view->datos = $consulta;
        }
        $this->view->render('Foro/index');
    }
}

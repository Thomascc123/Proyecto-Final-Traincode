<?php 
class Controller{

    function __construct()
    {
        $this->view = new View;
        date_default_timezone_set('America/Bogota');
        setlocale(LC_ALL, "Spanish_Colombia");
    }

    function cargarModelo($modelo)
    {
        $url = 'models/'.$modelo.'model.php'; //nomenclatura de los archivos a cargar

        if (file_exists($url)) {
            require $url;

            $modelName = $modelo.'Model';
            $this->model = new $modelName(); // variable privada creada solamente para esta clase
        }
    }

    
}
?>
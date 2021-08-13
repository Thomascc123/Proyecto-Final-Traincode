<?php 
    require_once 'controllers/errores.php';
    class App{
        function __construct()
        {

            $url = isset($_GET['url']) ? $_GET['url']:null;

            $url = rtrim($url, '/'); // Elimina el parámetro que no se necesita en la url /
            $url = explode('/', $url); //Busque el separador dentro de url

            // Puedo tener el control de los parámetros del controlador y los metodos a partir de la url obtenida
            //var_dump($url);

            if (empty($url[0])) {
                $archivoController='controllers/main.php';
                require_once $archivoController;
                $controller = new Main();
                $controller->cargarModelo('main');
                $controller->render();
                return false;
            }

            //asigno en una variable el controlador a llamar
            $archivoController='controllers/'.$url[0].'.php';

            //llamo al controlador y hago una validación del archivo controlador
            if (file_exists($archivoController)) {
                require_once $archivoController;
                $controller = new $url[0];
                $controller->cargarModelo($url[0]);

                //valido que existe el método
                if (isset($url[1])) {
                    $controller->{$url[1]}();
                }else {
                    $controller->render();
                }
            }else{
                //controlador para manejar los errores
                $controller = new Errores();
            }
        }
    }
?>
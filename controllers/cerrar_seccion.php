<?php 
    class cerrar_seccion extends Controller {
        function __construct()
        {
            parent::__construct();
            session_start();
            $_SESSION = [];
            if (isset($_COOKIE[session_name()])) {
                setcookie(session_name(), '', time() - 48000, '/');
            }

            session_destroy();
            header('Location:' .constant('URL').'main');
            
        }
    }
?>
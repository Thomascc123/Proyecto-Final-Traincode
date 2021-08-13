<?php 
class Main extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function saludo()
    {
        echo 'Ejecutaste el método saludo';
    }

    function render(){
        $this->view->render('main/index');
    }
}
?>
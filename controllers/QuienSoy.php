<?php 
    class QuienSoy extends Controller {
        function __construct()
        {
            parent::__construct();  
        }
        function render(){
            $this->view->render('QuienSoy/index');
        }
    }
?>
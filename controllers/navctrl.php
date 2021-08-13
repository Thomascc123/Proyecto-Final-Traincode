<?php 
class navctrl extends Controller{

    function __construct()
    {
        parent::__construct();
    }
    
    function publicaciones(){
        return $this->model->lateral();
        // $this->view->pub_lat = $this->model->lateral();
        
    }
}
?>
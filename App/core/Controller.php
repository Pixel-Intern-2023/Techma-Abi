<?php 

class Controller{
    
    function view($view , $data = []){
        require_once '../App/views/' . $view . '.php';
    }

    function model($model){
        require_once '../App/models/' . $model . '.php';
        return new $model ;
    }

    function checkLogin() {
        if (!isset($_SESSION['user'])) {
            Flasher::setFlash('Failed','To Enter','error');
            header('location: ' . BASEURL . '/Auth');
            exit();
        }
    }


}

?>
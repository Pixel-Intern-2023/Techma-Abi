<?php 
ini_set("display_errors", "1") ;

class Dashboard extends Controller{

    function index(){

        $data = [
            'title' => 'Home',
            'employe' => $this->model('employe_model')->getEmployeCount(),
            'working' => $this->model('employe_model')->getWorkingCount(),
            'fired' => $this->model('employe_model')->getFiredCount(),
            'admin' => $this->model('admin_model')->getAdminCount()
        ];
        $this->checkLogin();
        $this->view('templates/header' , $data);
        $this->view('templates/sidebar' , $data);
        $this->view('dashboard/index', $data);
        $this->view('templates/footer');
    }

}
<?php 
ini_set("display_errors", "1") ;

class Dashboard extends Controller{

    function index(){

        $data = [
            'title' => 'Dashboard',
            'employe' => $this->model('Employe_model')->getEmployeCount(),
            'working' => $this->model('Employe_model')->getWorkingCount(),
            'fired' => $this->model('Employe_model')->getFiredCount(),
            'admin' => $this->model('Admin_model')->getAdminCount()
        ];
        $this->checkLogin();
        $this->view('templates/header' , $data);
        $this->view('templates/sidebar');
        $this->view('dashboard/index', $data);
        $this->view('templates/footer');
    }

}
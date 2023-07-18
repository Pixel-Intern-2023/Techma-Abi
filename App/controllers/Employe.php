<?php

ini_set("display_errors", "1") ;

class Employe extends Controller{

    function index(){
        $data = [
            'title' => 'Home Page',
            'employe' => $this->model('employe_model')->getEmployeJoin()
        ];
        $this->checkLogin();
        $this->view('templates/header' , $data);
        $this->view('templates/sidebar' , $data);
        $this->view('employe/index', $data);
        $this->view('templates/modal_employe');
        $this->view('templates/footer');
    }

    function detail($id){

        $data = [
            'judul' => "Detail Page",
            'employe' => $this->model('Employe_model')->getEmployeJoinId($id)
        ];
        $this->checkLogin();
        $this->view('templates/header' , $data);
        $this->view('templates/sidebar' , $data);
        $this->view('employe/detail', $data);
        $this->view('templates/modal_employe', $data);
        $this->view('templates/footer');

    }


    function add(){

        if ($this->model('Employe_model')->addEmploye($_POST,$_FILES) > 0) {
            Flasher::setFlash('Successfully','Added','success');
            header('location:' . BASEURL . '/employe');
            exit;
        }else {
            Flasher::setFlash('Failed','To Add','error');
            header('location:' . BASEURL . '/employe');
            exit;
        }
    }

    function delete($id){

        if ($this->model('employe_model')->deleteEmploye($id) > 0) {
            Flasher::setFlash('Successfully','Deleted','success');
            header('location:' . BASEURL . '/employe');
            exit;
        }else {
            Flasher::setFlash('Failed','To Delete','error');
            header('location:' . BASEURL . '/employe');
            exit;
        }

    }

    function getUpdate(){
        echo json_encode($this->model('employe_model')->getEmployeById($_POST['id']));
    }

    function update(){

        if ($this->model('employe_model')->updateEmploye($_POST,$_FILES) > 0) {
            Flasher::setFlash('Successfully','Changed','success');
            header('location:' . BASEURL . '/employe');
            exit;
        }else {
            Flasher::setFlash('Failed','To Change','error');
            header('location:' . BASEURL . '/employe');
            exit;
        }

    }

    function fire($id)
    {
        if ($this->model('employe_model')->fireEmploye($id) > 0) {
            Flasher::setFlash('Successfully','Fired','success');
            header('location:' . BASEURL . '/employe/detail/' . $id);
            exit;
        }else {
            Flasher::setFlash('Failed','To Fire','error');
            header('location:' . BASEURL . '/employe/detail' . $id);
            exit;
        }
    }

    function find(){

        $data=[
            'judul' => "Search",
            'employe' => $this->model('employe_model')->findEmploye()
        ];
        $this->view('templates/header' , $data);
        $this->view('templates/sidebar' , $data);
        $this->view('employe/index', $data);
        $this->view('templates/footer');

    }

   

}

?>
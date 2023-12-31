<?php

ini_set("display_errors", "1") ;

class Employe extends Controller{

    function index(){
        $data = [
            'title' => 'Employe',
            'employe' => $this->model('Employe_model')->getEmployeJoin(),
            'occupation' => $this->model('Employe_model')->getOccupationList()
        ];
        $this->checkLogin();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('employe/index', $data);
        $this->view('templates/modal_employe' , $data);
        $this->view('templates/footer');
    }

    function detail($id){

        $data = [
            'title' => 'Employe Detail',
            'employe' => $this->model('Employe_model')->getEmployeJoinId($id),
            'occupation' => $this->model('Employe_model')->getOccupationList()
        ];
        $this->checkLogin();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('employe/detail', $data);
        $this->view('templates/modal_employe' , $data);
        $this->view('templates/footer');

    }


    function find(){

        $data=[
            'title' => 'Employe',
            'employe' => $this->model('Employe_model')->findEmploye(),
            'occupation' => $this->model('Employe_model')->getOccupationList()
        ];
        $this->checkLogin();
        $this->view('templates/header',$data);
        $this->view('templates/sidebar');
        $this->view('employe/index', $data);
        $this->view('templates/modal_employe' , $data);
        $this->view('templates/footer');

    }


    function add(){

        if ($this->model('Employe_model')->addEmploye($_POST,$_FILES) > 0) {
            Flasher::setFlash('Successfully Added Employe','success');
            header('location:' . BASEURL . '/Employe');
            exit;
        }else {
            Flasher::setFlash('Failed To Add Employe','error');
            header('location:' . BASEURL . '/Employe');
            exit;
        }
    }

    function delete($id){

        if ($this->model('Employe_model')->deleteEmploye($id) > 0) {
            Flasher::setFlash('Successfully Deleted Employe','success');
            header('location:' . BASEURL . '/Employe');
            exit;
        }else {
            Flasher::setFlash('Failed To Delete Employe','error');
            header('location:' . BASEURL . '/Employe');
            exit;
        }

    }

    function getUpdate(){
        echo json_encode($this->model('Employe_model')->getEmployeById($_POST['id']));
    }

    function update(){

        if ($this->model('Employe_model')->updateEmploye($_POST,$_FILES) > 0) {
            Flasher::setFlash('Successfully Changed','success');
            header('location:' . $_SERVER['HTTP_REFERER']);
            exit;
        }else {
            Flasher::setFlash('Failed To Change','error');
            header('location:' . $_SERVER['HTTP_REFERER']);
            exit;
        }

    }

    function fire($id)
    {
        if ($this->model('Employe_model')->fireEmploye($id) > 0) {
            Flasher::setFlash('Successfully Fired Employe','success');
            header('location:' . BASEURL . '/Employe');
            exit;
        }else {
            Flasher::setFlash('Failed To Fire Employe','error');
            header('location:' . BASEURL . '/Employe');
            exit;
        }
    }
   

}

?>
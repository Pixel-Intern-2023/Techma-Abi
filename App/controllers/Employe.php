<?php

ini_set("display_errors", "1") ;

class Employe extends Controller{

    function index(){
        $data['title'] = "Home";
        $data['employe'] = $this->model('employe_model')->getAllemploye();
        $this->view('templates/header' , $data);
        $this->view('templates/sidebar');
        $this->view('home/index', $data);
        $this->view('templates/footer');

    }

    function detail($id){

        $data['judul'] = "Halaman Detail Siswa";
        $data['siswa'] = $this->model('Siswa_model')->getSiswaById($id);
        $this->view('templates/header' , $data);
        $this->view('siswa/detail', $data);
        $this->view('templates/footer');

    }

    function add(){

        if ($this->model('Employe_model')->addEmploye($_POST,$_FILES) > 0) {
            Flasher::setFlash('Successfully','Added','success');
            header('location:' . BASEURL . '/employe');
            exit;
        }else {
            Flasher::setFlash('Failed','To Add','error');
            header('location:' . BASEURL . '/error');
            exit;
        }
    }

    function delete($id){


        if ($this->model('employe_model')->deleteEmploye($id) > 0) {
            Flasher::setFlash('Successfully','Deleted','success');
            header('location:' . BASEURL . '/employe');
            exit;
        }else {
            Flasher::setFlash('Failed','To Delete','dark');
            header('location:' . BASEURL . '/siswa');
            exit;
        }

    }

    function getUbah(){
        echo json_encode($this->model('Siswa_model')->getSiswaById($_POST['id']));
    }


    function ubah(){

        if ($this->model('Siswa_model')->ubahSiswa($_POST,$_FILES) > 0) {
            Flasher::setFlash('Berhasil','Diubah','success');
            header('location:' . BASEURL . '/siswa');
            exit;
        }else {
            Flasher::setFlash('Gagal','Diubah','error');
            header('location:' . BASEURL . '/siswa');
            exit;
        }

    }

    function cari(){

        $data['judul'] = "Halaman Siswa";
        $data['siswa'] = $this->model('Siswa_model')->cariSiswa();
        $this->view('templates/header' , $data);
        $this->view('siswa/index', $data);
        $this->view('templates/footer');

    }

}

?>
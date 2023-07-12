<?php

ini_set("display_errors", "1") ;

class Siswa extends Controller{

    function index(){
        $data['judul'] = "Halaman Siswa";
        $data['siswa'] = $this->model('Siswa_model')->getAllsiswa();
        $this->view('templates/header' , $data);
        $this->view('siswa/index', $data);
        $this->view('templates/footer');

    }

    function detail($id){

        $data['judul'] = "Halaman Detail Siswa";
        $data['siswa'] = $this->model('Siswa_model')->getSiswaById($id);
        $this->view('templates/header' , $data);
        $this->view('siswa/detail', $data);
        $this->view('templates/footer');

    }

    function tambah(){

        if ($this->model('Siswa_model')->addSiswa($_POST,$_FILES) > 0) {
            Flasher::setFlash('Berhasil','Ditambahkan','success');
            header('location:' . BASEURL . '/siswa');
            
            exit;
        }else {
            Flasher::setFlash('Gagal','Ditambahkan','danger');
            header('location:' . BASEURL . '/siswa');
            exit;
        }
    }

    function delete($id){


        if ($this->model('Siswa_model')->deleteSiswa($id) > 0) {
            Flasher::setFlash('Berhasil','Dihapus','success');
            header('location:' . BASEURL . '/siswa');
            exit;
        }else {
            Flasher::setFlash('Gagal','Dihapus','dark');
            header('location:' . BASEURL . '/siswa');
            exit;
        }

    }

    function getUbah(){
        echo json_encode($this->model('Siswa_model')->getSiswaById($_POST['id']));
    }

    function ubah(){
        if ($this->model('Siswa_model')->ubahSiswa($_POST) > 0) {
            Flasher::setFlash('Berhasil','Diubah','success');
            header('location:' . BASEURL . '/siswa');
            exit;
        }else {
            Flasher::setFlash('Gagal','Ditambahkan','danger');
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
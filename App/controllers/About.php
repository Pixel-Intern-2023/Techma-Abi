<?php

class About extends Controller{

    function index($nama = 'abi', $hobi = 'mancing' , $umur = '30'){
        $data['nama'] = $nama;
        $data['hobi'] = $hobi;
        $data['umur'] = $umur;
        $data['judul'] = "About";

        $this->view('templates/header',$data);
        $this->view('about/index',$data);
        $this->view('templates/footer');
    }

    function page(){
        $data['judul'] = "Page";
        $this->view('templates/header',$data);
        $this->view('about/page');
        $this->view('templates/footer');
    }

}

?>
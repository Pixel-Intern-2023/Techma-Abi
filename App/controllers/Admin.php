<?php 
ini_set("display_errors", "1") ;

class Admin extends Controller{

    function index(){

        $data = [
            'title' => 'Admin',
            'admin' => $this->model('Admin_model')->getAllAdmin('')
        ];
        $this->checkLogin();
        $this->view('templates/header' , $data);
        $this->view('templates/sidebar');
        $this->view('admin/index', $data);
        $this->view('templates/footer');
    }


    // function delete($id){
    //     if ($this->model('admin_model')->deleteAdmin($id) > 0) {
    //         Flasher::setFlash('Successfully','Deleted','success');
    //         header('location:' . BASEURL . '/admin');
    //         exit;
    //     }else {
    //         Flasher::setFlash('Failed','To Delete','error');
    //         header('location:' . BASEURL . '/admin');
    //         exit;
    //     }

    // }


    // function find(){

    //     $data['judul'] = "Halaman Admin";
    //     $data['admin'] = $this->model('admin_model')->findAdmin();
    //     $this->view('templates/header' , $data);
    //     $this->view('employe/index', $data);
    //     $this->view('templates/footer');

    // }



    // function getUpdate(){
    //     echo json_encode($this->model('admin_model')->getAdminById($_POST['id']));
    // }



    // function update(){

    //     if ($this->model('admin_model')->updateAdmin($_POST) > 0) {
    //         Flasher::setFlash('Successfully','Changed','success');
    //         header('location:' . BASEURL . '/admin');
    //         exit;
    //     }else {
    //         Flasher::setFlash('Failed','To Change','error');
    //         header('location:' . BASEURL . '/admin');
    //         exit;
    //     }

    // }

}
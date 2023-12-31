<?php
ini_set("display_errors", "1");

class Admin_model
{
    private $table = 'admin';
    private $db;

    function __construct()
    {
        $this->db = new Database;
    }


    function getAllAdmin()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }


    function getAdminById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_admin=:id_admin');
        $this->db->bind('id_admin', $id);
        return $this->db->single();
    }

    function getAdminCount()
    {
        $this->db->query('SELECT COUNT(*) as admin FROM ' . $this->table);
        return $this->db->single();
    }


    function addAdmin($data)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE email = :email');
        $this->db->bind('email', $data['email']);
        $this->db->execute();

        if ($this->db->rowCount() > 0) {
            Flasher::setFlash('Email Has Been Registered', 'error');
            header('location:' . BASEURL . '/Auth/RegisterPage');
            exit;
        } else {

            $query = "INSERT INTO " . $this->table . " VALUES (null, :username, :name, :email, :password, null)";

            $hash = password_hash($data['password'], PASSWORD_DEFAULT);

            $this->db->query($query);
            $this->db->bind('username', $data['username']);
            $this->db->bind('name', $data['name']);
            $this->db->bind('email', $data['email']);
            $this->db->bind('password', $hash);

            $this->db->execute();
            return $this->db->rowCount();
        }
    }


    function LoginAdmin($data)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE email = :email');
        $this->db->bind('email', $data['email']);
        $this->db->execute();

        if ($this->db->rowCount() > 0) {

            $dbPassword = $this->db->single();

            if (password_verify($data['password'], $dbPassword['password'])) {

                $_SESSION['user'] = 'User';
                header('location:' . BASEURL);

            } else {

                Flasher::setFlash('Invalid Password', 'error');
                header('location:' . BASEURL . '/Auth');
                exit;

            }
        } else {
            Flasher::setFlash('Email Not Found', 'error');
            header('location:' . BASEURL . '/Auth');
            exit;
        }
        
    }





    
}

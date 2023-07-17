<?php
ini_set("display_errors", "1") ;

class Admin_model
{
    private $table = 'admin';
    private $db;

    function __construct()
    {
        $this->db = new Database;
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
        $query = "INSERT INTO " . $this->table . " VALUES (null, :username, :name, :email, :password, null)";

        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('name', $data['name']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('password', $data['password']);

        $this->db->execute();
        return $this->db->rowCount();
    }



}

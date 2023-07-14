<?php

class Employe_model
{

    private $table = 'employe';
    private $db;

    function __construct()
    {
        $this->db = new Database;
    }

    function getAllemploye()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
    
    function getEmployeJoin(){
        $this->db->query('SELECT employe.id_employe, employe.employe_image, employe.name, occupation.occupation_name, employe.description, employe.salary, employe.employe_status FROM ' . $this->table . ' JOIN occupation ON employe.id_occupation = occupation.id_occupation');
        return $this->db->resultSet();
    }

    function getEmployeById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_employe=:id_employe');
        $this->db->bind('id_employe', $id);
        return $this->db->single();
    }

    function addEmploye($data, $dataImg)
    {
        $filename = $dataImg['employe_image']['name'];
        $tempPath = $dataImg['employe_image']['tmp_name'];
        

        if (move_uploaded_file($tempPath, __DIR__ . './../../Public/img/'.$filename)){
            echo($data['name']);

            $query = "INSERT INTO " . $this->table . " VALUES (null, :employe_image, :name, :id_occupation, :description, :salary, :employe_status, null, null)";
            $this->db->query($query);
            $this->db->bind('employe_image', $dataImg['employe_image']['name']);
            $this->db->bind('name', $data['name']);
            $this->db->bind('id_occupation', $data['id_occupation']);
            $this->db->bind('description', $data['description']);
            $this->db->bind('salary', $data['salary']);
            $this->db->bind('employe_status', $data['employe_status']);

            $this->db->execute();
            return $this->db->rowCount();
        }

    }


    function deleteEmploye($id_employe)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id_employe= :id_employe";
        $this->db->query($query);
        $this->db->bind('id_employe', $id_employe);

        $this->db->execute();

        return $this->db->rowCount();
    }


    function updateEmploye($data, $dataImg)
    {

        // var_dump($dataImg);
        // die;
        
        $old_gambar = $this->getEmployeById($data['id_employe']);
        $filename = $dataImg['employe_image']['name'];
        $tempPath = $dataImg['employe_image']['tmp_name'];

        if ($dataImg['employe_image']['name'] == "") {
            $dataImg =  $old_gambar['employe_image'];
        }else {
            $dataImg = $filename;
            unlink( __DIR__ .'/../../Public/img/'.$old_gambar['employe_image']);
            move_uploaded_file($tempPath, __DIR__ . './../../Public/img/'.$filename);
        }

        $query = "UPDATE " . $this->table ." SET 
        employe_image = :employe_image,
        name = :name,
        id_occupation = :id_occupation,
        description = :description,
        salary = :salary,
        employe_status = :employe_status,
        updated_at = :updated_at
        WHERE id_employe=:id_employe";

        date_default_timezone_set("asia/Jakarta");
        $update_time = date('y-m-d h:i:s');
    
        $this->db->query($query);
        $this->db->bind('id_employe', $data['id_employe']);
        $this->db->bind('employe_image', $dataImg);
        $this->db->bind('name', $data['name']);
        $this->db->bind('id_occupation', $data['id_occupation']);
        $this->db->bind('description', $data['description']);
        $this->db->bind('salary', $data['salary']);
        $this->db->bind('employe_status', $data['employe_status']);
        $this->db->bind('updated_at', $update_time);
        $this->db->execute();

        return $this->db->rowCount();
    }


    function fireEmploye($id){
        $query = "UPDATE " . $this->table ." SET 
        employe_status = :employe_status WHERE id_employe=:id_employe";

        $this->db->query($query);
        $this->db->bind('employe_status', 'Fired');
        $this->db->bind('id_employe', $id);
        $this->db->execute();
        return $this->db->rowCount();   
    }


    function cariSiswa()
    {
        $keyword = $_POST['keyword'];
        $query = 'SELECT * FROM ' . $this->table . ' WHERE nama LIKE :keyword ';

        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();

    }


}

?>
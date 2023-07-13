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

    function getSiswaById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
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





    function ubahSiswa($data, $dataGambar)
    {

        $old_gambar = $this->getSiswaById($data['id']);
        $filename = $dataGambar['gambar']['name'];
        $tempPath = $dataGambar['gambar']['tmp_name'];

        if ($dataGambar['gambar']['name'] == "") {
            $dataGambar =  $old_gambar['gambar'];
        }else {
            $dataGambar = $filename;
            unlink( __DIR__ . './../../Public/img/'.$old_gambar);
            move_uploaded_file($tempPath, __DIR__ . './../../Public/img/'.$filename);
        }

        $query = "UPDATE siswa SET 
        nama = :nama,
        gambar = :gambar,
        hobi = :hobi,
        umur = :umur
        WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('gambar', $dataGambar);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('hobi', $data['hobi']);
        $this->db->bind('umur', $data['umur']);
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
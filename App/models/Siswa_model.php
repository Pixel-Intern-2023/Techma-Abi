<?php

class Siswa_model
{

    private $table = 'siswa';
    private $db;

    function __construct()
    {
        $this->db = new Database;
    }

    function getAllsiswa()
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

    function addSiswa($data, $dataGambar)
    {
     
        $filename = $dataGambar['gambar']['name'];
        $tempFilePath = $dataGambar['gambar']['tmp_name'];
        $destinationFolder = __DIR__ . 'Public/img/';
        $destinationFilePath = $destinationFolder . $filename;

        if (move_uploaded_file($tempFilePath, __DIR__ . './../../Public/img/'.$filename)) {

            $query = "INSERT INTO siswa VALUES (null, :gambar,:nama, :hobi, :umur)";

            $this->db->query($query);
            $this->db->bind('gambar', $dataGambar['gambar']['name']);
            $this->db->bind('nama', $data['nama']);
            $this->db->bind('hobi', $data['hobi']);
            $this->db->bind('umur', $data['umur']);
            $this->db->execute();

            return $this->db->rowCount();
        }

    }

    function deleteSiswa($id)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id= :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    function ubahSiswa($data)
    {
        $query = "UPDATE siswa SET 
        nama = :nama,
        hobi = :hobi,
        umur = :umur
        WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $data['id']);
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
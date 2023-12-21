<?php

class DosenM
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // public function getCountRuang() {
    //     $this->db->query("SELECT COUNT(*) as hitung FROM ruangan");
    //     $this->db->execute();
    //     $result = $this->db->single();
    //     return $result['hitung'];
    // }

    public function getAllDosen()
    {
        $this->db->query("SELECT * FROM dosen ORDER BY kode ASC");
        return $this->db->resultSet();
    }

    public function getCountDosen()
    {
        $this->db->query("SELECT getJumlahDosen() as hitung");
        $this->db->execute();
        $result = $this->db->single(); 
        return $result['hitung'];
    }

    public function tambahDosen($data)
    {
        $this->db->query("INSERT INTO dosen VALUES (:kode, :nama_dosen)");
        $this->db->bind('kode', $data['kode']);
        $this->db->bind('nama_dosen', $data['nama_dosen']);
        $this->db->execute();
        
        return $this->db->rowCount();
    }

    public function hapusDosen($kode)
    {
        $this->db->query("DELETE FROM dosen WHERE kode = :kode");
        $this->db->bind('kode', $kode);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function editDosen($data)
    {
        $this->db->query("UPDATE dosen SET 
        kode = :kode,
        nama_dosen = :nama_dosen
        WHERE kode = :old_kode");
        $this->db->bind('kode', $data['kode']);
        $this->db->bind('nama_dosen', $data['nama_dosen']);
        $this->db->bind('old_kode', $data['old_kode']);
        $this->db->execute();

        return $this->db->rowCount();
    }
}

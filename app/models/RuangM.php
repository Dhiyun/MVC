<?php

class RuangM {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllRuangFasilitas() {
        $this->db->query("SELECT * FROM ruangan r JOIN fasilitas f WHERE r.id_fasilitas = f.id ORDER BY lantai, kode ASC");
        return $this->db->resultSet();
    }

    public function getAllLantai() {
        $this->db->query("SELECT DISTINCT lantai FROM ruangan ORDER BY lantai ASC");
        return $this->db->resultSet();
    }

    public function getAllFasilitas() {
        $this->db->query("SELECT * FROM fasilitas");
        return $this->db->resultSet();
    }

    public function getAllRuang() {
        $this->db->query("SELECT * FROM ruangan ORDER BY kode desc");
        return $this->db->resultSet();
    }

    public function tambahRuang($data) {
        $query = "INSERT INTO ruangan VALUES 
        (:kode, :nama_ruangan, :lantai, :kapasitas, :id_fasilitas)";
        $this->db->query($query);
        $this->db->bind('kode', $data['kode']);
        $this->db->bind('nama_ruangan', $data['nama_ruangan']);
        $this->db->bind('lantai', $data['lantai']);
        $this->db->bind('kapasitas', $data['kapasitas']);
        $this->db->bind('id_fasilitas', $data['id_fasilitas']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusRuang($kode) {
        $query = "DELETE FROM ruangan WHERE kode = :kode";
        $this->db->query($query);
        $this->db->bind('kode', $kode);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function editRuang($data) {
        $query = "UPDATE ruangan SET 
            kode = :kode,
            nama_ruangan = :nama_ruangan,
            lantai = :lantai,
            kapasitas = :kapasitas,
            id_fasilitas = :id_fasilitas
            WHERE kode = :old_kode";

        $this->db->query($query);
        $this->db->bind('kode', $data['kode']);
        $this->db->bind('nama_ruangan', $data['nama_ruangan']);
        $this->db->bind('lantai', $data['lantai']);
        $this->db->bind('kapasitas', $data['kapasitas']);
        $this->db->bind('id_fasilitas', $data['id_fasilitas']);
        $this->db->bind('old_kode', $data['old_kode']);

        $this->db->execute();
        return $this->db->rowCount();
    }
}

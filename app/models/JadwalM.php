<?php

class JadwalM {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllJadwal() {
        $this->db->query("SELECT j.*, r.kode, r.lantai, r.nama_ruangan, k.nama_kelas, k.prodi, d.nama_dosen
        FROM jadwal j 
        JOIN ruangan r ON j.kode_ruang = r.kode 
        JOIN kelas k ON j.id_kelas = k.id
        JOIN dosen d ON j.kode_dosen = d.kode
        ORDER BY r.kode, r.lantai ASC");

        return $this->db->resultSet();
    }
    
    public function tambahJadwal($data)
    {
        $this->db->query("CALL tambahJadwal(:kode_ruang, :nama_kelas, :prodi, :nama_dosen, :hari, :waktu_mulai, :waktu_selesai, :matkul)");
        $this->db->bind(':kode_ruang', $data['kode_ruang']);
        $this->db->bind(':nama_kelas', $data['nama_kelas']);
        $this->db->bind(':prodi', $data['prodi']);
        $this->db->bind(':nama_dosen', $data['nama_dosen']);
        $this->db->bind(':hari', $data['hari']);
        $this->db->bind(':waktu_mulai', $data['waktu_mulai']);
        $this->db->bind(':waktu_selesai', $data['waktu_selesai']);
        $this->db->bind(':matkul', $data['matkul']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusJadwal($id) {
        $query = "DELETE FROM jadwal WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function editJadwal($data)
    {
        $this->db->query("CALL editJadwal(:kode_ruang, :nama_kelas, :prodi, :nama_dosen, :hari, :waktu_mulai, :waktu_selesai, :matkul, :id)");
        $this->db->bind(':kode_ruang', $data['kode_ruang']);
        $this->db->bind(':nama_kelas', $data['nama_kelas']);
        $this->db->bind(':prodi', $data['prodi']);
        $this->db->bind(':nama_dosen', $data['nama_dosen']);
        $this->db->bind(':hari', $data['hari']);
        $this->db->bind(':waktu_mulai', $data['waktu_mulai']);
        $this->db->bind(':waktu_selesai', $data['waktu_selesai']);
        $this->db->bind(':matkul', $data['matkul']);
        $this->db->bind(':id', $data['id']);

        $this->db->execute();
        return $this->db->rowCount();
    }
}

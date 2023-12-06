<?php

class JadwalM {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllJadwal() {
        $this->db->query("SELECT j.*, r.kode, r.nama_ruangan, k.nama_kelas, k.prodi, d.nama_dosen
        FROM jadwal j 
        JOIN ruangan r ON j.kode_ruang = r.kode 
        JOIN kelas k ON j.id_kelas = k.id
        JOIN dosen d ON j.id_dosen = d.id
        ORDER BY r.kode, r.lantai ASC");
        return $this->db->resultSet();
    }

    public function getAllKelas() {
        $this->db->query("SELECT * FROM kelas ORDER BY nama_kelas, prodi ASC");
        return $this->db->resultSet();
    }

    public function getAllRuangan() {
        $this->db->query("SELECT * FROM ruangan ORDER BY lantai, kode ASC");
        return $this->db->resultSet();
    }

    public function tambahRuang($data) {
        $nama_kelas = $_POST['nama_kelas'];
        $prodi = $_POST['prodi'];
        $nama_dosen = $_POST['nama_dosen'];

        $querydosen = "SELECT id FROM dosen WHERE nama_dosen = :nama_dosen";
        $this->db->query($querydosen);
        $this->db->bind('nama_dosen', $nama_dosen);
        $id_dosen_result = $this->db->single();

        $querykelas = "SELECT id FROM kelas WHERE nama_kelas = :nama_kelas AND prodi = :prodi";
        $this->db->query($querykelas);
        $this->db->bind('nama_kelas', $nama_kelas);
        $this->db->bind('prodi', $prodi);
        $id_kelas_result = $this->db->single();

        if($id_kelas_result && $id_dosen_result) {
            $id_kelas = $id_kelas_result['id'];
            $id_dosen = $id_dosen_result['id'];

            $query = "INSERT INTO JADWAL VALUES 
            ('', :kode_ruang, :id_kelas, :id_dosen, :hari, :waktu_mulai, :waktu_selesai, :matkul)";
            $this->db->query($query);
            $this->db->bind('kode_ruang', $data['kode_ruang']);
            $this->db->bind('id_kelas', $id_kelas);
            $this->db->bind('id_dosen', $id_dosen);
            $this->db->bind('hari', $data['hari']);
            $this->db->bind('waktu_mulai', $data['waktu_mulai']);
            $this->db->bind('waktu_selesai', $data['waktu_selesai']);
            $this->db->bind('matkul', $data['matkul']);

            $this->db->execute();
            return $this->db->rowCount();
        }
    }

    public function hapusRuang($id) {
        $query = "DELETE FROM jadwal WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function editRuang($kode) {
        $query = "DELETE FROM ruangan WHERE kode = :kode";
        $this->db->query($query);
        $this->db->bind('kode', $kode);

        $this->db->execute();
        return $this->db->rowCount();
    }
}

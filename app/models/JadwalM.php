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
        JOIN dosen d ON j.kode_dosen = d.kode
        ORDER BY r.kode, r.lantai ASC");

        return $this->db->resultSet();
    }

    public function getAllJadwalPivot() {
        $this->db->query("SELECT
        kode_ruang, r.nama_ruangan,
        GROUP_CONCAT(CASE WHEN hari = 'Senin' THEN CONCAT(matkul, ' (', waktu_mulai, ' - ', waktu_selesai, ')') END) AS Senin,
        GROUP_CONCAT(CASE WHEN hari = 'Selasa' THEN CONCAT(matkul, ' (', waktu_mulai, ' - ', waktu_selesai, ')') END) AS Selasa,
        GROUP_CONCAT(CASE WHEN hari = 'Rabu' THEN CONCAT(matkul, ' (', waktu_mulai, ' - ', waktu_selesai, ')') END) AS Rabu,
        GROUP_CONCAT(CASE WHEN hari = 'Kamis' THEN CONCAT(matkul, ' (', waktu_mulai, ' - ', waktu_selesai, ')') END) AS Kamis,
        GROUP_CONCAT(CASE WHEN hari = 'Jumat' THEN CONCAT(matkul, ' (', waktu_mulai, ' - ', waktu_selesai, ')') END) AS Jumat
      FROM jadwal j
      JOIN ruangan r ON j.kode_ruang = r.kode
      GROUP BY kode_ruang
      ORDER BY kode_ruang;
      ");
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

    public function tambahJadwal($data) {
        var_dump($_POST);
        $nama_kelas = $_POST['nama_kelas'];
        $prodi = $_POST['prodi'];
        $nama_dosen = $_POST['nama_dosen'];

        $querydosen = "SELECT kode FROM dosen WHERE nama_dosen = :nama_dosen";
        $this->db->query($querydosen);
        $this->db->bind('nama_dosen', $nama_dosen);
        $kode_dosen_result = $this->db->single();

        $querykelas = "SELECT id FROM kelas WHERE nama_kelas = :nama_kelas AND prodi = :prodi";
        $this->db->query($querykelas);
        $this->db->bind('nama_kelas', $nama_kelas);
        $this->db->bind('prodi', $prodi);
        $id_kelas_result = $this->db->single();

        if($id_kelas_result && $kode_dosen_result) {
            $id_kelas = $id_kelas_result['id'];
            $kode_dosen = $kode_dosen_result['kode'];

            $query = "INSERT INTO jadwal VALUES 
            ('', :kode_ruang, :id_kelas, :kode_dosen, :hari, :waktu_mulai, :waktu_selesai, :matkul)";
            $this->db->query($query);
            $this->db->bind('kode_ruang', $data['kode_ruang']);
            $this->db->bind('id_kelas', $id_kelas);
            $this->db->bind('kode_dosen', $kode_dosen);
            $this->db->bind('hari', $data['hari']);
            $this->db->bind('waktu_mulai', $data['waktu_mulai']);
            $this->db->bind('waktu_selesai', $data['waktu_selesai']);
            $this->db->bind('matkul', $data['matkul']);

            $this->db->execute();
            return $this->db->rowCount();
        }
    }

    public function hapusJadwal($id) {
        $query = "DELETE FROM jadwal WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function editJadwal($data) {
        $nama_kelas = $_POST['nama_kelas'];
        $prodi = $_POST['prodi'];
        $nama_dosen = $_POST['nama_dosen'];

        $querydosen = "SELECT kode FROM dosen WHERE nama_dosen = :nama_dosen";
        $this->db->query($querydosen);
        $this->db->bind('nama_dosen', $nama_dosen);
        $kode_dosen_result = $this->db->single();

        $querykelas = "SELECT id FROM kelas WHERE nama_kelas = :nama_kelas AND prodi = :prodi";
        $this->db->query($querykelas);
        $this->db->bind('nama_kelas', $nama_kelas);
        $this->db->bind('prodi', $prodi);
        $id_kelas_result = $this->db->single();

        if($id_kelas_result && $kode_dosen_result) {
            $id_kelas = $id_kelas_result['id'];
            $kode_dosen = $kode_dosen_result['kode'];

            $query = "UPDATE jadwal SET 
            kode_ruang = :kode_ruang,
            id_kelas = :id_kelas,
            kode_dosen = :kode_dosen,
            hari = :hari,
            waktu_mulai = :waktu_mulai,
            waktu_selesai = :waktu_selesai,
            matkul = :matkul
            WHERE id = :id";
            $this->db->query($query);
            $this->db->bind('kode_ruang', $data['kode_ruang']);
            $this->db->bind('id_kelas', $id_kelas);
            $this->db->bind('kode_dosen', $kode_dosen);
            $this->db->bind('hari', $data['hari']);
            $this->db->bind('waktu_mulai', $data['waktu_mulai']);
            $this->db->bind('waktu_selesai', $data['waktu_selesai']);
            $this->db->bind('matkul', $data['matkul']);
            $this->db->bind('id', $data['id']);

            $this->db->execute();
            return $this->db->rowCount();
        }
    }
}

<?php

class PeminjamanM
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getCountPeminjaman()
    {
        $this->db->query("SELECT COUNT(*) as total FROM peminjaman");
        $this->db->execute();
        $result = $this->db->single();
        return $result['total'];
    }

    public function getCountPeminjamanProses()
    {
        $this->db->query("SELECT peminjaman_by_status('proses') as proses");
        $this->db->execute();
        $result = $this->db->single();
        return $result['proses'];
    }

    public function getCountPeminjamanSelesai()
    {
        $this->db->query("SELECT peminjaman_by_status('selesai') as selesai");
        $this->db->execute();
        $result = $this->db->single();
        return $result['selesai'];
    }

    public function getAllUser()
    {
        $this->db->query("SELECT * FROM user");
        return $this->db->resultSet();
    }

    private function updatePeminjamanStatusProcedure()
    {
        $this->db->query("CALL updatePeminjamanStatus();");
        $this->db->execute();
    }

    public function getAllPeminjaman()
    {
        $this->updatePeminjamanStatusProcedure();
        
        $this->db->query("SELECT p.id as id_pinjam, u.username, u.nama_user, p.tanggal_pinjam, p.tanggal_kembali,
        CONCAT(p.tanggal_pinjam, ' - ', p.tanggal_kembali) as tanggal, 
        p.no_telp, p.kode_ruangan, p.keterangan, p.status, p.confirm, r.nama_ruangan
        FROM peminjaman p
        JOIN user u ON p.id_user = u.id
        JOIN ruangan r ON p.kode_ruangan = r.kode
        ORDER BY p.kode_ruangan AND p.confirm ASC");

        return $this->db->resultSet();
    }

    public function getIdPeminjaman($id) {
        $this->db->query("SELECT u.username, u.nama_user, p.tanggal_pinjam, p.tanggal_kembali,
            p.no_telp, p.kode_ruangan, p.keterangan, r.nama_ruangan
            FROM peminjaman p
            JOIN user u ON p.id_user = u.id
            JOIN ruangan r ON p.kode_ruangan = r.kode
            WHERE p.id = :id");
    
        $this->db->bind(':id', $id);
    
        return $this->db->resultSet();
    }
    

    public function tambahPeminjaman($data)
    {
        $username = $_POST['username'];
        $nama_user = $_POST['nama_user'];

        $queryUser = "SELECT id FROM user WHERE username = :username AND nama_user = :nama_user";
        $this->db->query($queryUser);
        $this->db->bind('username', $username);
        $this->db->bind('nama_user', $nama_user);
        $resultUser = $this->db->single();

        if ($resultUser) {
            $id_user = $resultUser['id'];

            $query = "INSERT INTO peminjaman (id_user, tanggal_pinjam, tanggal_kembali, keterangan, no_telp, status, kode_ruangan) VALUES (:id_user, :tanggal_pinjam, :tanggal_kembali, :keterangan, :no_telp, :status, :kode_ruangan)";
            $this->db->query($query);
            $this->db->bind('id_user', $id_user);
            $this->db->bind('tanggal_pinjam', $data['tanggal_pinjam']);
            $this->db->bind('tanggal_kembali', $data['tanggal_kembali']);
            $this->db->bind('keterangan', $data['keterangan']);
            $this->db->bind('no_telp', $data['no_telp']);
            $this->db->bind('status', $data['status']);
            $this->db->bind('kode_ruangan', $data['kode_ruangan']);
            $this->db->execute();

        }

        return $this->db->rowCount();
    }

    public function hapusPeminjaman($kode)
    {

    }

    public function editApprove($id)
    {
        $query = "UPDATE peminjaman SET confirm = :confirm WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->bind('confirm', 'Approve');

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function editDecline($id)
    {
        $query = "UPDATE peminjaman SET confirm = :confirm WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->bind('confirm', 'Decline');

        $this->db->execute();
        return $this->db->rowCount();
    }
}

<?php

class Mahasiswa_model {
    private $table = 'mahasiswa';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function get_all() {
        $this->db->query('SELECT * FROM ruangan');
        return $this->db->resultSet();
    }

    // private $mhs = [
    //     [
    //         "nama" => "Dhika",
    //         "no" => "1",
    //     ],
    //     [
    //         "nama" => "Wahyu",
    //         "no" => "2",
    //     ],
    //     [
    //         "nama" => "Nugroho",
    //         "no" => "3",
    //     ]
    // ];

    // public function getAllMahasiswa(){
    //     return $this->mhs;
    // }
}
<?php

class UserLogin {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getUser($username) {
        $this->db->query("SELECT username, password, role, jabatan FROM user WHERE username = :username");
        $this->db->bind(':username', $username);
        return $this->db->resultSet();
    }
}

<?php

class UserLogin
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUser($username)
    {
        $this->db->query("SELECT username, password, role, jabatan FROM user WHERE username = :username");
        $this->db->bind(':username', $username);
        return $this->db->resultSet();
    }

    public function registerUser($data)
    {
        $this->db->query("SELECT username FROM user WHERE username = :username");
        $this->db->bind('username', $data['username']);
        $result = $this->db->single();

        if ($result) {
            return 0;
        } else {
            if (isset($data['confirm_password']) && $data['confirm_password'] === $data['password']) {
                $password = md5($data['password']);
                
                $this->db->query("INSERT INTO user VALUES 
                ('', :nama_user, :username, :password, :jabatan, :email, :role)");
                $this->db->bind('nama_user', $data['nama_user']);
                $this->db->bind('username', $data['username']);
                $this->db->bind('password', $password);
                $this->db->bind('jabatan', $data['jabatan']);
                $this->db->bind('email', $data['email']);
                $this->db->bind('role', "User");

                // Eksekusi query
                $this->db->execute();
                return $this->db->rowCount();
            } else {
                return 0;
            }
        }
    }
}

<?php
class UserModel {
    public function checkLogin($username, $password) {
        include "config/koneksi.php";
        include "fungsi/pesan_kilat.php";
        include "fungsi/anti_injection.php";

        $username = antiinjection($koneksi, $username);
        $password = antiinjection($koneksi, $password);

        $query = "SELECT username, password, role, jabatan FROM user WHERE username = '$username'";
        $result = mysqli_query($koneksi, $query);

        if ($result) {
            $row = mysqli_fetch_assoc($result);

            if($row['password'] === md5($password)){
                $_SESSION['username'] = $row['username'];
                $_SESSION['role'] = $row['role'];
                if($row['role'] === "User"){
                    header("Location: user/");
                } else if($row['role'] === "Admin"){
                    header("Location: admin/");
                } else {
                    pesan('danger', "User tidak di temukan");
                    header("Location: login.php/");
                }
            } else {
                pesan('danger', "Login gagal. Periksa kembali username dan password.");
                header("Location: login.php");
            }
        } else {
            pesan('danger', "Login gagal. Periksa kembali username dan password.");
            header("Location: login.php");
            exit();
        }

        mysqli_close($koneksi);
    }
}
?>

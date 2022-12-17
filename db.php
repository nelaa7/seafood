<?php

class db{
    public function __construct()
    {
        $host="localhost";
        $dbname="seafood";
        $username="root";
        $password="";
        // perintah php untuk akses ke database
        $koneksi = mysqli_connect($host, $user, $password, $database);

        $this->db=new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}


?>
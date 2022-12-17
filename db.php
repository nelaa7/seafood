<?php


       
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "seafood";

        $koneksi = mysqli_connect($host, $username, $password, $dbname) 
        or die("koneksi ke database gagal")

       // $this->db=new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
       // $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    



?>
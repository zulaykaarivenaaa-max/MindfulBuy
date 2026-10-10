<?php

class Database
{
    // Properti Enkapsulasi
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $dbname = "db_mindfulby"; 

    // Properti Koneksi
    protected $conn;

    // Method Constructor untuk Inisialisasi Koneksi
    public function __construct()
    {
        $this->conn = new mysqli(
            $this->host,
            $this->user,
            $this->pass,
            $this->dbname
        );

        // Cek apakah ada error saat koneksi
        if ($this->conn->connect_error) {
            die("Koneksi database gagal: " . $this->conn->connect_error);
        }
    }

    // Method untuk mengambil objek koneksi (Getter)
    public function getConnection()
    {
        return $this->conn;
    }
}
<?php
// Memasukkan file database.php agar class Database dapat digunakan
require 'database.php';

// Membuat class IzinKhusus yang merupakan turunan dari class Database
class IzinKhusus extends Database
{
    // Constructor yang memanggil constructor dari class induk (Database)
    public function __construct()
    {
        parent::__construct(); // Memanggil constructor dari parent (Database)
    }

    // Fungsi untuk menampilkan data izin dengan keperluan 'Terlambat' yang diusulkan oleh 'Galih'
    public function tampilData()
    {
        // Query untuk mengambil data izin dengan keperluan 'Terlambat' dan nama_pengusul 'Galih'
        $sql = "SELECT * FROM izin_ketidakhadiran_pegawai WHERE keperluan = 'Terlambat' and nama_pengusul ='Galih'";

        // Mengembalikan hasil query
        return $this->koneksi->query($sql);
    }
}

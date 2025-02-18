<?php
// Memasukkan file database.php agar class Database dapat digunakan
require 'database.php';

// Membuat class IzinSakit yang merupakan turunan dari class Database
class IzinSakit extends Database
{
    // Constructor yang memanggil constructor dari class induk (Database)
    public function __construct()
    {
        parent::__construct(); // Memanggil constructor dari parent (Database)
    }

    // Fungsi untuk menampilkan data sakit yang telah disetujui
    public function tampilData()
    {
        // Query untuk mengambil data izin dengan keperluan 'Sakit' dan putusannya 'Disetujui'
        $sql =
            "SELECT * FROM izin_ketidakhadiran_pegawai WHERE keperluan = 'Sakit' and putusan = 'Disetujui'";

        // Mengembalikan hasil query
        return $this->koneksi->query($sql);
    }
}

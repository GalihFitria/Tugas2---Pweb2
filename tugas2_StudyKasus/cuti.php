<?php
// Memasukkan file database.php agar class Database dapat digunakan
require 'database.php';

// Membuat class IzinCuti yang merupakan turunan dari class Database
class IzinCuti extends Database
{
    // Constructor yang memanggil constructor dari class induk (Database)
    public function __construct()
    {
        parent::__construct(); // Memanggil constructor dari parent (Database)
    }

    // Fungsi untuk menampilkan data cuti yang telah disetujui
    public function tampilData()
    {
        // Query untuk mengambil data izin dengan keperluan 'Cuti', dan status 'Disetujui'
        $sql = "SELECT * FROM izin_ketidakhadiran_pegawai WHERE keperluan = 'Cuti' AND putusan = 'Disetujui'";

        // Mengembalikan hasil query
        return $this->koneksi->query($sql);
    }
}

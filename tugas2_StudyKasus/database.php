<?php
class Database
{
    // Atribut atau Properti untuk menyimpan informasi host, username, password, dan nama database
    private $host = "localhost";
    private $username = "root";
    private $pass = "";
    private $dbname = "izin_ketidakhadiran_pegawai";

    // Atribut atau Properti yang akan digunakan untuk menyimpan koneksi ke database
    protected $koneksi;

    // Constructor yang akan otomatis dijalankan saat objek dibuat
    public function __construct()
    {
        // Membuat koneksi ke database menggunakan MySQLi
        $this->koneksi = new mysqli($this->host, $this->username, $this->pass, $this->dbname);

        // Mengecek apakah koneksi berhasil atau tidak
        if ($this->koneksi->connect_error) {
            // Jika koneksi gagal, tampilkan pesan error
            die("Koneksi Database Gagal: " . $this->koneksi->connect_error);
        }
    }

    // Fungsi untuk menampilkan data dari tabel izin_ketidakhadiran_pegawai
    public function tampilData()
    {
        // Query untuk mengambil semua data dari tabel
        $data = "SELECT * FROM izin_ketidakhadiran_pegawai";
        // Menjalankan query dan menyimpan hasilnya
        $hasil = $this->koneksi->query($data);

        // Membuat array kosong untuk menyimpan hasil data
        $result = [];
        // Jika ada data yang ditemukan, masukkan ke dalam array
        if ($hasil->num_rows > 0) {
            while ($d = $hasil->fetch_assoc()) {
                $result[] = $d;
            }
        }

        // Mengembalikan hasil data
        return $result;
    }
}
// Membuat objek dari class Database
$db = new Database();

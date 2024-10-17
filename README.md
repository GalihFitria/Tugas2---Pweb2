# Tugas2-Praktikum Web 2
# Mengimplementasikan CRUD menggunakan PHP OOP

<b>TUGAS :</b>
1. Membuat View berbasis OOP, dengan mengambil data dari database MySQL
2. Gunakan _construct sebagai link ke database
3. Terapkan enkapsulasi sesuai logika studi kasus
4. Membuat kelas turunan menggunakan konsep pewarisan
5. Terapkan polimorfisme untuk minimal 2 peran sesuai studi kasus
### Study Kasus: Izin Ketidakhadiran Pegawai
Study Kasus ini dibuat untuk mengelola ketidakhadiran pegawai dengan menggunakan konsep Pemrograman Berorientasi Objek (OOP) dan MySQL sebagai database. Aplikasi ini memanfaatkan konsep OOP seperti enkapsulasi, pewarisan, dan polimorfisme, serta berfokus pada pengelolaan izin ketidakhadiran pegawai untuk berbagai kategori seperti izin sakit, cuti, dan izin khusus.

### Struktur Proyek
- database.php: Mengelola koneksi ke database.
- cuti.php: Kelas untuk mengelola izin cuti pegawai.
- khusus.php: Kelas untuk mengelola izin khusus pegawai.
- sakit.php: Kelas untuk mengelola izin sakit pegawai.
- nav.php: Menyediakan navigasi antar halaman.
- index.php: Halaman utama untuk menampilkan seluruh data ketidakhadiran pegawai.
- tampil_cuti.php: Halaman utama untuk menampilkan data izin cuti pegawai.
- tampil_sakit.php: Halaman utama untuk menampilkan data izin sakit pegawai.
- tampil_khusus.php: Halaman utama untuk menampilkan data izin khusus (terlambat) pegawai.

<hr>

<h2> Langkah 1 </h2>
<b><i>Membuat View berbasis OOP, dengan mengambil data dari database MySQL</i></b>

- Membuat Database terlebih dahulu dengan nama tabel izin_ketidakhadiran_pegawai dari ERD dibawah ini
<img src ='https://github.com/user-attachments/assets/d4a89a08-724a-45c9-baba-bd45b2aea19a'>

<img src ='https://github.com/user-attachments/assets/e8b20110-bd66-46ad-a9c5-15bd1367f280'>

- Mengambil Data dari database izin_ketidakhadiran_pegawai

```php
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

    // Fungsi untuk menampilkan data izin dengan keperluan 'Sakit' yang diusulkan oleh 'Galih'
    public function tampilData()
    {
        // Query untuk mengambil data izin dengan keperluan 'Sakit' dan nama_pengusul 'Galih'
        $sql = "SELECT * FROM izin_ketidakhadiran_pegawai WHERE keperluan = 'Sakit' and nama_pengusul ='Galih'";

        // Mengembalikan hasil query
        return $this->koneksi->query($sql);
    }
}
?>
```
<h2> Langkah 2 </h2>
<b><i>Gunakan _construct sebagai link ke database</i></b>

```php
<?php
    // Constructor yang memanggil constructor dari class induk (Database)
    public function __construct()
    {
        parent::__construct(); // Memanggil constructor dari parent (Database)
    }

?>
```

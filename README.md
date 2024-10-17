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

<h2> Langkah 1: <i>Membuat View berbasis OOP, dengan mengambil data dari database MySQL</i></h2> 

- Membuat Database terlebih dahulu dengan nama tabel izin_ketidakhadiran_pegawai dari ERD dibawah ini
<img src ='https://github.com/user-attachments/assets/d4a89a08-724a-45c9-baba-bd45b2aea19a'>

<img src ='https://github.com/user-attachments/assets/e8b20110-bd66-46ad-a9c5-15bd1367f280'>

- Membuat View menggunakan Bootstrap

    ```php
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <title>Kelola Kehadiran</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <style>
            /* Warna latar belakang halaman */
    
            /* Navbar kustom dengan warna */
            .navbar-custom {
                background-color: #008080;
                /* Teal */
            }
    
            /* Gaya untuk teks utama di bagian tengah */
            .hero-text {
                color: #ffffff;
                background-color: #008080;
                /* Teal */
                padding: 40px;
                border-radius: 10px;
                text-align: center;
                margin-top: 50px;
                box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            }
    
            /* Gaya untuk container */
            .container {
                padding: 20px;
            }
    
            /* Gaya untuk judul */
            h2 {
                color: #008080;
            }
        </style>
    </head>
    
    <body>
    
        <!-- Menyertakan file 'nav.php' untuk menampilkan navigasi navbar -->
        <?php include 'nav.php'; ?>
    
        <!-- Hero text untuk memberikan tulisan di bagian tengah -->
        <div class="container">
            <div class="text">
                <h1>
                    <center>SELAMAT DATANG DI WEBSITE KETIDAKHADIRAN PEGAWAI</center>
                </h1><br>
                <h1>
                    <center>Kelola Ketidakhadiran Anda dengan Mudah</center>
                </h1>
                <h3>
                    <center>Sistem absensi pegawai kami memudahkan Anda dalam mengelola cuti, izin, dan kehadiran dengan lebih efisien dan terstruktur.</center>
                </h3>
            </div>
        </div>
    
    </body>
    
    </html>
    <?
    ```

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

     <h3>Script database.php</h3>

     
  ```php
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
    ?>
  ```

<h2> Langkah 2: <i> Gunakan _construct sebagai link ke database</i> </h2>

- Constract pada class Database digunakan untuk menginisialisasi dan menghubungkan koneksi ke database
  
    ```php
    <?php
    class Database
    {
    ....
        // Constructor yang memanggil constructor dari class induk (Database)
        public function __construct()
        {
            parent::__construct(); // Memanggil constructor dari parent (Database)
        }
    
    ?>
    ```
- Constract pada class Sakit digunakan untuk menginisialisasi dan menghubungkan koneksi dengan class Database

    ```php
    <?php
    class IzinSakit extends Database
    {
        // Constructor yang memanggil constructor dari class induk (Database)
        public function __construct()
        {
            parent::__construct(); // Memanggil constructor dari parent (Database)
        }
    ?>
    ```

- Constract pada class Cuti digunakan untuk menginisialisasi dan menghubungkan koneksi dengan class Database

    ```php
    <?php
    class IzinCuti extends Database
    {
        // Constructor yang memanggil constructor dari class induk (Database)
        public function __construct()
        {
            parent::__construct(); // Memanggil constructor dari parent (Database)
        }
    ?>
    ```

- Constract pada class Khusus digunakan untuk menginisialisasi dan menghubungkan koneksi dengan class Database

    ```php
    <?php
    class IzinKhusus extends Database
    {
        // Constructor yang memanggil constructor dari class induk (Database)
        public function __construct()
        {
            parent::__construct(); // Memanggil constructor dari parent (Database)
        }
    
    ?>
    ```

    <h2> Langkah 3: <i> Terapkan enkapsulasi sesuai logika studi kasus</i> </h2>
    
    Penerapan Enkapsulasi: Atribut dan metode yang sensitif dibungkus dalam kelas agar tidak dapat diakses langsung dari luar.

    ```php
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
    ?>
    ```

     <h2> Langkah 4: <i>Membuat kelas turunan menggunakan konsep pewarisan</i> </h2>

- Membuat kelas turunan dari Database yaitu sakit, cuti dan khusus. berikut script lengkap dari class Sakit

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
    ?>
    ```

- Membuat kelas turunan dari Database yaitu sakit, cuti dan khusus. berikut script lengkap dari class Cuti

    ```php
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
    ?>
    ```

- Membuat kelas turunan dari Database yaitu sakit, cuti dan khusus. berikut script lengkap dari class Khusus

    ```php
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
    
        // Fungsi untuk menampilkan data izin khusus yang telah disetujui
        public function tampilData()
        {
            // Query untuk mengambil data izin dengan keperluan 'Terlambat' dan status 'Disetujui'
            $sql =
                "SELECT * FROM izin_ketidakhadiran_pegawai WHERE keperluan = 'Terlambat' and putusan = 'Disetujui'";
    
            // Mengembalikan hasil query
            return $this->koneksi->query($sql);
        }
    }
    ?>
    ```

    <h2>Langkah 5: <i>Terapkan polimorfisme untuk minimal 2 peran sesuai studi kasus</i></h2>
    2 peran sebagai Pimpinan dan Pegawai, Pimpinan bisa melihat Laporan Ketidakhadiran Pegawai yang disetujui maupun tidak sedangkan Pegawai hanya bisa melihat Data Ketidakhadiran Pegawai yang telah disetujui saja 
    

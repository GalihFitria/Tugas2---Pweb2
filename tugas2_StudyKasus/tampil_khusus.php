<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tampil Data Khusus</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        /* Gaya kustom untuk navbar hijau toska */
        .navbar-custom {
            background-color: #008080;
            /* Kode warna untuk hijau toska */
        }
    </style>
</head>

<body>

    <!-- Menyertakan file 'nav.php' untuk menampilkan navigasi navbar -->
    <?php include 'nav.php'; ?>

    <!-- Kontainer untuk menampilkan tabel data -->
    <div class="container mt-3">
        <h2>
            <center>DATA IZIN KHUSUS PEGAWAI</center>
        </h2><br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <!-- Header tabel untuk setiap kolom -->
                    <th scope="col">Izin ID</th>
                    <th scope="col">Keperluan</th>
                    <th scope="col">Finger Print</th>
                    <th scope="col">Tgl Mulai Izin</th>
                    <th scope="col">Durasi Izin Hari</th>
                    <th scope="col">Durasi Izin Jam</th>
                    <th scope="col">Durasi Izin Menit</th>
                    <th scope="col">Nama Pengusul</th>
                    <th scope="col">Tgl Pengusul</th>
                    <th scope="col">Ttd Pengusul</th>
                    <th scope="col">Putusan</th>
                    <th scope="col">Tgl Disetujui</th>
                    <th scope="col">Ttd Atasan</th>
                    <th scope="col">Catatan</th>
                    <th scope="col">Dosen</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Menyertakan file khusus.php yang memuat class IzinKhusus
                include('khusus.php');

                // Membuat objek IzinKhusus untuk mengambil data
                $IzinKhusus = new IzinKhusus();
                $data = $IzinKhusus->tampilData(); // Mengambil data izin khusus pegawai

                // Mengecek apakah data tidak kosong
                if (!empty($data)) {
                    // Looping untuk menampilkan data izin khusus pegawai dalam tabel
                    foreach ($data as $row) {
                ?>
                        <tr>
                            <!-- Menampilkan data setiap kolom -->
                            <td><?php echo $row['izin_id'] ?></td>
                            <td><?php echo $row['keperluan'] ?></td>
                            <td><?php echo $row['finger_print'] ?></td>
                            <td><?php echo $row['tgl_mulai_izin'] ?></td>
                            <td><?php echo $row['durasi_izin_hari'] ?></td>
                            <td><?php echo $row['durasi_izin_jam'] ?></td>
                            <td><?php echo $row['durasi_izin_menit'] ?></td>
                            <td><?php echo $row['nama_pengusul'] ?></td>
                            <td><?php echo $row['tgl_usul'] ?></td>
                            <td><?php echo $row['ttd_pengusul'] ?></td>
                            <td><?php echo $row['putusan'] ?></td>
                            <td><?php echo $row['tgl_disetujui'] ?></td>
                            <td><?php echo $row['ttd_atasan'] ?></td>
                            <td><?php echo $row['catatan'] ?></td>
                            <td><?php echo $row['dosen'] ?></td>
                        </tr>
                <?php
                    } // Tutup looping data
                } else {
                    // Jika data kosong, menampilkan pesan data tidak ditemukan
                    echo "<tr><td colspan='16'>Data tidak ditemukan</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>
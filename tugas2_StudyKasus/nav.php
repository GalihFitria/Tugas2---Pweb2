<!-- Navbar yang mengadopsi gaya hijau toska -->
<nav class="navbar navbar-expand-sm navbar-custom navbar-dark">
    <div class="container-fluid">
        <!-- Tautan brand di navbar yang mengarah ke halaman index -->
        <a class="navbar-brand" href="index.php">PIMPINAN</a>

        <!-- Tombol hamburger untuk tampilan mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu navigasi yang dapat di-collapse -->
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">

                <!-- Dropdown menu untuk data pegawai -->
                <li class="nav-item dropdown">
                    <!-- Tautan dropdown untuk bagian PEGAWAI -->
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        PEGAWAI
                    </a>

                    <!-- Isi dari dropdown menu -->
                    <ul class="dropdown-menu">
                        <!-- Tautan ke berbagai halaman laporan pegawai -->
                        <li><a class="dropdown-item" href="tampil_sakit.php">Sakit</a></li>
                        <li><a class="dropdown-item" href="tampil_cuti.php">Cuti</a></li>
                        <li><a class="dropdown-item" href="tampil_khusus.php">Khusus</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
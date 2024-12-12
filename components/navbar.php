<?php
    // Tentukan judul berdasarkan halaman
    $pageTitle = "Judul Halaman Default"; // Default jika halaman tidak ditemukan

    if (basename($_SERVER['PHP_SELF']) == 'dashboard_admin.php') {
        $pageTitle = "Dashboard Admin";
    } elseif (basename($_SERVER['PHP_SELF']) == 'dokter.php') {
        $pageTitle = "Manajemen Dokter";
    } elseif (basename($_SERVER['PHP_SELF']) == 'poli.php') {
        $pageTitle = "Manajemen Poli";
    } elseif (basename($_SERVER['PHP_SELF']) == 'obat.php') {
        $pageTitle = "Manajemen Obat";
    } elseif (basename($_SERVER['PHP_SELF']) == 'pasien.php') {
        $pageTitle = "Manajemen Pasien";
    } elseif (basename($_SERVER['PHP_SELF']) == 'dashboard_pasien.php') {
        $pageTitle = "Dashboard Pasien";
    } elseif (basename($_SERVER['PHP_SELF']) == 'daftarPoliklinik.php') {
        $pageTitle = "Daftar Poli";
    }
    // Tambahkan halaman lain sesuai kebutuhan
?>
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <!-- Ganti judul sesuai dengan variabel PHP -->
            <a href="" class="nav-link"><?php echo $pageTitle; ?></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-header">15 Notifications</span>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-envelope mr-2"></i> 4 new messages
                    <span class="float-right text-muted text-sm">3 mins</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-users mr-2"></i> 8 friend requests
                    <span class="float-right text-muted text-sm">12 hours</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-file mr-2"></i> 3 new reports
                    <span class="float-right text-muted text-sm">2 days</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
            </div>
        </li>

        <!-- Fullscreen -->
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>

        <!-- Logout Button -->
        <li class="nav-item">
            <a href="pages/logout/logout.php" class="nav-link btn btn-danger text-white d-flex align-items-center justify-content-center" style="font-size: 1rem;">
                <i class="bi bi-window-x" style="font-size: 1.5rem; margin-right: 8px;"></i>
                Keluar
            </a>
        </li>
    </ul>
</nav>

<!-- CDN Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

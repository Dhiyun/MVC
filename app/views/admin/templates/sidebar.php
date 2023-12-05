<?php
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if (strpos($path, '/dashboard') !== false || $path === '/admin') {
    $page = 'dashboard';
} elseif (strpos($path, '/ruang') !== false) {
    $page = 'ruang';
} elseif (strpos($path, '/peminjaman') !== false) {
    $page = 'peminjaman';
} elseif (strpos($path, '/jadwal') !== false) {
    $page = 'jadwal';
} elseif (strpos($path, '/history') !== false) {
    $page = 'history';
}
?>

<style>
    .nav-item.active {
        background-color: #2D2852 !important;
    }

    .nav-item:hover {
        background-color: #2D2852; /* Warna latar belakang saat dihover */
    }
</style>

<div class="sidebar border-right col-md-3 col-lg-2 p-0" style="height: 300vh; background-color: #363062;">
    <div class="offcanvas-md offcanvas-end " tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">..</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto" style="background-color: #363062;">
            <ul class="nav flex-column">
                <li class="nav-item <?= $page == 'dashboard' ? 'active' : ''; ?>">
                    <a class="nav-link d-flex align-items-center gap-2" href="<?= ADMINURL ?>/dashboard"
                        style="color: #fff; font-size: 14px;">
                        <img src="../assets/icon/ic-dashboard.png" alt="">
                        Dashboard
                    </a>
                </li>

                <li class="nav-item <?= $page == 'ruang' ? 'active' : ''; ?>">
                    <a class="nav-link d-flex align-items-center gap-2" href="<?= ADMINURL ?>/ruang"
                        style="color: #fff; font-size: 14px;">
                        <img src="../assets/icon/ic-ruang.png" alt="">
                        Ruang
                    </a>
                </li>

                <li class="nav-item <?= $page == 'peminjaman' ? 'active' : ''; ?>">
                    <a class="nav-link d-flex align-items-center gap-2" href="?page=peminjaman"
                        style="color: #fff; font-size: 14px;">
                        <img src="../assets/icon/ic-peminjaman.png" alt="">
                        Peminjaman
                    </a>
                </li>
            </ul>

            <ul class="nav flex-column mb-auto">
                <li class="nav-item <?= $page == 'jadwal' ? 'active' : ''; ?>">
                    <a class="nav-link d-flex align-items-center gap-2" href="?page=jadwal"
                        style="color: #fff; font-size: 14px;">
                        <img src="../assets/icon/ic-jadwal.png" alt="">
                        Jadwal
                    </a>
                </li>

                <li class="nav-item <?= $page == 'history' ? 'active' : ''; ?>">
                    <a class="nav-link d-flex align-items-center gap-2" href="?page=history"
                        style="color: #fff; font-size: 14px;">
                        <img src="../assets/icon/ic-history.png" alt="">
                        History
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<?php
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if (strpos($path, '/dashboard') !== false || $path === '/admin') {
    $page = 'dashboard';
} elseif (strpos($path, '/ruang') !== false) {
    $page = 'ruang';
} elseif (strpos($path, '/dosen') !== false) {
    $page = 'dosen';
} elseif (strpos($path, '/peminjaman') !== false) {
    $page = 'peminjaman';
} elseif (strpos($path, '/jadwal') !== false) {
    $page = 'jadwal';
} elseif (strpos($path, '/history') !== false) {
    $page = 'history';
}
?>

<div class="sidebar border-right col-md-3 col-lg-2 p-0" style="height: 100vh; background-color: #363062;">
    <div class="offcanvas-md offcanvas-end " tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">..</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto"
            style="background-color: #363062;">
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

                <li class="nav-item <?= $page == 'dosen' ? 'active' : ''; ?>">
                    <a class="nav-link d-flex align-items-center gap-2" href="<?= ADMINURL ?>/dosen"
                        style="color: #fff; font-size: 14px;">
                        <img src="../assets/icon/ic-ruang.png" alt="">
                        Dosen
                    </a>
                </li>

                <li class="nav-item <?= $page == 'peminjaman' ? 'active' : ''; ?>">
                    <a class="nav-link d-flex align-items-center gap-2" href="<?= ADMINURL ?>/peminjaman"
                        style="color: #fff; font-size: 14px;">
                        <img src="../assets/icon/ic-peminjaman.png" alt="">
                        Peminjaman
                    </a>
                </li>

                <li class="nav-item <?= $page == 'jadwal' ? 'active' : ''; ?>">
                    <a class="nav-link d-flex align-items-center gap-2" href="<?= ADMINURL ?>/jadwal"
                        style="color: #fff; font-size: 14px;">
                        <img src="../assets/icon/ic-jadwal.png" alt="">
                        Jadwal
                    </a>
                </li>

                <li class="nav-item <?= $page == 'history' ? 'active' : ''; ?>">
                    <a class="nav-link d-flex align-items-center gap-2" href="<?= ADMINURL ?>/history"
                        style="color: #fff; font-size: 14px;">
                        <img src="../assets/icon/ic-history.png" alt="">
                        History
                    </a>
                </li>

                <hr style="border-color: #fff; border-width: 2px;">

                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="<?= BASEURL; ?>log/logout"
                        style="color: #fff; font-size: 14px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26"
                            fill="none">
                            <path
                                d="M16.0571 17.4696C15.7125 21.0665 13.8484 22.5186 9.7986 22.4796L9.66861 22.4784C5.19881 22.4354 3.42612 20.6282 3.46912 16.1584L3.53176 9.64873C3.57477 5.17894 5.38191 3.40625 9.8517 3.44925L9.98169 3.45051C14.0015 3.48918 15.8375 4.95692 16.1334 8.49993"
                                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M10.0002 12.9711L21.3796 13.0806" stroke="white" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M19.1174 16.4089L22.4995 13.0913L19.1819 9.70922" stroke="white"
                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Log Out
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
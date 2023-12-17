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

<div class="sidebar border-right col-md-3 col-lg-2 p-0" style="overflow-y: auto; background-color: #363062; position: fixed; height: 100vh; z-index: 1;">
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M9.16006 10.87C9.06006 10.86 8.94006 10.86 8.83006 10.87C6.45006 10.79 4.56006 8.84 4.56006 6.44C4.56006 3.99 6.54006 2 9.00006 2C11.4501 2 13.4401 3.99 13.4401 6.44C13.4301 8.84 11.5401 10.79 9.16006 10.87Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M16.41 4C18.35 4 19.91 5.57 19.91 7.5C19.91 9.39 18.41 10.93 16.54 11C16.46 10.99 16.37 10.99 16.28 11" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M4.15997 14.56C1.73997 16.18 1.73997 18.82 4.15997 20.43C6.90997 22.27 11.42 22.27 14.17 20.43C16.59 18.81 16.59 16.17 14.17 14.56C11.43 12.73 6.91997 12.73 4.15997 14.56Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M18.3401 20C19.0601 19.85 19.7401 19.56 20.3001 19.13C21.8601 17.96 21.8601 16.03 20.3001 14.86C19.7501 14.44 19.0801 14.16 18.3701 14" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
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
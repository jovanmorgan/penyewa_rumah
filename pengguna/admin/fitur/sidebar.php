<?php
// Dapatkan nama halaman dari URL saat ini tanpa ekstensi 
$current_page = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), "");

// Fungsi untuk mendapatkan ikon yang sesuai dengan halaman
function getIconForPage($page)
{
    switch ($page) {
        case 'home':
            return 'fas fa-home'; // Ikon Home
        case 'manajemen_user':
            return 'fas fa-users'; // Ikon Manajemen User
        case 'galeri':
            return 'fas fa-image'; // Ikon Galeri
        case 'pesan-masuk':
            return 'fas fa-envelope'; // Ikon Pesan Masuk
        case 'pesan-konfirmasi':
            return 'fas fa-check-circle'; // Ikon Pesan Konfirmasi
        case 'profile':
            return 'fas fa-user-circle'; // Ikon Profil
        case 'log_out':
            return 'fas fa-sign-out-alt'; // Ikon Logout
        case 'tambah_kontrakan':
            return 'fas fa-plus'; // Ikon Tambah Kontrakan
        case 'data_kontrakan':
            return 'fas fa-database'; // Ikon Data Kontrakan
        case 'lokasi':
            return 'fas fa-map-marker-alt'; // Ikon Lokasi
        default:
            return 'fas fa-question'; // Ikon default jika halaman tidak dikenal
    }
}
?>

<nav class="pcoded-navbar">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
    <div class="pcoded-inner-navbar main-menu">
        <ul class="pcoded-item pcoded-left-item">
            <li class="<?php echo ($current_page == 'home') ? 'active' : ''; ?>">
                <a href="home" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="<?php echo getIconForPage('home'); ?>"></i><b>B</b></span>
                    <span class="pcoded-mtext">Home</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="<?php echo ($current_page == 'manajemen_user') ? 'active' : ''; ?>">
                <a href="manajemen_user" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i
                            class="<?php echo getIconForPage('manajemen_user'); ?>"></i><b>B</b></span>
                    <span class="pcoded-mtext">Manajemen User</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li
                class="pcoded-hasmenu <?php echo ($current_page == 'tambah_kontrakan' || $current_page == 'data_kontrakan' || $current_page == 'lokasi') ? 'active' : ''; ?>">
                <a href="javascript:void(0)" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="fas fa-building"></i><b>B</b></span>
                    <span class="pcoded-mtext">Manajemen Kontrakan</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="<?php echo ($current_page == 'tambah_kontrakan') ? 'active' : ''; ?>">
                        <a href="tambah_kontrakan" class="waves-effect waves-dark">
                            <i class="<?php echo getIconForPage('tambah_kontrakan'); ?>"></i>
                            <span class="pcoded-mtext ml-2"> Tambah Kontrakan</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="<?php echo ($current_page == 'data_kontrakan') ? 'active' : ''; ?>">
                        <a href="data_kontrakan" class="waves-effect waves-dark">
                            <i class="<?php echo getIconForPage('data_kontrakan'); ?>"></i>
                            <span class="pcoded-mtext ml-2">Data Kontrakan</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="<?php echo ($current_page == 'lokasi') ? 'active' : ''; ?>">
                        <a href="lokasi" class="waves-effect waves-dark">
                            <i class="<?php echo getIconForPage('lokasi'); ?>"></i>
                            <span class="pcoded-mtext ml-2">Lokasi</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>
            <li
                class="pcoded-hasmenu <?php echo ($current_page == 'pesan-masuk' || $current_page == 'pesan-terkonfirmasi') ? 'active' : ''; ?>">
                <a href="javascript:void(0)" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-receipt"></i><b>B</b></span>
                    <span class="pcoded-mtext">Pesan</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="<?php echo ($current_page == 'pesan-masuk') ? 'active' : ''; ?>">
                        <a href="pesan-masuk" class="waves-effect waves-dark">
                            <i class="<?php echo getIconForPage('pesan-masuk'); ?>"></i>
                            <span class="pcoded-mtext ml-2">Pesan Masuk</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="<?php echo ($current_page == 'pesan-konfirmasi') ? 'active' : ''; ?>">
                        <a href="pesan-konfirmasi" class="waves-effect waves-dark">
                            <i class="<?php echo getIconForPage('pesan-konfirmasi'); ?>"></i>
                            <span class="pcoded-mtext ml-2">Pesan Konfirmasi</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="<?php echo ($current_page == 'galeri') ? 'active' : ''; ?>">
                <a href="galeri" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="<?php echo getIconForPage('galeri'); ?>"></i><b>B</b></span>
                    <span class="pcoded-mtext">Galeri</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>
    </div>
</nav>
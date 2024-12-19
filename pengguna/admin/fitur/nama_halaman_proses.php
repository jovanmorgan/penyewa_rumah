<?php
// Dapatkan nama halaman dari URL saat ini tanpa ekstensi .php
$current_page_proses = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), ".php");

// Tentukan judul halaman berdasarkan nama file
switch ($current_page_proses) {
    case 'home':
        $page_title_proses = 'home';
        break;
    case 'manajemen_user':
        $page_title_proses = 'manajemen_user';
        break;
    case 'galeri':
        $page_title_proses = 'galeri';
        break;
    case 'pesan-masuk':
        $page_title_proses = 'pesan_masuk';
        break;
    case 'pesan-konfirmasi':
        $page_title_proses = 'pesan_konfirmasi';
        break;
    case 'tambah_kontrakan':
        $page_title_proses = 'tambah_kontrakan';
        break;
    case 'data_kontrakan':
        $page_title_proses = 'data_kontrakan';
        break;
    case 'lokasi':
        $page_title_proses = 'lokasi';
        break;
    case 'log_out':
        $page_title_proses = 'Log Out';
        break;
    default:
        $page_title_proses = 'Admin Gereja ';
        break;
}

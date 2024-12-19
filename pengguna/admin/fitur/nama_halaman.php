<?php
// Dapatkan nama halaman dari URL saat ini tanpa ekstensi .php
$current_page = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), ".php");

// Tentukan judul halaman berdasarkan nama file
switch ($current_page) {
    case 'home':
        $page_title = 'Home';
        break;
    case 'manajemen_user':
        $page_title = 'Manajemen User';
        break;
    case 'galeri':
        $page_title = 'Galeri';
        break;
    case 'mata_pelajaran':
        $page_title = 'Mata Pelajaran';
        break;
    case 'pesan-masuk':
        $page_title = 'Pesan Masuk';
        break;
    case 'pesan-konfirmasi':
        $page_title = 'Pesan Konfirmasi';
        break;
    case 'tambah_kontrakan':
        $page_title = 'Tambah Kontrakan';
        break;
    case 'data_kontrakan':
        $page_title = 'Data Kontrakan';
        break;
    case 'lokasi':
        $page_title = 'Lokasi';
        break;
    case 'profile':
        $page_title = 'Profile Saya';
        break;
    case 'log_out':
        $page_title = 'Log Out';
        break;
    default:
        $page_title = 'Admin Akademik ';
        break;
}

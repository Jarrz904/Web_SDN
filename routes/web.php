<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - SDN 2 MARGASARI
|--------------------------------------------------------------------------
|
| Di sini adalah tempat Anda mendaftarkan rute web untuk aplikasi Anda.
| Pastikan nama file di resources/views/pages/ sesuai dengan parameter view().
|
*/

// --- HALAMAN UTAMA (BERANDA) ---
Route::get('/', function () {
    // Mengarahkan ke file home.blade.php yang merangkum semua home-sections
    return view('home'); 
});

/**
 * Grup Route untuk Halaman Informasi Sekolah (Folder: resources/views/pages)
 */

// Profil Sekolah (Identitas, Sejarah, & Karakteristik)
Route::get('/profil', function () {
    return view('pages.profil');
});

// Visi, Misi, dan Tujuan Sekolah
Route::get('/visi-misi', function () {
    return view('pages.visi-misi');
});

// Data Guru dan Tenaga Kependidikan
Route::get('/guru', function () {
    return view('pages.guru');
});

// Struktur Organisasi Sekolah
Route::get('/struktur-organisasi', function () {
    // Sinkron dengan file pages/struktur.blade.php yang kita buat
    return view('pages.struktur'); 
});

// Data Statistik Siswa
Route::get('/data-siswa', function () {
    // Sinkron dengan file pages/siswa.blade.php (Data Peserta Didik)
    return view('pages.siswa');
});

/**
 * Grup Route untuk Konten & Aktivitas
 */

// Kegiatan Kesiswaan dan Ekstrakurikuler
Route::get('/kesiswaan', function () {
    return view('pages.kesiswaan');
});

// Galeri Foto Kegiatan
Route::get('/galeri', function () {
    return view('pages.galeri');
});

// Pusat Informasi Sekolah (Rute Baru untuk Menu Informasi)
Route::get('/informasi', function () {
    return view('pages.informasi');
});

/**
 * Grup Route untuk Berita & Artikel
 */

// Daftar Berita/Update Terbaru
Route::get('/berita', function () {
    return view('pages.berita');
});

// Artikel Pendidikan (Blog Sekolah)
Route::get('/artikel', function () {
    // Sinkron dengan file pages/artikel.blade.php yang baru kita buat
    return view('pages.artikel'); 
});

// Detail Artikel (Halaman untuk membaca isi berita secara utuh)
Route::get('/artikel/detail', function () {
    return view('pages.artikel-detail');
});

/**
 * Informasi Lainnya
 */
Route::get('/kontak', function () {
    return view('pages.kontak');
});
<?php

// Mengarahkan Vercel untuk mengeksekusi file public/index.php milik Laravel
require __DIR__ . '/../public/index.php';

// Memaksa inisialisasi core service jika terlewat oleh runtime
if (isset($app) && !$app->booted()) {
    $app->boot();
}
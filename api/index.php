<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Memuat Autoloader Vendor
require __DIR__ . '/../vendor/autoload.php';

// Memuat Aplikasi Laravel
$app = require_once __DIR__ . '/../bootstrap/app.php';

// Menjalankan Request Aplikasi secara Normal
$app->handleRequest(Request::capture());
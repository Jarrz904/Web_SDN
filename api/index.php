<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

require __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';

// 🔥 PERBAIKAN: Menggunakan ->instance() agar lolos dari validasi Type Hint Laravel modern
$app->instance(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    new class implements Illuminate\Contracts\Debug\ExceptionHandler {
        public function report(\Throwable $e) {}
        public function shouldReport(\Throwable $e) { return false; }
        public function render($request, \Throwable $e) {
            echo "<h1>🚨 BIANG KEROK UTAMA DITEMUKAN!</h1>";
            echo "<p><b>Pesan Error:</b> " . $e->getMessage() . "</p>";
            echo "<p><b>Terjadi di File:</b> " . $e->getFile() . " (Baris " . $e->getLine() . ")</p>";
            echo "<br><b>Trace System:</b><pre>" . $e->getTraceAsString() . "</pre>";
            exit;
        }
        public function renderForConsole($output, \Throwable $e) {}
    }
);

// Jalankan aplikasi
$app->handleRequest(Request::capture());
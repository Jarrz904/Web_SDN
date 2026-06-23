<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

require __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';

try {
    // Kita bypass handleRequest() agar bisa menangkap error pertama sebelum Laravel Exception Handler crash
    $kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
    $request = Request::capture();
    $response = $kernel->handle($request);
    $response->send();
    $kernel->terminate($request, $response);
} catch (\Throwable $e) {
    // Tampilkan error asli langsung ke layar/log Vercel
    echo "🚨 BIANG KEROK ERROR: " . $e->getMessage() . " | Lokasi: " . $e->getFile() . " baris " . $e->getLine();
    exit;
}
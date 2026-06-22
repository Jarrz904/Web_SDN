<?php

// 1. Load Autoloader
require __DIR__ . '/../vendor/autoload.php';

// 2. Load Aplikasi
$app = require_once __DIR__ . '/../bootstrap/app.php';

// 3. PAKSA BOOTSTRAP (Ini kunci agar sistem 'view' terdaftar)
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

// 4. Handle Request
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();
$kernel->terminate($request, $response);
<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

require __DIR__ . '/../vendor/autoload.php';

try {
    (require_once __DIR__ . '/../bootstrap/app.php')
        ->handleRequest(Request::capture());
} catch (\Throwable $e) {
    // Ini akan memaksa Vercel memunculkan nama Class yang hilang di log/browser
    echo "🚨 ERRORNYA DISINI: " . $e->getMessage();
    exit;
}
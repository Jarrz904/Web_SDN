<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// 1. Muat autoload dari root vendor
require __DIR__ . '/../vendor/autoload.php';

// 2. Jalankan bootstrap & handle request khas Laravel 12
(require_once __DIR__ . '/../bootstrap/app.php')
    ->handleRequest(Request::capture());
<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/config/database.php';
require_once __DIR__ . '/core/helpers.php';
require_once __DIR__ . '/core/router.php';

/*
|--------------------------------------------------------------------------
| Native router sudah jalan
|--------------------------------------------------------------------------
| router.php bertugas:
| - parse URL
| - tentukan halaman (home, post, category, dll)
| - SET $route_found = true jika ketemu
*/

if (!isset($route_found) || $route_found === false) {
    // 🔁 fallback ke WordPress TANPA ubah URL
    require __DIR__ . '/cms/index.php';
    exit;
}

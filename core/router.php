<?php
// Ambil URL path
$request = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

// default: belum ketemu route native
$route_found = false;

// Variabel untuk di-pass ke pages
$slug = '';

// Routing
if ($request === '') {
    // Homepage (native)
    $route_found = true;
    require __DIR__ . '/../pages/home.php';
    return;

} elseif (preg_match('/^category\/(.+)$/', $request, $matches)) {
    // Kategori (native)
    $category_slug = $matches[1];

    // OPTIONAL: cek apakah kategori ada
    if (native_category_exists($category_slug)) {
        $route_found = true;
        require __DIR__ . '/../pages/category.php';
        return;
    }

} else {
    // Single post (native)
    $slug = $request;

    // CEK: apakah post ada di native DB?
    if ($post = native_get_post($slug)) {
        $route_found = true;
        require __DIR__ . '/../pages/post.php';
        return;
    }
}

// kalau sampai sini → native tidak menangani URL
// biarkan $route_found = false

<?php
require_once __DIR__ . '/../templates/header-post.php';
require_once __DIR__ . '/../core/helpers.php';

$slug = $slug ?? '';

if (!$slug) {
    require __DIR__ . '/404.php';
    require_once __DIR__ . '/../templates/footer.php';
    exit;
}

$post = native_get_post($slug);

if ($post) {
    $categories = native_get_post_categories($post['id']);
    $category_list = [];
    foreach ($categories as $cat) {
        $category_list[] = "<a href='".BASE_URL."category/{$cat['slug']}'>{$cat['name']}</a>";
    }
    $categories_html = implode(', ', $category_list);

?>

<div id="intro">
<link itemprop="mainEntityOfPage" href="https://muhrid.com/rekomendasi-nasi-gila-bandung-terbaik-untuk-dicoba/" />
<meta itemprop="inLanguage" content="id_ID">
<h1 itemprop="headline"><?= $post['title'] ?></h1>
<div class="meta">
<span content="2021-11-29"><?= $post['date'] ?></span>
<span><a href="https://muhrid.com/kategori/jalan-jalan/" rel="tag">Jalan-Jalan</a>, <a href="https://muhrid.com/kategori/resep-dan-makanan/" rel="tag">Resep dan Makanan</a></span>
<span itemprop="author"><span itemscope="itemscope" itemtype="http://schema.org/Person"><span itemprop="name">Muhammad Riduan</span></span></span>
<span>&copy; Protected by COPYSCAPE</span>
<meta itemprop="datePublished" content="2021-11-29">
<meta itemprop="dateModified" content="2021-12-05">
</div>
</div>

<?php

    echo "<article>";
    echo "<h1>{$post['title']}</h1>";
    if ($categories_html) {
        echo "<p>Categories: {$categories_html}</p>";
    }
    $content = parse_caption_shortcode($post['content']);
    echo "<div>" . $content . "</div>";
    echo "<p><small>Published: ".date('d M Y', strtotime($post['date']))."</small></p>";
    echo "</article>";

} else {
    require __DIR__ . '/404.php';
}

require_once __DIR__ . '/../templates/footer.php';

<?php
require_once __DIR__ . '/../config/database.php';
$articles = native_get_posts(10);

$page_title = 'Muhammad Riduan';
$page_description = 'Berbagi pengalaman hidup, tutorial, sains, dan informasi.';

include __DIR__ . '/../templates/header.php';
?>

<div id="intro">
	<h2 itemprop="headline">Berbagi Pengalaman Hidup, Tutorial, Sains, dan Informasi</h2>
	<p>Muhrid.com merupakan blog pribadi Muhammad Riduan yang berisi pengalaman hidup, tutorial, sains, dan informasi lain yang saya rasa layak untuk dibagikan dan dapat bermanfaat bagi orang banyak.</p>
	<form class="form" method="get" action="//muhrid.com/">
		<input type="text" name="s" id="s" placeholder="Pencarian" />
		<button type="submit"><span class="icon-search"></span></button>
	</form>
</div>

<div id="archive">
<div class="wrap">
<div class="info">
<h2 itemprop="headline">Arsip Blog</h2>
<p>Kategori artikel yang tersedia di blog Muhrid.com agar bisa memberikan informasi sebanyak mungkin.</p>
</div>
<div class="archive">
<div class="box">
<a itemprop="url" title="Catatan MUHRID" href="kategori/catatan-muhrid/"><div class="box-icon">
<span class="icon-book"></span>
</div>
<div class="box-caption">Catatan</div></a>
</div>
<div class="box">
<a itemprop="url" title="Jalan-Jalan" href="kategori/jalan-jalan/"><div class="box-icon">
<span class="icon-airplane"></span>
</div>
<div class="box-caption">Jalan-Jalan</div></a>
</div>
<div class="box">
<a itemprop="url" title="Tutorial" href="kategori/tutorial/"><div class="box-icon">
<span class="icon-list"></span>
</div>
<div class="box-caption">Tutorial</div></a>
</div>
<div class="box">
<a itemprop="url" title="Ulasan" href="kategori/ulasan/"><div class="box-icon">
<span class="icon-chat"></span>
</div>
<div class="box-caption">Ulasan</div></a>
</div>
<div class="box">
<a itemprop="url" title="Tanya Kenapa" href="kategori/tanya-kenapa/"><div class="box-icon">
<span class="icon-question-circle"></span>
</div>
<div class="box-caption">Tanya Kenapa</div></a>
</div>
<div class="box">
<a itemprop="url" title="Permainan" href="kategori/permainan/"><div class="box-icon">
<span class="icon-gamepad"></span>
</div>
<div class="box-caption">Permainan</div></a>
</div>
<div class="box">
<a itemprop="url" title="Kesehatan" href="kategori/kesehatan/"><div class="box-icon">
<span class="icon-aid-kit"></span>
</div>
<div class="box-caption">Kesehatan</div></a>
</div>
<div class="box">
<a itemprop="url" title="Islami" href="kategori/islami/"><div class="box-icon">
<span class="icon-moon-and-star"></span>
</div>
<div class="box-caption">Islami</div></a>
</div>
<div class="box">
<a itemprop="url" title="Farmasi" href="kategori/farmasi/"><div class="box-icon">
<span class="icon-pil"></span>
</div>
<div class="box-caption">Farmasi</div></a>
</div>
<div class="box">
<a itemprop="url" title="Webinar" href="/webinar/"><div class="box-icon">
<span class="icon-bullhorn"></span>
</div>
<div class="box-caption">Webinar</div></a>
</div>
</div>
</div>
</div>
<div id="more">
<div class="more">
<h2 itemprop="headline">Semua Artikel</h2>
<p>Telusuri semua artikel yang ada di Muhrid.com.</p>
<a itemprop="url" title="Blog Muhammad Riduan" href="blog/">Lihat semua artikel</a>
</div>
</div>

<!-- <div id="articles">
<?php foreach ($articles as $post): ?>
<article>
<h3><a href="/<?= $post['slug'] ?>"><?= htmlspecialchars($post['title']) ?></a></h3>
<p><?= htmlspecialchars($post['excerpt']) ?></p>
</article>
<?php endforeach; ?>
</div> -->

<?php include __DIR__ . '/../templates/footer.php'; ?>

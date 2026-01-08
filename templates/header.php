<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title><?= $page_title ?? 'Muhammad Riduan' ?></title>
<meta name="description" content="<?= $page_description ?? 'Catatan Muhammad Riduan berbagi tentang pengalaman hidup, tutorial, sains, dan informasi' ?>" />
<link rel="stylesheet" href="/public/assets/css/main.css" />
<link rel="icon" href="/public/assets/img/favicon.png" />
</head>

<body itemscope="itemscope" itemtype="http://schema.org/Blog">

<div id="container">

<header itemprop="mainEntity" itemscope="itemscope" itemtype="http://schema.org/WPHeader">

<div class="header">
    <picture>
        <source srcset="https://muhrid.com/assets/muhrid.webp" type="image/webp">
        <source srcset="https://muhrid.com/assets/muhrid.png" type="image/png"> 
        <img data-no-lazy="1" src="https://muhrid.com/assets/muhrid.png" alt="MUHRID" width="32" height="32">
    </picture>

    <h1 itemprop="headline"><a href="https://muhrid.com/" itemprop="url" title="Muhrid.com" rel="home">MUHRID</a></h1>
</div>

<div class="right">
    <span class="tog">Dark mode</span>
    <button class="mode" aria-label="Toggle Light Mode" onclick="toggleTheme()"> <span></span><span></span></button> 

    <nav itemprop="mainEntity" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
    
    <input class="toggle" type="checkbox" />
    <div class="hamburger">
        <div></div>
    </div>
    
    <div class="menu">
        <div>
            <div>
            <ul>
                <li><a href="https://muhrid.com/blog/" title="Blog MUHRID" itemprop="url"><span itemprop="name">Blog (Kumpulan Artikel)</span></a></li>
                <li><a href="https://muhrid.com/daftar-isi/" itemprop="url"><span itemprop="name">Arsip Artikel</span></a></li>
                <li><a href="https://muhrid.com/about-me/" itemprop="url"><span itemprop="name">Tentang MUHRID</span></a></li>
                <li><a rel="privacy-policy" href="https://muhrid.com/privacy-policy/" itemprop="url"><span itemprop="name">Kebijakan Privasi</span></a></li>
                <li><a href="https://muhrid.com/disclaimer/" itemprop="url"><span itemprop="name">Sanggahan</span></a></li>
                <li><a href="https://muhrid.com/contact/" itemprop="url"><span itemprop="name">Kontak</span></a></li>
            </ul>
            </div>
        </div>
    </div>
    
    </nav>
</div>
</header>

<main>
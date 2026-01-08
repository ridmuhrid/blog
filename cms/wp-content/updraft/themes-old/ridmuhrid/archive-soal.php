<!DOCTYPE html>
<html <?php language_attributes();?>>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo('pingback_url');?>" />
<meta name=viewport content="width=device-width,initial-scale=1,maximum-scale=1">
<title>Arsip Pembahasan Soal | Muhrid.com</title>
<meta name="description" content="Arsip pembahasan soal untuk membantu teman-teman yang kesulitan dalam menjawab soal berbagai mata pelajaran." />
<meta property="fb:pages" content="462275083787417" />
<meta property="og:locale" content="id_ID" />
<meta property="og:type" content="object" />
<meta property="og:title" content="Arsip Pembahasan Soal" />
<meta property="og:description" content="Arsip pembahasan soal untuk membantu teman-teman yang kesulitan dalam menjawab soal berbagai mata pelajaran." />
<meta property="og:url" content="https://muhrid.com/soal/" />
<meta property="og:site_name" content="Muhrid.com" />
<meta property="og:image" content="https://muhrid.com/assets/logo.png" />
<meta property="og:image:secure_url" content="https://muhrid.com/assets/logo.png" />
<meta property="og:image:width" content="200" />
<meta property="og:image:height" content="200" />
<meta property="og:image:alt" content="Arsip Pembahasan Soal" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:creator" content="@ridmuhrid" />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel='https://api.w.org/' href='https://muhrid.com/wp-json/' />
<link rel='stylesheet' href='//muhrid.com/wp-content/themes/ridmuhrid/styleV1.css' type='text/css' media='all' />
<link rel="icon" href="https://muhrid.com/wp-content/uploads/2017/09/favicon.png" sizes="32x32" />
</head>
<body itemscope="itemscope" itemtype="http://schema.org/Blog">
<div id="container">
<header itemprop="mainEntity" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
<div class="header">
<picture>
<source srcset="https://muhrid.com/assets/muhrid.webp" type="image/webp">
<source srcset="https://muhrid.com/assets/muhrid.png" type="image/png"> 
<img data-no-lazy="1" src="https://muhrid.com/assets/muhrid.png" alt="MUHRID">
</picture>
<h2 itemprop="headline"><a href="https://muhrid.com/" itemprop="url" title="Muhrid.com" rel="home">MUHRID</a></h2>
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
<?php
if(false===($menu=get_transient('primary_menu'))){
ob_start();
$defaults=array('menu'=>'Menu Header','container'=>'false','container_class'=>'','container_id'=>'','menu_class'=>'','menu_id'=>'false','echo'=>true,'fallback_cb'=>'wp_page_menu','before'=>'','after'=>'','link_before'=>'<span itemprop="name">','link_after'=>'</span>','items_wrap'=>'%3$s');
wp_nav_menu($defaults);
$menu=ob_get_clean();
set_transient('primary_menu',$menu,MONTH_IN_SECONDS);
}
echo $menu;?>
</ul>
</div>
</div>
</div>
</nav>
</div>
</header>
<main>
<div id="intro">
<div class="intro">
<h1 itemprop="headline">Arsip Pembahasan Soal</h1>
<p>Arsip pembahasan soal untuk membantu teman-teman yang kesulitan dalam menjawab soal berbagai mata pelajaran.<?php if(current_user_can('administrator')){echo '<br><a href="https://muhrid.com/wp-admin/post-new.php?post_type=soal">[Tambah Baru]</a>';}?></p>
</div>
</div>
<div class="soal">
<?php 
$current_page=(get_query_var('paged'))?get_query_var('paged'):1;
$per_page='6';
$soal_args=array('post_type'=>'soal','posts_per_page'=>$per_page,'paged'=>$current_page);
$soal=new WP_Query($soal_args);
$i=1;
while($soal->have_posts()):$soal->the_post();?>
<a itemprop="url" title="<?php the_title();?>" href="<?php the_permalink();?>"><?php the_title();?></a>
<?php $i+=1;
endwhile;?>
</div>
<div class="pagination">
<?php
previous_posts_link('<div class="prev">&laquo;</div>');
if($paged=="0"){echo '<div class="current">1</div>';}
else {echo '<div clhaass="current">'.$paged.'</div>';}
next_posts_link('<div class="next">&raquo;</div>');
?>
</main>
<footer>
<p><span>© Muhrid.com 2013-2022. Hak Cipta Dilindungi Undang-Undang</span><span>Dibuat dengan ❤ oleh Muhammad Riduan</span></p>
</footer>
</div>
<script>function toggleTheme(){"dark"===document.documentElement.getAttribute("data-theme")?changeTheme("light"):changeTheme("dark")}function changeTheme(e){document.documentElement.setAttribute("data-theme",e),localStorage.setItem("theme",e)}window.onload=(e=>{const t=window.matchMedia("(prefers-color-scheme: dark)");localStorage.getItem("theme"),changeTheme(localStorage.getItem("theme")),t.addListener(e=>{e.matches?changeTheme("dark"):changeTheme("light")})});</script>
</body>
</html>
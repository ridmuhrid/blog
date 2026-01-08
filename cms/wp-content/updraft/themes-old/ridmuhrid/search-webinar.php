<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo('pingback_url');?>" />
<meta name=viewport content="width=device-width,initial-scale=1,maximum-scale=1">
<?php if(is_single()){?>
<meta name="keywords" content="<?php echo get_post_meta($post->ID,'keywords',true);?>" />
<?php }?>
<meta name="google-site-verification" content="jAFL3xhGnHeC3tqx0Vk5_BO2yCTF1vQG73lFOVFggcs" />
<meta property="fb:pages" content="462275083787417" />
<meta name="msvalidate.01" content="19C6E9DBD098715585AC0B1F8C337805" />
<meta name="verifikasi" content="8dtkwq4l7z"/>
<?php wp_head();?>
</head>
<body itemscope="itemscope" itemtype="http://schema.org/Blog">
<div id="container">
<header itemprop="mainEntity" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
<div>
<a href="https://muhrid.com/webinar/"><span class="web-date"></span>
<p>Jadwal</p></a>
</div>
<div>
<a href="https://muhrid.com/jawabanP2AB/"><span class="web-key"></span>
<p>Jawaban</p></a>
</div>
<div class="home">
<a href="https://muhrid.com/"><picture>
<source srcset="https://muhrid.com/assets/muhrid.webp" type="image/webp">
<source srcset="https://muhrid.com/assets/muhrid.png" type="image/png"> 
<img data-no-lazy="1" src="https://muhrid.com/assets/muhrid.png" alt="MUHRID">
</picture></a>
<h2>MUHRID</h2>
</div>
<div>
<a href="https://t.me/CPDapoteker"><span class="web-group"></span>
<p>Grup</p></a>
</div>
<div>
<span class="web-brightness-contrast" onclick="toggleTheme()"></span>
<p>Dark Mode</p>
</div>
</header>
<main>
<div id="intro">
<h1 itemprop="headline">Hasil Pencarian: <?php echo $s;?></h1>
<?php
if(have_posts()){echo"<p>Hasil pencarian webinar dengan kata kunci <b>".$s."</b>.</p>";}
else{echo"<p>Mohon maaf, webinar dengan kata kunci <b>".$s."</b> tidak ditemukan.</p>";}?>
<form class="form" role="search" method="get" id="searchform" class="searchform" action="https://muhrid.com/webinar/">
<label class="screen-reader-text" for="s"></label>
<input type="text" class="input" value="" name="s" id="s" placeholder="Pencarian" />
<input type="hidden" name="post_type" value="webinar" />
<button class="button"><span class="web-search"></span></button>
</form>
</div>
<?php 
date_default_timezone_set('Asia/Makassar');
function tgl_indo($tanggal){
$hari=array (1 =>'Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu');
$bulan=array (1 =>'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
$pecahkan=explode('/',$tanggal);
return $hari[(int)$pecahkan[0] ].', '.$pecahkan[2].' '.$bulan[(int)$pecahkan[1]].' '.$pecahkan[3];
}?>
<div id="webinar">
<div id="article">
<div class="post">
<?php while(have_posts()):the_post();?>
<article itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost" id="post-<?php the_ID();?>">
<div class="details">
<img src="<?php echo the_post_thumbnail_url('full');?>" alt="<?php the_title();?>" title="<?php the_title();?>">
<a rel="bookmark" itemprop="url" href="<?php the_permalink();?>" title="<?php the_title();?>"><h3 itemprop="headline"><?php the_title();?></h3></a>
<p><span class="web-date"></span> <?php echo tgl_indo(date('N/m/j/Y',strtotime(get_post_meta(get_the_ID(),'tgl',true))));?></p>
<p><span class="web-clock"></span> <?php echo get_post_meta(get_the_ID(),'jam',true);?> WIB</p>
<p>Link sertifikat:
     <?php
     $serti=get_post_meta(get_the_ID(),'sertifikat',true);
     $biaya=get_post_meta(get_the_ID(),'biaya',true);
     if(!empty($serti)){echo '<a class="br" target="_blank" href="'.$serti.'">'.$serti.'</a>';}
     elseif ($biaya!='Gratis'){echo "Silakan hubungi panitia kegiatan.";} 
     else {echo "Belum tersedia/belum ada informasi.";}?>
     </p>
</div>
</article><?php endwhile;?>
</div>
<div class="pagination">
<?php
previous_posts_link('<div class="prev">&laquo;</div>');
if($paged=="0"){echo'<div class="current">1</div>';}
else {echo'<div class="current">'.$paged.'</div>';}
next_posts_link('<div class="next">&raquo;</div>');
?>
</div>
</div>
</div>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-SEEB4L7PGC"></script>
<script> window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'G-SEEB4L7PGC');</script>
<!--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119775070-1"></script>
<script>window.dataLayer=window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js',new Date());gtag('config','UA-119775070-1');</script>-->
<?php get_footer(); ?>
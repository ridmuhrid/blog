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
<div class="header">
<picture>
<source srcset="https://muhrid.com/assets/muhrid.webp" type="image/webp">
<source srcset="https://muhrid.com/assets/muhrid.png" type="image/png"> 
<img data-no-lazy="1" src="https://muhrid.com/assets/muhrid.png" alt="MUHRID" width="32" height="32">
</picture>
<?php if(is_front_page()) {?>
<h1 itemprop="headline"><a href="https://muhrid.com/" itemprop="url" title="Muhrid.com" rel="home">MUHRID</a></h1> <?php }
else { ?>
<h2 itemprop="headline"><a href="https://muhrid.com/" itemprop="url" title="Muhrid.com" rel="home">MUHRID</a></h2> <?php } ?>
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
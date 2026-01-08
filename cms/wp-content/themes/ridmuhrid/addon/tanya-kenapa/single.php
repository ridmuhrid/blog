<?php get_header();?>
<div id="main">
<div class="inner">
<div class="blogpost">
<?php while (have_posts()):the_post();?>
<article id="post-<?php the_ID(); ?>" itemprop="blogPost" itemscope="itemscope" itemtype="http://schema.org/BlogPosting">
<link itemprop="mainEntityOfPage" href="<?php echo get_permalink();?>" />
<meta itemprop="inLanguage" content="id_ID">
<h1 class="title" itemprop="headline"><?php the_title()?></h1>
<div class="meta">
<span class="date updated" content="<?php echo get_the_date('Y-m-d');?>"><?php echo get_the_date(); ?></span>
<span class="category"><?php if(has_tag()){the_terms($post->ID,'post_tag','',', ');}else{the_terms($post->ID,'category','',', ');}?></span>
<span class="vcard author" itemprop="author"><span class="fn" itemscope="itemscope" itemtype="http://schema.org/Person"><span itemprop="name"><?php echo get_the_author();?></span></span></span>
<meta itemprop="datePublished" content="<?php echo get_the_date('Y-m-d');?>">
<meta itemprop="dateModified" content="<?php echo get_the_date('Y-m-d');?>">
<span class="copyscape">&copy; Protected by COPYSCAPE</span>
</div>
<?php if(function_exists('yoast_breadcrumb')){yoast_breadcrumb('<p id="breadcrumbs">','</p>');}?>
<div class="article">
<div itemprop="image" itemscope="itemscope" itemtype="https://schema.org/ImageObject">
<?php if(has_post_thumbnail()){$image_data=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),"thumbnail");
$image_url=$image_data[0];
$image_width=$image_data[1];
$image_height=$image_data[2];
echo '<meta content="'.$image_url.'" itemprop="url"/>
<meta content="'.$image_width.'" itemprop="width"/>
<meta content="'.$image_height.'" itemprop="height"/>';
}
else { ?>
<meta content="<?php echo get_stylesheet_directory_uri();?>/assets/img/thumbnail.png" itemprop="url"/>
<meta content="470" itemprop="width"/>
<meta content="246" itemprop="height"/>
<?php ;}?>
</div>
<div class="ads">
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-8110219725052650"
     data-ad-slot="3558546221"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<?php $prev_post=get_previous_post(true,'','category');if(!empty($prev_post)):?><blockquote>Artikel sebelumnya: <a href="<?php echo esc_url(get_permalink($prev_post->ID));?>"><?php echo esc_attr($prev_post->post_title);?></a></blockquote>
<?php endif;?>
<span itemprop="articleBody"><?php the_content();?></span>
</div>
<div itemprop="publisher" itemscope="itemscope" itemtype="https://schema.org/Organization">
<div itemprop="logo" itemscope="itemscope" itemtype="https://schema.org/ImageObject">
<meta itemprop="url" content="<?php echo get_stylesheet_directory_uri();?>/assets/img/logo.png" />
<meta itemprop="width" content="200"/>
<meta itemprop="height" content="200"/>
</div>
<meta itemprop="name" content="<?php echo get_bloginfo("name"); ?>"/>
</div>
</article>
<?php $next_post=get_next_post(true,'','category');if(!empty($next_post)):?><blockquote>Artikel selanjutnya: <a href="<?php echo esc_url(get_permalink($next_post->ID));?>"><?php echo esc_attr($next_post->post_title);?></a></blockquote>
<?php endif;
$title=get_the_title();
$link=get_permalink();
$title=str_replace(" ","%20",$title);
?>
<div class="comment">
<div class="comment-box">
<?php comments_template();?>
<?php endwhile;?>
</div>
</div>
</div><div class="sidebar">
<div class="related">
<h2>Artikel Terkait</h2>
<?php
global $post;
$current_post=$post;
for($i=1;$i<=5;$i++){
$post=get_next_post(true,'','category');
setup_postdata($post);
if(!empty($post)){?>
<a href="<?php the_permalink()?>"><?php the_title()?></a>
<?php }
else {echo '<a href="https://muhrid.com/kategori/tanya-kenapa/">Semua artikel kategori Tanya Kenapa</a>';
$i=6;}
}
$post=$current_post;?>
</div>
<div class="share">
<p>Silakan bagikan tulisan ini kepada teman-teman Anda.</p>
<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $link;?>" rel="nofollow" target="_blank" class="fb" title="Bagikan artikel di Facebook"><svg viewBox="0 0 512 512"><path d="M211.9 197.4h-36.7v59.9h36.7V433.1h70.5V256.5h49.2l5.2-59.1h-54.4c0 0 0-22.1 0-33.7 0-13.9 2.8-19.5 16.3-19.5 10.9 0 38.2 0 38.2 0V82.9c0 0-40.2 0-48.8 0 -52.5 0-76.1 23.1-76.1 67.3C211.9 188.8 211.9 197.4 211.9 197.4z"/></svg><!--[if lt IE 9]><em>Facebook</em><![endif]--></a>
<a href="https://twitter.com/intent/tweet?text=<?php echo $title;?>&url=<?php echo $link;?>" class="twitter" title="Bagikan artikel di Twitter"><svg viewBox="0 0 512 512"><path d="M419.6 168.6c-11.7 5.2-24.2 8.7-37.4 10.2 13.4-8.1 23.8-20.8 28.6-36 -12.6 7.5-26.5 12.9-41.3 15.8 -11.9-12.6-28.8-20.6-47.5-20.6 -42 0-72.9 39.2-63.4 79.9 -54.1-2.7-102.1-28.6-134.2-68 -17 29.2-8.8 67.5 20.1 86.9 -10.7-0.3-20.7-3.3-29.5-8.1 -0.7 30.2 20.9 58.4 52.2 64.6 -9.2 2.5-19.2 3.1-29.4 1.1 8.3 25.9 32.3 44.7 60.8 45.2 -27.4 21.4-61.8 31-96.4 27 28.8 18.5 63 29.2 99.8 29.2 120.8 0 189.1-102.1 185-193.6C399.9 193.1 410.9 181.7 419.6 168.6z"/></svg><!--[if lt IE 9]><em>Twitter</em><![endif]--></a>
<a href="https://plus.google.com/share?url=<?php echo $link;?>" class="google" title="Bagikan artikel di Google+"><svg viewBox="0 0 512 512"><path d="M179.7 237.6L179.7 284.2 256.7 284.2C253.6 304.2 233.4 342.9 179.7 342.9 133.4 342.9 95.6 304.4 95.6 257 95.6 209.6 133.4 171.1 179.7 171.1 206.1 171.1 223.7 182.4 233.8 192.1L270.6 156.6C247 134.4 216.4 121 179.7 121 104.7 121 44 181.8 44 257 44 332.2 104.7 393 179.7 393 258 393 310 337.8 310 260.1 310 251.2 309 244.4 307.9 237.6L179.7 237.6 179.7 237.6ZM468 236.7L429.3 236.7 429.3 198 390.7 198 390.7 236.7 352 236.7 352 275.3 390.7 275.3 390.7 314 429.3 314 429.3 275.3 468 275.3"/></svg><!--[if lt IE 9]><em>GooglePlus</em><![endif]--></a>
</div>
</div>
</div>
</div>
<?php get_footer();?>
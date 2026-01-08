<!doctype html>
<html amp <?php echo AMP_HTML_Utils::build_attributes_string($this->get('html_tag_attributes'));?> itemscope itemtype="http://schema.org/BlogPosting">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
<title><?php the_title();?></title>
<meta name="description" content="<?php echo get_the_excerpt();?>"/>
<link itemprop="mainEntityOfPage" rel="canonical" href="<?php echo get_permalink();?>" />
<link rel="icon" href="https://muhrid.com/wp-content/uploads/2017/09/favicon.png" sizes="32x32" />
<script type='text/javascript' src='https://cdn.ampproject.org/v0.js' async></script>
<script custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js" async></script>
<script async custom-element="amp-auto-ads" src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js"></script>
<?php if(get_post_meta(get_the_ID(),'amp_iframe',true)){echo'<script async custom-element="amp-iframe" src="https://cdn.ampproject.org/v0/amp-iframe-0.1.js"></script>';}?>
<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style>
<noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
<style amp-custom>
<?php $this->load_parts(array('style'));?>
<?php do_action('amp_post_template_css',$this);?>
</style>
</head>
<body class="<?php echo esc_attr($this->get('body_class'));?>">
<amp-auto-ads type="adsense" data-ad-client="ca-pub-8110219725052650"></amp-auto-ads>
<header id="top" class="amp-wp-header">
<div>
<a href="<?php echo esc_url($this->get('home_url'));?>">
<amp-img src="https://muhrid.com/assets/muhrid.png" width="32" height="32" class="amp-wp-site-icon"></amp-img>
<span class="amp-site-title">MUHRID</span>
</a>
</div>
</header>
<article class="amp-wp-article">
<header class="amp-wp-article-header">
<h1 itemprop="headline" class="amp-wp-title"><?php echo esc_html($this->get('post_title'));?></h1>
<div itemprop="author" itemscope itemtype="https://schema.org/Person" class="amp-wp-meta amp-wp-byline">
<span itemprop="name" class="amp-wp-author author vcard">Muhammad Riduan</span>
</div>
<div class="amp-wp-meta amp-wp-posted-on">
<time itemprop="datePublished" datetime="<?php echo get_the_date('Y-m-d');?>T<?php the_time('H:i:sT');?>"><?php echo human_time_diff(get_the_time('U'),current_time('timestamp')).' yang lalu';?></time>
<time itemprop="dateModified" datetime="<?php the_modified_date('Y-m-d');?>T<?php the_modified_time('H:i:sT');?>"></time>
</div>
</header>
<div class="amp-wp-article-content">
<?php if(has_term('kunci-jawaban-tebak-gambar','post_tag')){?>
<p><?php the_title();?> terbaru beserta gambarnya yang bisa membantu Anda saat mengalami kebuntuan dalam bermain game Tebak Gambar. Dapatkan kunci jawaban tebak gambar dengan berbagai level di halaman Kunci Jawaban Tebak Gambar.</p>
<?php if($this->get('post_amp_content')==NULL){echo '<p>Jika kunci jawaban '.get_the_title().' ini belum tersedia padahal game Tebak Gambar sudah sampai di level '.str_replace("Kunci Jawaban Tebak Gambar","",get_the_title()).', silakan kunjungi halaman <a href="'.get_the_permalink().'">'.get_the_title().' non-AMP</a> untuk keluar dari halaman cache AMP Google yang belum diperbarui.</p><p>Mohon maaf, '.get_the_title().' saat ini belum tersedia karena level di dalam game Tebak Gambar belum sampai ke '.str_replace("Kunci Jawaban Tebak Gambar","",get_the_title()).', silakan tunggu atau coba tanyakan soal yang tidak bisa Anda jawab di grup <a href="http://muhrid.com/gruptebakgambar/">Kunci Jawaban Tebak Gambar di WhatsApp</a>, saya akan usahakan membalas pesan Anda sesegera mungkin.</p>';}else{echo $this->get('post_amp_content');}?>
<p><?php the_title();?> ini terakhir diperbarui pada tanggal <?php the_modified_date();?> dengan sedikit perubahan. Silakan laporkan melalui grup <a href="http://muhrid.com/gruptebakgambar/">Kunci Jawaban Tebak Gambar di WhatsApp</a> jika ada jawaban yang sudah tidak sesuai dengan soal tebak gambar versi terbaru atau ada soal terbaru yang ingin ditanyakan dan didiskusikan.</p>
<p class="level">Kunci jawaban Tebak Gambar level lainnya:<br> 
<?php 
if(false===($level=get_transient('tebakgambar'))){$level=new WP_Query(array('tag'=>'kunci-jawaban-tebak-gambar','post_type'=>'post','post_status'=>'publish','posts_per_page'=>-1,'order'=>'ASC'));set_transient('tebakgambar',$level,MONTH_IN_SECONDS);}
get_transient('tebakgambar');
while($level->have_posts()){$level->the_post();echo'<a href="'.get_the_permalink().'/amp/">'.str_replace("Kunci Jawaban Tebak Gambar ","",get_the_title()).'</a>';} wp_reset_postdata();?></p>
</div>
<?php } else {?>
<?php echo $this->get('post_amp_content');}?>
<div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
<div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
<meta itemprop="url" content="https://muhrid.com/assets/logo.png">
<meta itemprop="width" content="200"/>
<meta itemprop="height" content="200">
</div>
<meta itemprop="name" content="Muhrid.com">
</div>
<div itemprop="image" itemscope="itemscope" itemtype="https://schema.org/ImageObject">
<?php if(has_post_thumbnail()){
$image_data=wp_get_attachment_image_src(get_post_thumbnail_id(),"thumbnail");
$image_url=$image_data[0];
$image_width=$image_data[1];
$image_height=$image_data[2];
echo '<meta content="'.$image_url.'" itemprop="url"/>
<meta content="'.$image_width.'" itemprop="width"/>
<meta content="'.$image_height.'" itemprop="height"/>';
}
else { ?>
<meta content="https://muhrid.com/assets/thumbnail.jpg" itemprop="url"/>
<meta content="470" itemprop="width"/>
<meta content="246" itemprop="height"/>
<?php ;}?>
</div>
</div>
<footer class="amp-wp-article-footer">
<?php if(!has_term('kunci-jawaban-tebak-gambar','post_tag')){
$this->load_parts(apply_filters('amp_post_article_footer_meta',array('meta-taxonomy','meta-comments-link')));}
else {$this->load_parts(apply_filters('amp_post_article_footer_meta',array('meta-taxonomy')));}
?>
</footer>
</article>
<footer class="amp-wp-footer">
<div>
<h2>Muhrid.com</h2>
<p>&copy; Dibuat dengan &#x2764; oleh Muhammad Riduan.</p>
</div>
</footer>
<?php do_action('amp_post_template_footer',$this);?>
<amp-analytics type="googleanalytics" id="analytics1">
<script type="application/json">{"vars":{"account":"UA-119775070-1","anonymizeIP":"true"},"triggers":{"trackPageview":{"on":"visible","request":"pageview"}}}</script></amp-analytics>
</body>
</html>
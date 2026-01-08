<?php get_header();?>
<?php while(have_posts()):the_post();?>
<article id="post-<?php the_ID();?>" itemprop="blogPost" itemscope="itemscope" itemtype="http://schema.org/BlogPosting">
<div id="intro">
<link itemprop="mainEntityOfPage" href="<?php echo get_permalink();?>" />
<meta itemprop="inLanguage" content="id_ID">
<h1 itemprop="headline"><?php the_title()?></h1>
<div class="meta">
<span content="<?php echo get_the_date('Y-m-d');?>"><?php echo get_the_date();?></span>
<span itemprop="author"><span itemscope="itemscope" itemtype="http://schema.org/Person"><span itemprop="name"><?php echo get_the_author();?></span></span></span>
<meta itemprop="datePublished" content="<?php echo get_the_date('Y-m-d');?>">
<meta itemprop="dateModified" content="<?php echo get_the_modified_date('Y-m-d');?>">
</div>
</div>
<div id="bpage">
<?php yoast_breadcrumb('<p id="breadcrumbs">','</p>');?>
<div itemprop="image" itemscope="itemscope" itemtype="https://schema.org/ImageObject">
<?php if(has_post_thumbnail()){
$image_data=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),"thumbnail");
$image_url=$image_data[0];
$image_width=$image_data[1];
$image_height=$image_data[2];
echo'<meta content="'.$image_url.'" itemprop="url"/>
<meta content="'.$image_width.'" itemprop="width"/>
<meta content="'.$image_height.'" itemprop="height"/>';}
else {?>
<meta content="https://muhrid.com/assets/thumbnail.jpg" itemprop="url"/>
<meta content="470" itemprop="width"/>
<meta content="246" itemprop="height"/>
<?php ;}?>
</div>
<span class="article" itemprop="articleBody"><?php the_content();?></span>
<?php if(!is_admin()){edit_post_link('Sunting ini','<p>','</p>');}?>
<div itemprop="publisher" itemscope="itemscope" itemtype="https://schema.org/Organization">
<div itemprop="logo" itemscope="itemscope" itemtype="https://schema.org/ImageObject">
<meta itemprop="url" content="https://muhrid.com/assets/logo.png"/>
<meta itemprop="width" content="200"/>
<meta itemprop="height" content="200"/>
</div>
<meta itemprop="name" content="<?php echo get_bloginfo("name");?>"/>
</div>
<div class="comment">
<div class="comment-box">
<?php comments_template();?>
<?php endwhile;?>
</div>
</div>
<?php
$title=get_the_title();
$link=get_permalink();
$title=str_replace(" ","%20",$title);
?>
<div class="share">
<p>Silakan bagikan hadits ini kepada teman-teman Anda.</p>
<a href="whatsapp://send?text=<?php echo $link;?>" rel="nofollow" target="_blank" class="wa" title="Bagikan artikel di WhatsApp"><svg viewBox="0 0 24 24"><path d="M18.403 5.633A8.919 8.919 0 0 0 12.053 3c-4.948 0-8.976 4.027-8.978 8.977c0 1.582.413 3.126 1.198 4.488L3 21.116l4.759-1.249a8.981 8.981 0 0 0 4.29 1.093h.004c4.947 0 8.975-4.027 8.977-8.977a8.926 8.926 0 0 0-2.627-6.35m-6.35 13.812h-.003a7.446 7.446 0 0 1-3.798-1.041l-.272-.162l-2.824.741l.753-2.753l-.177-.282a7.448 7.448 0 0 1-1.141-3.971c.002-4.114 3.349-7.461 7.465-7.461a7.413 7.413 0 0 1 5.275 2.188a7.42 7.42 0 0 1 2.183 5.279c-.002 4.114-3.349 7.462-7.461 7.462m4.093-5.589c-.225-.113-1.327-.655-1.533-.73c-.205-.075-.354-.112-.504.112s-.58.729-.711.879s-.262.168-.486.056s-.947-.349-1.804-1.113c-.667-.595-1.117-1.329-1.248-1.554s-.014-.346.099-.458c.101-.1.224-.262.336-.393c.112-.131.149-.224.224-.374s.038-.281-.019-.393c-.056-.113-.505-1.217-.692-1.666c-.181-.435-.366-.377-.504-.383a9.65 9.65 0 0 0-.429-.008a.826.826 0 0 0-.599.28c-.206.225-.785.767-.785 1.871s.804 2.171.916 2.321c.112.15 1.582 2.415 3.832 3.387c.536.231.954.369 1.279.473c.537.171 1.026.146 1.413.089c.431-.064 1.327-.542 1.514-1.066c.187-.524.187-.973.131-1.067c-.056-.094-.207-.151-.43-.263"/></svg></a>
<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $link;?>" rel="nofollow" target="_blank" class="fb" title="Bagikan artikel di Facebook"><svg viewBox="0 0 512 512"><path d="M211.9 197.4h-36.7v59.9h36.7V433.1h70.5V256.5h49.2l5.2-59.1h-54.4c0 0 0-22.1 0-33.7 0-13.9 2.8-19.5 16.3-19.5 10.9 0 38.2 0 38.2 0V82.9c0 0-40.2 0-48.8 0 -52.5 0-76.1 23.1-76.1 67.3C211.9 188.8 211.9 197.4 211.9 197.4z"/></svg></a>
<a href="https://twitter.com/intent/tweet?text=<?php echo $title;?>&url=<?php echo $link;?>" rel="nofollow" target="_blank" class="twitter" title="Bagikan artikel di Twitter"><svg viewBox="0 0 512 512"><path d="M419.6 168.6c-11.7 5.2-24.2 8.7-37.4 10.2 13.4-8.1 23.8-20.8 28.6-36 -12.6 7.5-26.5 12.9-41.3 15.8 -11.9-12.6-28.8-20.6-47.5-20.6 -42 0-72.9 39.2-63.4 79.9 -54.1-2.7-102.1-28.6-134.2-68 -17 29.2-8.8 67.5 20.1 86.9 -10.7-0.3-20.7-3.3-29.5-8.1 -0.7 30.2 20.9 58.4 52.2 64.6 -9.2 2.5-19.2 3.1-29.4 1.1 8.3 25.9 32.3 44.7 60.8 45.2 -27.4 21.4-61.8 31-96.4 27 28.8 18.5 63 29.2 99.8 29.2 120.8 0 189.1-102.1 185-193.6C399.9 193.1 410.9 181.7 419.6 168.6z"/></svg></a>
</div>
</div>
</article>
</main>
<footer>
<p><span>© Muhrid.com 2013-2022. Hak Cipta Dilindungi Undang-Undang</span><span>Dibuat dengan ❤ oleh Muhammad Riduan</span></p>
</footer>
</div>
<script>function toggleTheme(){"dark"===document.documentElement.getAttribute("data-theme")?changeTheme("light"):changeTheme("dark")}function changeTheme(e){document.documentElement.setAttribute("data-theme",e),localStorage.setItem("theme",e)}window.onload=(e=>{const t=window.matchMedia("(prefers-color-scheme: dark)");localStorage.getItem("theme"),changeTheme(localStorage.getItem("theme")),t.addListener(e=>{e.matches?changeTheme("dark"):changeTheme("light")})});</script>
</body>
</html>
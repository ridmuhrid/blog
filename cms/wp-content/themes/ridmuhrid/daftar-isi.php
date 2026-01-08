<?php /* Template Name: Template Daftar Isi */ 
get_header();?>
<?php while (have_posts()):the_post();?>
<article id="post-<?php the_ID();?>" itemprop="blogPost" itemscope="itemscope" itemtype="http://schema.org/BlogPosting">
<div id="intro">
<link itemprop="mainEntityOfPage" href="<?php echo get_permalink();?>" />
<meta itemprop="inLanguage" content="id_ID">
<h1 itemprop="headline"><?php the_title()?></h1>
<p>Arsip artikel dan kategori di blog MUHRID.com</p>
<div class="meta">
<meta itemprop="datePublished" content="<?php echo get_the_date('Y-m-d');?>">
<meta itemprop="dateModified" content="<?php echo get_the_modified_date('Y-m-d');?>">
</div>
</div>
<div id="page">
<div itemprop="image" itemscope="itemscope" itemtype="https://schema.org/ImageObject">
<meta content="https://muhrid.com/assets/thumbnail.jpg" itemprop="url"/>
<meta content="470" itemprop="width"/>
<meta content="246" itemprop="height"/>
</div>
<div class="article" itemprop="articleBody">
	<div class="list">
<h2 class="title">Arsip Kategori</h2>
<?php $categories=get_categories(array('orderby'=>'name','parent'=>0));
foreach ($categories as $category){ echo '<a href="#'.$category->slug.'">'.$category->name.'</a>';}?>
</div>
<?php
$categories=get_categories(array('orderby'=>'name','parent'=>0));
foreach ($categories as $category){
echo'<div id="'.$category->slug.'" class="related"><h2 class="title">'.$category->name.'</h2>';
$idcat=$category->term_id;
$nama='daftarisi'.str_replace('-','',$category->slug);
if(false===($wpb_all_query=get_transient($nama))){
$wpb_all_query = new WP_Query(array('category__in'=>$idcat,'post_type'=>'post','post_status'=>'publish','posts_per_page'=>-1));
set_transient($nama,$wpb_all_query,MONTH_IN_SECONDS);
}
get_transient($nama);
?>
<div>
<?php
while ($wpb_all_query->have_posts()){$wpb_all_query->the_post();?>
<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
<?php }?>
</div>
</div>
<?php 
wp_reset_postdata();}?>
</div>
<div itemprop="publisher" itemscope="itemscope" itemtype="https://schema.org/Organization">
<div itemprop="logo" itemscope="itemscope" itemtype="https://schema.org/ImageObject">
<meta itemprop="url" content="https://muhrid.com/assets/logo.png" />
<meta itemprop="width" content="200"/>
<meta itemprop="height" content="200"/>
</div>
<meta itemprop="name" content="<?php echo get_bloginfo("name"); ?>"/>
</div>
<?php endwhile;?>
</div>
</article>
<?php get_footer();?>
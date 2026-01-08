<?php /* Template Name: Template Pesan Anonim */ 
get_header();?>

<?php while (have_posts()):the_post();?>
<article id="post-<?php the_ID();?>" itemprop="blogPost" itemscope="itemscope" itemtype="http://schema.org/BlogPosting">
<div id="intro">
<link itemprop="mainEntityOfPage" href="<?php echo get_permalink();?>" />
<meta itemprop="inLanguage" content="id_ID">
<h1 itemprop="headline"><?php the_title()?></h1>
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
<span class="article" itemprop="articleBody"><?php the_content();?></span>
<?php comments_template('/addon/messages.php');?>
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
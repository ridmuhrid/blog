<?php /* Template Name: Template Komentar Tebak Gambar */ 
get_header();?>
<?php while(have_posts()):the_post();?>
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
<div class="article" itemprop="articleBody"><?php the_content();?></div>
<div itemprop="publisher" itemscope="itemscope" itemtype="https://schema.org/Organization">
<div itemprop="logo" itemscope="itemscope" itemtype="https://schema.org/ImageObject">
<meta itemprop="url" content="https://muhrid.com/assets/logo.png" />
<meta itemprop="width" content="200"/>
<meta itemprop="height" content="200"/>
</div>
<meta itemprop="name" content="<?php echo get_bloginfo("name"); ?>"/>
</div>
<?php endwhile;?>
<div class="tanya"><a href="#tanya" title="Tinggalkan komentar">Tanyakan sesuatu</a></div>
<div class="comment">
<div class="comment-box">
<ol class="comment-list">
<h2 class="comments-title"><?php $comments_number=get_comments_number();if(1===$comments_number){printf(_x('1 pesan pada "%s"','comments title','muhrid'),get_the_title());}else{printf(_nx('%1$s pesan pada "%2$s"','%1$s pesan pada "%2$s"',$comments_number,'comments title','muhrid'),number_format_i18n($comments_number),get_the_title());}?></h2>
<?php
$comments=get_comments(array('post_id'=>7563,'status'=>'approve'));
wp_list_comments(array('per_page'=>10,'avatar_size'=>0,'reverse_top_level'=>false),$comments);?>
</ol>
<div id="tanya"><?php comment_form(array('title_reply_before'=>'<h2 id="reply-title" class="comment-reply-title">','title_reply_after'=>'</h2>',));?></div>
</div>
</div>
</div>
</article>
<?php get_footer();?>
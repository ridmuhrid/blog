<?php get_header();?>
<div id="intro">
<h1 itemprop="headline">Kunci Jawaban Webinar IAI</h1>
<p>Kunci jawaban soal kuis dari kegiatan webinar Ikatan Apoteker Indonesia (IAI) yang ada di website P2AB (live dan on demand).</p>
<form class="form" role="search" method="get" id="searchform" class="searchform" action="https://muhrid.com/">
<label class="screen-reader-text" for="s"></label>
<input type="text" class="input" value="" name="s" id="s" placeholder="Pencarian" />
<button class="button">&#128269;</button>
</form>
</div>
<div id="article">
<div class="post">
<?php while(have_posts()):the_post();?>
<article itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost" id="post-<?php the_ID();?>">
<img src="<?php if(has_post_thumbnail()){echo the_post_thumbnail_url('full');}?>" alt="<?php the_title();?>" title="<?php the_title();?>">
<div class="details">
<a rel="bookmark" itemprop="url" href="<?php the_permalink();?>" title="<?php the_title();?>"><h3 itemprop="headline"><?php the_title();?></h3>
<hr style="margin:1em 0">
<?php $desc=get_post_meta(get_the_ID(),'_yoast_wpseo_metadesc',true);
if($desc==NULL){echo'<p itemprop="text">'.get_the_excerpt().'</p>';}
else{echo'<p itemprop="text">'.str_replace("%%title%%",get_the_title(),$desc).'</p>';}?>
</a></div>
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
<?php get_footer(); ?>
<?php get_header();?>
<div id="intro">
<div class="intro">
<h1 itemprop="headline">Kunci Jawaban Tebak Gambar</h1>
<p>Kumpulan kunci jawaban tebak gambar terbaru beserta gambarnya berbagai level yang bisa membantu Anda saat mengalami kebuntuan dalam menjawab soal dari permainan Tebak Gambar :)</p>
</div>
</div>
<div class="tegam">
<?php 
if(false===($arsip=get_transient('tebakgambar'))){
$arsip=new WP_Query(array('tag_id'=>'557','posts_per_page'=>-1,'order'=>'ASC'));
set_transient('tebakgambar',$arsip,MONTH_IN_SECONDS);
}
get_transient('tebakgambar');
while($arsip->have_posts()){$arsip->the_post();?>
<a itemprop="url" title="<?php the_title();?>" href="<?php the_permalink();?>"><?php echo substr(get_the_title(),27);?></a>
<?php }?>
</div>
<?php get_footer();?>
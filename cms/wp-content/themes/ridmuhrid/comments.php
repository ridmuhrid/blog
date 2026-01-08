<?php if(post_password_required()){return;}?>
<div id="comments" class="comments-area">
<div class="comments">
<details>
<summary>
<h2>Komentar pada artikel "<?php echo get_the_title();?>"</h2>
<small>Klik bagian ini untuk membuka riwayat komentar</small>
</summary>
<div>
<?php if(have_comments()) {?>
<ol class="comment-list">
<?php
$idpost=get_the_ID();
$nama='komen'.$idpost;
if(false===($komentar=get_transient($nama))){
ob_start();
wp_list_comments(array('style'=>'ol','short_ping'=>true,'avatar_size'=>30));
$komentar=ob_get_contents();
ob_end_clean();
set_transient($nama,$komentar,MONTH_IN_SECONDS);}
echo $komentar;
?>
</ol>
<?php ;}
else {echo '<div id="respond">Belum ada riwayat komentar pada postingan ini. Jadilah yang pertama memberikan komentar atau pertanyaan melalui form komentar di bawah.</div>';}?>
</div>
</details>
</div>
<?php
if(!comments_open()&&get_comments_number()&&post_type_supports(get_post_type(),'comments')){?>
<p class="no-comments"><?php _e('Komentar ditutup.','muhrid');?></p>
<?php };?>
<?php comment_form(array('title_reply_before'=>'<h2 id="reply-title" class="comment-reply-title">','title_reply_after'=>'</h2>',));?>
</div>
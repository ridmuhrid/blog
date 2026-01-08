<div id="comments" class="comments-area">
<?php if(have_comments()):?>
<?php the_comments_navigation();?>
<ol class="comment-list">
<?php wp_list_comments(array('style'=>'ol'));?>
</ol>
<?php the_comments_navigation();?>
<?php endif;?>
<?php
if(!comments_open()&&get_comments_number()&&post_type_supports(get_post_type(),'comments')):?>
<p class="no-comments"><?php _e('Komentar ditutup.','muhrid');?></p>
<?php endif;?>
<div id="respond" class="comment-respond">
<div id="reply-title" class="comment-reply-title"><a rel="nofollow" id="cancel-comment-reply-link" href="#respond" style="display:none;">Batalkan balasan</a></div>
<form action="//muhrid.com/wp-comments-post.php" method="post" id="commentform" class="comment-form">
<p class="comment-form-comment"><label for="comment">Tulis bacotan sebagai Anonim</label><textarea id="comment" name="comment" cols="45" rows="5" maxlength="500" required="required"></textarea></p>
<p style="display:none" class="comment-form-author"><label for="author">Nama</label> <input id="author" name="author" type="text" value="Anonim" size="30" maxlength="245" /></p>
<p style="display:none" class="comment-form-email"><label for="email">Email</label> <input id="email" name="email" type="text" value="pesananonim@muhrid.com" size="30" maxlength="100" aria-describedby="email-notes" /></p>
<p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Kirim Bacotan" /> <input type='hidden' name='comment_post_ID' value='5547' id='comment_post_ID' />
<input type='hidden' name='comment_parent' id='comment_parent' value='0' />
</p><p style="display:none;"><input type="hidden" id="akismet_comment_nonce" name="akismet_comment_nonce" value="fd3d56ac31" /></p><p style="display: none;"><input type="hidden" id="ak_js" name="ak_js" value="28"/></p>			</form>
</div>
</div>
<article>
    <h1><?= $post->post_title ?></h1>
    <div><?= $post->post_content ?></div>
    <p><small>Published: <?= date('d M Y', strtotime($post->post_date)) ?></small></p>
</article>

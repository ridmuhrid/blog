<?php
require_once __DIR__ . '/../config/database.php';

function native_get_posts($limit = 10) {
    global $conn;
    $limit = (int) $limit;
    $sql = "SELECT ID, post_title, post_name, post_content, post_date 
            FROM wp_posts
            WHERE post_status='publish' AND post_type='post'
            ORDER BY post_date DESC
            LIMIT $limit";
    $result = $conn->query($sql);
    $posts = [];
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $posts[] = [
                'id'      => $row['ID'],
                'title'   => $row['post_title'],
                'slug'    => $row['post_name'],
                'content' => $row['post_content'],
                'excerpt' => substr(strip_tags($row['post_content']), 0, 200),
                'date'    => $row['post_date']
            ];
        }
    }
    return $posts;
}

function native_get_post($slug) {
    global $conn;
    $sql = "SELECT 
                ID,
                post_title,
                post_name,
                post_content,
                post_date
            FROM wp_posts
            WHERE post_status = 'publish'
              AND post_type = 'post'
              AND post_name = ?
            LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $slug);
    $stmt->execute();
    $row = $stmt->get_result()->fetch_assoc();
    if (!$row) {
        return null;
    }
    return [
        'id'      => $row['ID'],
        'title'   => $row['post_title'],
        'slug'    => $row['post_name'],
        'content' => $row['post_content'],
        'excerpt' => mb_substr(strip_tags($row['post_content']), 0, 200),
        'date'    => $row['post_date']
    ];
}

function native_get_post_categories($post_id) {
    global $conn;
    $sql = "SELECT t.name, t.slug
            FROM wp_terms t
            JOIN wp_term_taxonomy tt ON t.term_id = tt.term_id
            JOIN wp_term_relationships tr ON tt.term_taxonomy_id = tr.term_taxonomy_id
            WHERE tr.object_id = ? AND tt.taxonomy = 'category'";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $post_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $categories = [];
    while ($row = $result->fetch_assoc()) {
        $categories[] = $row;
    }
    return $categories;
}

function native_category_exists($slug) {
    global $conn;
    $stmt = $conn->prepare("SELECT term_id FROM wp_terms WHERE slug = ? LIMIT 1");
    $stmt->bind_param('s', $slug);
    $stmt->execute();
    return $stmt->get_result()->num_rows > 0;
}

function parse_caption_shortcode($content) {
    return preg_replace_callback(
        '/\[caption([^\]]*)\](.*?)\[\/caption\]/is',
        function ($matches) {

            $attrs = $matches[1];
            $inner = trim($matches[2]);

            preg_match('/width="(\d+)"/', $attrs, $width);
            preg_match('/align="([^"]+)"/', $attrs, $align);

            $width = $width[1] ?? '';
            $align = $align[1] ?? 'alignnone';

            // Ambil IMG jika ada
            preg_match('/<img[^>]+>/i', $inner, $imgMatch);
            $img = $imgMatch[0] ?? '';

            // Caption text = inner tanpa img
            $caption = trim(strip_tags(str_replace($img, '', $inner)));

            return '
            <div class="wp-caption '.$align.'" style="max-width:'.$width.'px">
                '.$img.'
                <p class="wp-caption-text">'.$caption.'</p>
            </div>';
        },
        $content
    );
}

<?php
function attmenu($atts,$item,$args){$atts['itemprop']='url';return $atts;}
function menuid($id,$item,$args){return "";}
function menuclass($classes,$item,$args){return array();}
function excerpt($length){return 15;}
function querystring($src){$parts=explode('?ver',$src);return $parts[0];}
function cleantag($input){$input=str_replace("type='text/javascript' ",'',$input);return str_replace("'",'"',$input);}
function comment(){if(is_singular()&&have_comments()){wp_enqueue_script('comment-reply');}}
function headscripts(){remove_action('wp_head','wp_print_scripts');remove_action('wp_head','wp_print_head_scripts',9);remove_action('wp_head','wp_enqueue_scripts',1);add_action('wp_footer','wp_print_scripts',5);add_action('wp_footer','wp_enqueue_scripts',5);add_action('wp_footer','wp_print_head_scripts',5);}
function tebakgambar($single_template){global $post;if(has_term('kunci-jawaban-tebak-gambar','post_tag')){$single_template=dirname(__FILE__).'/addon/tebak-gambar/single.php';}return $single_template;}
function p2ab($single_template){global $post;if(has_term('kunci-jawaban-webinar-iai','post_tag')){$single_template=dirname(__FILE__).'/addon/p2ab/single.php';}return $single_template;}
function bahassoal($single_template){global $post;if(has_term('pembahasan-soal','category')){$single_template=dirname(__FILE__).'/addon/soal.php';}return $single_template;}
function style(){
if(is_front_page()){wp_register_style('stylesheet','https://muhrid.com/assets/main.v1.1.css','1.0',false);wp_enqueue_style('stylesheet');}
elseif(is_single()&&has_tag('kunci-jawaban-tebak-gambar')){wp_register_style('stylesheet','https://muhrid.com/assets/tebakgambarV1.css','1.0',false);wp_enqueue_style('stylesheet');}
elseif(is_single()&&has_tag('kunci-jawaban-webinar-iai')){wp_register_style('stylesheet',get_template_directory_uri().'/addon/p2ab/p2ab.v1.1.css','1.0',false);wp_enqueue_style('stylesheet');}
elseif(is_single()&&has_category('pembahasan-soal')){wp_register_style('stylesheet',get_template_directory_uri().'/addon/soalV1.css',array(),'5.0');wp_enqueue_style('stylesheet');}
elseif(is_post_type_archive('webinar')||is_singular('webinar')||is_page('database-webinar')){wp_register_style('stylesheet',get_template_directory_uri().'/addon/webinar/webinar.v3.2.css',array(),'5.0');wp_enqueue_style('stylesheet');}
else{wp_register_style('stylesheet',get_template_directory_uri().'/style.v3.css','1.0',false);wp_enqueue_style('stylesheet');}
}
function toolset_fix_custom_posts_per_page($query_string){if(is_admin()||!is_array($query_string))return $query_string;$post_types_to_fix=array(array('post_type'=>'hadits','posts_per_page'=>6),array('post_type'=>'bacot','posts_per_page'=>6),);foreach($post_types_to_fix as $fix){if(array_key_exists('post_type',$query_string)&&$query_string['post_type']==$fix['post_type']){$query_string['posts_per_page']=$fix['posts_per_page'];return $query_string;}}return $query_string;}
function perbaruan(){$date=get_the_date('U');$updated=get_the_modified_date('U');$output='<span content="'.get_the_date('Y-m-d').'">'.get_the_date().'</span>
';if($updated>($date+MONTH_IN_SECONDS))$output='<span content="'.get_the_modified_date('Y-m-d').'">Perbaruan: '.get_the_modified_date().'</span>
';return $output;}
function speed_stop_loading_wp_embed(){if(!is_admin()){wp_deregister_script('wp-embed');}}
function wpassist_remove_block_library_css(){wp_dequeue_style('wp-block-library');} 
function mind_set_cookie_expire($time){return time() + 10;}
function postview(){$count=(int) get_post_meta(get_the_ID(),'post_views_count',true);$count++;update_post_meta(get_the_ID(),'post_views_count',$count);}
function column_views($columns){$columns['post_views']='Pengunjung';return $columns;}
function custom_column_views($column){if($column==='post_views'){$count=get_post_meta(get_the_ID(),'post_views_count',true);echo $count;}}
function sortingpageview($columns){$columns['post_views']='post_views';return $columns;}
function reqsortingpageview($vars){if(isset($vars['orderby'])&&'post_views'==$vars['orderby']){$vars=array_merge($vars,array('meta_key'=>'post_views_count','orderby'=>'meta_value_num'));}return $vars;}
add_filter('manage_posts_columns','column_views');
add_filter('manage_edit-post_sortable_columns','sortingpageview');
add_filter('request','reqsortingpageview');
add_action('manage_posts_custom_column','custom_column_views');
add_filter('post_password_expires','mind_set_cookie_expire');
if(!is_admin()){add_filter('script_loader_src','querystring',15,1);add_filter('style_loader_src','querystring',15,1);}
add_filter('script_loader_tag','cleantag');
add_filter('nav_menu_item_id','menuid',10,3);
add_filter('nav_menu_css_class','menuclass',10,3);
add_filter('nav_menu_link_attributes','attmenu',10,3);
add_filter('excerpt_length','excerpt',999);
add_filter('single_template','tebakgambar');
add_filter('single_template','p2ab');
add_filter('request','toolset_fix_custom_posts_per_page');
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
register_nav_menu('primary','Menu Header');
remove_action('wp_head','wp_generator');
remove_action('wp_head','print_emoji_detection_script',7);
remove_action('wp_print_styles','print_emoji_styles');
remove_action('admin_print_scripts','print_emoji_detection_script');
remove_action('admin_print_styles','print_emoji_styles');
add_action('wp_enqueue_scripts','comment');
add_action('wp_enqueue_scripts','headscripts');
add_action('wp_enqueue_scripts','style');
add_action('wp_enqueue_scripts','wpassist_remove_block_library_css');
add_filter('amp_post_template_file','amp_set_cutome_style_path',10,3);
add_action('init','speed_stop_loading_wp_embed');
add_shortcode('be_published_modified_date','perbaruan');
function amp_set_cutome_style_path($file,$type,$post){if('style'===$type){$file=dirname(__FILE__).'/amp/style.php';}return $file;}
// add_filter('amp_post_template_file','set_my_amp_custom_template',10,3);
// function set_my_amp_custom_template($file,$type,$post){if('single'===$type){$file=dirname(__FILE__).'/amp/single.php';}return $file;}
function renamewebinar($filename){if(isset($_REQUEST['post_id'])){$post_id=$_REQUEST['post_id'];}if(get_post_type($post_id)=="webinar"){$info=pathinfo($filename);$ext=empty($info['extension'] ) ? '' : '.' . $info['extension'];$name=basename($filename,$ext);
$a=preg_replace('/[^a-z0-9 ]/i','',get_the_title($post_id));
// $a=array(' ',' & ',',');
// $b=array('-','','');
return str_replace(' ','-',$a).$ext;}else {return $filename;}}
//matikan function di bawah ini untuk tebak gambar
//function my_set_image_meta_upon_image_upload($post_ID){if(wp_attachment_is_image($post_ID)){if(isset($_REQUEST['post_id'])){$post_id=$_REQUEST['post_id'];}else{$post_id=false;}if($post_id!=false){$gbr=get_the_title($post_id);}else{$gbr=get_post($post_ID)->post_title;}$gbr=preg_replace('%\s*[-_\s]+\s*%',' ',$gbr);$my_image_meta=array('ID'=>$post_ID,'post_title'=>$gbr,'post_excerpt' =>$gbr,'post_content' =>$gbr,);update_post_meta($post_ID,'_wp_attachment_image_alt',$gbr);wp_update_post($my_image_meta);}}
add_filter('sanitize_file_name','renamewebinar',10);
//matikan action di bawah ini untuk tebak gambar, lalu aktifkan plugin
//add_action('add_attachment','my_set_image_meta_upon_image_upload');

// Register Custom Post Types
function my_custom_post_types() {
    // Custom Post Type: Hadits
    register_post_type('hadits', array(
        'labels' => array(
            'name' => __('Hadits'),
            'singular_name' => __('Hadits'),
            'add_new' => __('Add New'),
            'add_new_item' => __('Add New Hadits'),
            'edit_item' => __('Edit Hadits'),
            'new_item' => __('New Hadits'),
            'view_item' => __('View Hadits'),
            'search_items' => __('Search Hadits'),
            'not_found' => __('No Hadits found'),
            'not_found_in_trash' => __('No Hadits found in Trash'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor'),
        'rewrite' => array('slug' => 'hadits'),
    ));

    // Custom Post Type: Bacot
    register_post_type('bacot', array(
        'labels' => array(
            'name' => __('Bacotan'),
            'singular_name' => __('Bacot'),
            'add_new' => __('Add New'),
            'add_new_item' => __('Add New Bacot'),
            'edit_item' => __('Edit Bacot'),
            'new_item' => __('New Bacot'),
            'view_item' => __('View Bacot'),
            'search_items' => __('Search Bacot'),
            'not_found' => __('No Bacot found'),
            'not_found_in_trash' => __('No Bacot found in Trash'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'comments'),
        'rewrite' => array('slug' => 'bacot'),
    ));

    // Custom Post Type: Soal
    register_post_type('soal', array(
        'labels' => array(
            'name' => __('Bahas Soal'),
            'singular_name' => __('Bahas Soal'),
            'add_new' => __('Add New'),
            'add_new_item' => __('Add New Soal'),
            'edit_item' => __('Edit Soal'),
            'new_item' => __('New Soal'),
            'view_item' => __('View Soal'),
            'search_items' => __('Search Soal'),
            'not_found' => __('No Soal found'),
            'not_found_in_trash' => __('No Soal found in Trash'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor'),
        'rewrite' => array('slug' => 'soal'),
    ));

    // Custom Post Type: Webinar
    register_post_type('webinar', array(
        'labels' => array(
            'name' => __('Webinar'),
            'singular_name' => __('Webinar'),
            'add_new' => __('Add New'),
            'add_new_item' => __('Add New Webinar'),
            'edit_item' => __('Edit Webinar'),
            'new_item' => __('New Webinar'),
            'view_item' => __('View Webinar'),
            'search_items' => __('Search Webinar'),
            'not_found' => __('No Webinar found'),
            'not_found_in_trash' => __('No Webinar found in Trash'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'rewrite' => array('slug' => 'webinar'),
    ));
}
add_action('init', 'my_custom_post_types');

// Register Custom Taxonomy: Kategori untuk Webinar
function my_custom_taxonomy_kategori() {
    register_taxonomy('kategori', 'webinar', array(
        'labels' => array(
            'name' => __('Kategori'),
            'singular_name' => __('Kategori'),
            'search_items' => __('Search Kategori'),
            'all_items' => __('All Kategori'),
            'edit_item' => __('Edit Kategori'),
            'update_item' => __('Update Kategori'),
            'add_new_item' => __('Add New Kategori'),
            'new_item_name' => __('New Kategori Name'),
            'menu_name' => __('Kategori'),
        ),
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_in_nav_menus' => true,
        'show_in_rest' => true, // Menambahkan untuk Gutenberg
        'rewrite' => array('slug' => 'kategori'),
    ));
}
add_action('init', 'my_custom_taxonomy_kategori');


?>
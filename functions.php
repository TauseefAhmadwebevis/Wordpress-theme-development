<?php  
    function Addstylesheets(){
        wp_enqueue_style('Boot Strap CDN','//stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');
        wp_enqueue_style('Google Fonts','//fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,900;1,400;1,600&display=swap');
        wp_enqueue_style('Main Style Sheet', get_theme_file_uri('/style.css'), NULL, microtime());
        wp_enqueue_script('Boot Strap Jquery', '//code.jquery.com/jquery-3.4.1.slim.min.js', TRUE, microtime() , true);
        wp_enqueue_script('Boot Strap Min .js', '//stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', TRUE, microtime() , true);
        wp_enqueue_script('Proper min js', 'cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', TRUE, microtime() , true);
    }
    add_action('wp_enqueue_scripts','Addstylesheets');
    // function get top ancestor id
    function get_top_ancestor_id(){
        global $post;
        if($post->post_parent){
            $ancestors = array_reverse(get_post_ancestors($post->ID));
            return $ancestors[0];
        }
        return $post->ID;
    }
    //////////// has children function 
    function has_children(){
        global $post;
        $pages = get_pages('child_of'. $post->ID);
        return count($pages);
    }
    ////////////// cusatomize excerpet legth 
    function custompostlength(){
        return 25;
    }
    add_filter('excerpt_length','custompostlength');
    // add theme support things 
    function add_title_tags(){
        register_nav_menu('mainmenue','Header Menue');
        register_nav_menu('footermenue','Footer Menue');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_image_size('small-thumbnail', 230, 200, true);
        add_image_size('banner-image', 960, 210, true);
    }
    add_action('after_setup_theme','add_title_tags');
?>

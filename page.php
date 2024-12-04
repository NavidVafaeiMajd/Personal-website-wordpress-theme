<?php
if(!defined('ABSPATH')){
    wp_die();
}

$stylePlaceHolder = TD . '/asset/css/single.css';
include 'header.php';
if(have_posts()){
    while(have_posts()){
        the_post();
        $postTitle = get_the_title();
        $postID = get_the_ID();
        $thumbnails =  get_the_post_thumbnail_url($postID ) ;
        ?>
        <main>
            <div class="container">
                <?php the_content()?>
            </div>
            
        </main>
        <?php
    }
}

include 'footer.php';
?>
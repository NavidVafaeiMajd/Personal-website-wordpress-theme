<?php
if(!defined('ABSPATH')){
    wp_die();
}

/* Template Name: صفحه نمونه کار ها */

$stylePlaceHolder = TD . '/asset/css/archive.css';

include 'header.php';

function custom_excerpt_length( $length ) {
    return 10;
}

add_filter( 'excerpt_length', 'custom_excerpt_length');


$taxonomy = get_queried_object();

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

?>

<main>
    <div class="archive-blog-content container">
        
        <nav aria-label="breadcrumb" >
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                <a href="<?php echo get_home_url();?>">
                     خانه /  
                </a>
                </li>
                <li class="" aria-current="page">
                    نمونه کار ها
                </li>
            </ol>
            <button id="btn-previous-page" onclick="history.back();" class="btn-previous-page">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <g id="Huge-icon_arrows_bulk_arrow-left" data-name="Huge-icon/arrows/bulk/arrow-left" transform="translate(24) rotate(90)">
                <g id="arrow_left" data-name="arrow left" transform="translate(7.25 5.25)">
                <path id="Vector_190_Stroke_" data-name="Vector 190 (Stroke)" d="M4.22,13.28a.75.75,0,0,0,1.061,0l4-4A.75.75,0,0,0,8.22,8.22L5.5,10.939V.75A.75.75,0,0,0,4,.75V10.939L1.28,8.22A.75.75,0,1,0,.22,9.28Z" transform="translate(0)" fill="#28303f" opacity="0.4"></path>
                <path id="Vector_190_Stroke_2" data-name="Vector 190 (Stroke)" d="M4.22.22A.75.75,0,0,1,5.28.22l4,4A.75.75,0,1,1,8.22,5.28l-3.467-3.5L1.28,5.28A.75.75,0,0,1,.22,4.22Z" transform="translate(9.5 13.5) rotate(180)" fill="#28303f"></path>
                </g>
            </g>
            </svg>
            </button>
        </nav>
        <div class="top-archive-blog-content">
            <div class="head-top-archive-blog-content flex-column flex-md-row">
                <h1 class="title-blog">
                بلاگ 
                </h1>
                <!-- serach blog in posts  -->
                <div class="search-blog-div">
                    <form action="<?php echo get_home_url();?>" method="get">
                        <input type="text" class="search-blog-input" placeholder="جست و جو..." name="s" id="">
                        <button type="submit" class="search-blog-btn">
                            <svg id="Huge-icon_interface_outline_search_01" data-name="Huge-icon/interface/outline/search 01" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path id="Vector" d="M20.22,21.28A.75.75,0,1,0,21.28,20.22ZM19.28,18.22A.75.75,0,1,0,18.22,19.28ZM1.5,10.25A8.75,8.75,0,0,1,10.25,1.5V0A10.25,10.25,0,0,0,0,10.25ZM10.25,1.5A8.75,8.75,0,0,1,19,10.25h1.5A10.25,10.25,0,0,0,10.25,0ZM19,10.25A8.75,8.75,0,0,1,10.25,19v1.5A10.25,10.25,0,0,0,20.5,10.25ZM10.25,19A8.75,8.75,0,0,1,1.5,10.25H0A10.25,10.25,0,0,0,10.25,20.5Zm11.03,1.22-2-2L18.22,19.28l2,2Z" transform="translate(1.25 1.25)" fill="#28303f"></path>
                            </svg>
                        </button>
                    </form>
                </div>

            </div>
            <div>
                    <div class="blog-content-headercategory-blog" style="margin:10px auto !important;">

                        
                        <ul class="ul-blog-content-headercategory-blog">
                        <?php
                                $categories = get_categories( array(
                                    'orderby' => 'date',
                                    'order'   => 'DESC'
                                ) );
                                foreach( $categories as $category ) {
                                echo '<li class="parent-item"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';   
                                } 
                            ?>
                        </ul>

                    </div>
                </div>
        </div>
        <div class="archive-blog-posts row g-3 my-3">
                <?php
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                $portfolioArgs=array(
                    'post_type' => 'portfolio',
                    'posts_per_page' => 3,
                    'orderby' => 'date',
                    'order' => 'DESC',

                );
                $lastPortfolio = new WP_Query( $portfolioArgs );
                if($lastPortfolio -> have_posts()){
                    while($lastPortfolio ->have_posts()){
                        $lastPortfolio->the_post();
                        $postTitle = get_the_title();
                        $postID = get_the_ID();
                        $thumbnails =  get_the_post_thumbnail_url($postID ) ;
                        $postLink = get_permalink();
                        $postDate = get_the_date();
                        $terms = get_the_term_list($postID , 'portfoliocat'); 
                        $args = array(
                            'post_id' => $postID,   // Use post_id, not post_ID
                            'count'   => true // Return only the count
                        );
                        $comments_count = get_comments( $args );
                        ?>
                        <div class="last-blog-cart col-sm-12 col-md-6 col-lg-4">
                            <div class="last-blog-cart-content">
                                <div class="last-blog-cart-info">
                                    <span class="last-blog-cart-info-comment">
                                    <svg style="margin-left:5px;" width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.34" d="M5 10H7C9 10 10 9 10 7V5C10 3 9 2 7 2H5C3 2 2 3 2 5V7C2 9 3 10 5 10Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/><path d="M17 10H19C21 10 22 9 22 7V5C22 3 21 2 19 2H17C15 2 14 3 14 5V7C14 9 15 10 17 10Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/><path opacity="0.34" d="M17 22H19C21 22 22 21 22 19V17C22 15 21 14 19 14H17C15 14 14 15 14 17V19C14 21 15 22 17 22Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/><path d="M5 22H7C9 22 10 21 10 19V17C10 15 9 14 7 14H5C3 14 2 15 2 17V19C2 21 3 22 5 22Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    <?php echo $terms?>
                                    </span>
                                    <span class="last-blog-cart-info-date">
                                        <svg style="margin-left:5px;" width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 12C2 8.22876 2 6.34315 3.17157 5.17157C4.34315 4 6.22876 4 10 4H14C17.7712 4 19.6569 4 20.8284 5.17157C22 6.34315 22 8.22876 22 12V14C22 17.7712 22 19.6569 20.8284 20.8284C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.8284C2 19.6569 2 17.7712 2 14V12Z" stroke="#1C274C" stroke-width="1.5"/><path opacity="0.5" d="M7 4V2.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/><path opacity="0.5" d="M17 4V2.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/><path opacity="0.5" d="M2.5 9H21.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/><path d="M18 17C18 17.5523 17.5523 18 17 18C16.4477 18 16 17.5523 16 17C16 16.4477 16.4477 16 17 16C17.5523 16 18 16.4477 18 17Z" fill="#1C274C"/><path d="M18 13C18 13.5523 17.5523 14 17 14C16.4477 14 16 13.5523 16 13C16 12.4477 16.4477 12 17 12C17.5523 12 18 12.4477 18 13Z" fill="#1C274C"/><path d="M13 17C13 17.5523 12.5523 18 12 18C11.4477 18 11 17.5523 11 17C11 16.4477 11.4477 16 12 16C12.5523 16 13 16.4477 13 17Z" fill="#1C274C"/><path d="M13 13C13 13.5523 12.5523 14 12 14C11.4477 14 11 13.5523 11 13C11 12.4477 11.4477 12 12 12C12.5523 12 13 12.4477 13 13Z" fill="#1C274C"/><path d="M8 17C8 17.5523 7.55228 18 7 18C6.44772 18 6 17.5523 6 17C6 16.4477 6.44772 16 7 16C7.55228 16 8 16.4477 8 17Z" fill="#1C274C"/><path d="M8 13C8 13.5523 7.55228 14 7 14C6.44772 14 6 13.5523 6 13C6 12.4477 6.44772 12 7 12C7.55228 12 8 12.4477 8 13Z" fill="#1C274C"/></svg>
                                        <?php echo $postDate?>
                                    </span>
                                </div>
                                <a href="<?php echo $postLink?>">
                                    <div class="last-blog-cart-img my-3 ">
                                        <img src="<?php echo $thumbnails?>" alt="">
                                    </div>
                                </a>
                                <div class="last-blog-cart-titlexpert">
                                    <a href="#">
                                        <h4 class="last-blog-cart-title"><?php echo $postTitle?></h4>
                                    </a>
                                </div>

                                <div class="detail-btn-block">
                                    <a href="<?php echo $postLink?>" class="detail-btn-link">
                                        مشاهده جزئیات  
                                    </a>
                                </div>

                                </div>
                            
                        </div>
                        <?php
                        
                    }
                }else{
                    ?>
                    <div class="posts-blog row container d-flex justify-content-center">


                    <img src="https://topigo.baitimo.ir/wp-content/themes/topigo/assets/img/Navigation.svg" alt="نتیجه ای یافت نشد" class=" col-md-6">
                                <h2 class="text-center" style="color:#4f6672;">
                        متأسفانه نتیجه محتوایی که به دنبال آن میگردید یافت نشد!    </h2>


                    <div class="pagination text-center">
                    </div>



                        </div>
                    <?php
                }
                ?>
                <div class="pagination">
                <?php
                echo "<div class='fz-pagination'>" . paginate_links(array(
                    'total' => $lastPortfolio->max_num_pages,
                    'prev_text' => __('<div class="preious-page"> قبلی </div>'),
                    'next_text' => __('<div class="next-page"> بعدی </div>')
                )) . "</div>";
                ?>
                </div>
        </div>
        
    </div>
</main>
<?php
include 'footer.php'
?>
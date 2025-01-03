<?php
if(!defined('ABSPATH')){
    wp_die();
}

/* Template Name: صفحه اصلی */
$stylePlaceHolder = TD . '/asset/css/home.css';
include 'header.php';
?>
    <main>
        <div class="first-sec-bg">
            <div class="first-sec-content mx-3">
                <div class="first-sec-content-boldName en">
                    NAVID
                </div>
                <div class="first-sec-content-boldName fa">
                    نوید
                </div>
                <div class="first-sec-content-box">
                    <p>   <?php echo get_bloginfo('description');?> </p>
                    <h1> 
                    سلام من <b>نویدم</b> ، برنامه نویس

                    </h1>
                    <div>
                        <a href="#secound-sec-content-right">
                            <button>درباره ما</button>
                        </a>
                        <a href="<?php echo get_option( "portfolioPageLink" , "" )?>">
                            <button id="secondary-btn">نمونه کار ها</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="sochial-icon">
                <a href="<?php echo get_option( "githublink" , "" )?>" class="sochial-icon-tel">
                <svg width="800px" height="800px" viewBox="0 0 48 48" version="1.1" id="Shopicons" xmlns="http://www.w3.org/2000/svg" x="0" y="0" xml:space="preserve"><style>.st1{fill:#fff}.st2,.st3{fill:none;stroke:#666;stroke-width:4;stroke-miterlimit:10}.st3{stroke-width:6}</style><g id="github_00000178918564504449926280000008731996709616696990_"><path d="M0 .011h48v48H0v-48z" fill="none"/><path d="M30 44.004v-10c0-.884-.197-1.722-.542-2.479.825-.167 1.65-.358 2.472-.601 2.527-.746 6.154-3.839 7.226-6.863 1.188-3.356 1.188-6.76 0-10.116l-.001-.001c-.213-.603-.537-1.211-.998-1.868.848-3.154.253-5.792.225-5.915l-.365-1.564-1.606.019c-.15.002-3.48.063-6.724 1.955a29.635 29.635 0 0 0-11.371 0c-3.243-1.892-6.573-1.953-6.724-1.955l-1.608-.019-.365 1.564c-.028.123-.623 2.761.225 5.915-.461.657-.785 1.266-.999 1.869-1.187 3.356-1.187 6.76.001 10.117 1.07 3.023 4.697 6.116 7.225 6.862.822.243 1.647.434 2.472.601A5.946 5.946 0 0 0 18 34.004v1.281c-.062.036-.127.065-.187.108-.289.211-2.869 1.967-5.505.09-.93-.946-1.386-1.639-1.826-2.309-.988-1.5-1.841-2.586-4.588-3.96a2 2 0 1 0-1.789 3.579c1.991.995 2.341 1.525 3.035 2.581.515.781 1.155 1.754 2.445 3.044l.215.186c1.692 1.27 3.447 1.723 5.053 1.723A9.286 9.286 0 0 0 18 39.76v4.253l12-.009z"/></g></svg>                </a>
                <a href="<?php echo get_option( "linkinLink" , "" )?>" class="sochial-icon-linkedin">
                <svg fill="#000000" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 555.347 555.347" xml:space="preserve"><g><path d="M118.656,0.117c-4.896-0.612-9.18,1.224-11.628,4.284C80.712,2.565,56.232,21.538,48.276,50.914
                    c-10.404,37.944,23.868,77.724,62.424,75.888c31.212-1.836,57.528-28.152,64.872-57.528C183.528,31.33,154.152,3.177,118.656,0.117
                    z"/><path d="M155.376,189.837c0-4.896-3.06-7.344-6.732-7.956c-1.224-6.12-6.12-11.016-13.464-10.404
                    c-10.404,0.612-20.808,0.612-31.212,1.224c-11.628,0.612-26.316-0.612-37.332,4.284c-3.672,1.224-5.508,4.284-6.732,6.732
                    c-1.224,1.224-1.836,2.448-2.448,4.284c-14.688,74.664-14.076,149.94-13.464,225.828c0,26.929-12.852,97.309,11.628,117.504
                    c1.836,1.837,4.284,2.448,6.732,2.448c0.612,1.225,1.836,3.061,3.672,3.672c11.628,7.956,31.212,4.284,44.064,2.448
                    c7.344-1.224,17.136-1.836,24.48-6.12c6.12,2.448,14.076,0.612,15.912-6.731c9.792-48.96,1.224-103.429,0.612-153
                    C149.256,311.625,153.541,251.038,155.376,189.837z"/><path d="M514.009,383.229c0.611-50.796-1.836-101.592-25.093-147.492c-47.124-93.636-190.943-72.828-273.563-62.424
                    c-7.956,1.224-12.24,7.956-11.628,14.076c0,0,0,0,0,0.612c-16.524,111.996-16.524,230.724-14.688,343.944l0,0
                    c0,9.18,7.956,14.076,15.3,14.076c1.836,1.224,4.284,2.448,7.344,3.06c25.704,3.061,50.796,3.061,76.5,6.12
                    c7.956,1.225,13.464-5.508,14.688-12.239c5.509-1.837,10.404-6.732,8.568-13.465c-11.628-43.451-11.628-86.292-8.568-130.968
                    c2.448-32.436,12.853-69.156,9.181-101.592c21.42-4.896,39.779-20.808,57.527,2.448c18.36,23.868,22.645,59.976,26.316,88.74
                    c3.672,28.151,4.896,56.916,5.508,85.68c0.612,17.136-4.896,41.616,5.508,56.304c2.448,3.672,6.12,4.896,9.181,5.508
                    c0.611,0,1.224,0.612,1.836,0.612c23.868,5.508,53.244,11.016,77.724,6.732c7.344-1.225,11.017-7.956,11.017-14.688
                    C518.904,484.821,513.396,427.293,514.009,383.229z M433.225,507.466c3.672,1.836,7.344,2.447,11.016,1.224
                    c3.672,0.612,7.345,0,11.017-1.836c0.611,1.224,1.224,2.448,2.447,4.284c-8.567,0-16.523,0.611-25.092,0.611
                    C433.225,509.913,433.225,508.689,433.225,507.466z"/></g></svg>
                </a>
                <a href="<?php echo get_option( "instalink" , "")?>" class="sochial-icon-insg">
                    <svg width="800px" height="800px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path fill="none" d="M0 0h24v24H0z"/>
                            <path fill-rule="nonzero" d="M12 2c2.717 0 3.056.01 4.122.06 1.065.05 1.79.217 2.428.465.66.254 1.216.598 1.772 1.153a4.908 4.908 0 0 1 1.153 1.772c.247.637.415 1.363.465 2.428.047 1.066.06 1.405.06 4.122 0 2.717-.01 3.056-.06 4.122-.05 1.065-.218 1.79-.465 2.428a4.883 4.883 0 0 1-1.153 1.772 4.915 4.915 0 0 1-1.772 1.153c-.637.247-1.363.415-2.428.465-1.066.047-1.405.06-4.122.06-2.717 0-3.056-.01-4.122-.06-1.065-.05-1.79-.218-2.428-.465a4.89 4.89 0 0 1-1.772-1.153 4.904 4.904 0 0 1-1.153-1.772c-.248-.637-.415-1.363-.465-2.428C2.013 15.056 2 14.717 2 12c0-2.717.01-3.056.06-4.122.05-1.066.217-1.79.465-2.428a4.88 4.88 0 0 1 1.153-1.772A4.897 4.897 0 0 1 5.45 2.525c.638-.248 1.362-.415 2.428-.465C8.944 2.013 9.283 2 12 2zm0 5a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm6.5-.25a1.25 1.25 0 0 0-2.5 0 1.25 1.25 0 0 0 2.5 0zM12 9a3 3 0 1 1 0 6 3 3 0 0 1 0-6z"/>
                        </g>
                    </svg>
                </a>
            </div>

        </div>
        <div class="secound-sec container" style="margin-top: 100px; margin-bottom: 170px;">
            <div class="secound-sec-content row">
                <div id="secound-sec-content-right" class="secound-sec-content-right col-md-8 " >
                    <h1>درباره من چی میدونی؟
                    </h1>
                    <p>
                    <?php echo get_option( "descriptionOfHome" , "" )?>    
                    </p>
                </div>
                <div class="secound-sec-content-left col-md-4" >
                    <img width="380px" src="<?php echo TD?>/asset/img/questions-animate.svg" alt="">
                </div>
            </div>
        </div>
        <div class="third-sec container" style="margin-top: 100px; margin-bottom: 170px;">
            <div class="special-title" style="text-align: center;">
                <h1>سرویس ها و خدمات</h1>
            </div>
            <div class="third-sec-service d-md-flex justify-content-center">
                <div class="third-sec-service-item " style="min-width:30%;">
                    <div class="third-sec-service-item-img d-flex justify-content-center" style="padding:18px;">
                        <img width="109px" src="<?php echo TD?>/asset/img/services-img-01.png" alt="">
                    </div>
                    <div class="third-sec-service-item-title">
                        <h4> PHP </h4>
                    </div>

                </div>
                <div class="third-sec-service-item " style="min-width:30%;">
                    <div class="third-sec-service-item-img d-flex justify-content-center" style="padding:18px;">
                        <img width="109px" src="<?php echo TD?>/asset/img/services-img-02.png" alt="">
                    </div>
                    <div class="third-sec-service-item-title">
                        <h4> JAVASCRIPT </h4>
                    </div>
                </div>

                <div class="third-sec-service-item " style="min-width:30%;">
                    <div class="third-sec-service-item-img d-flex justify-content-center" style="padding:18px;">
                        <img width="109px" src="<?php echo TD?>/asset/img/services-img-04.png" alt="">
                    </div>
                    <div class="third-sec-service-item-title">
                        <h4> WORDPRESS </h4>
                    </div>

                </div>


            </div>
            <div class="third-sec-service d-md-flex justify-content-center">
                <div class="third-sec-service-item " style="min-width:30%;">
                    <div class="third-sec-service-item-img d-flex justify-content-center" style="padding:18px;">
                        <img width="109px" src="<?php echo TD?>/asset/img/services-img-05.png" alt="">
                    </div>
                    <div class="third-sec-service-item-title">
                        <h4> JQUERY </h4>
                    </div>

                </div>
                <div class="third-sec-service-item " style="min-width:30%;">
                    <div class="third-sec-service-item-img d-flex justify-content-center" style="padding:18px;">
                        <img width="109px" src="<?php echo TD?>/asset/img/services-img-03.png" alt="">
                    </div>
                    <div class="third-sec-service-item-title">
                        <h4>HTML & CSS</h4>
                    </div>

                </div>

                <div class="third-sec-service-item " style="min-width:30%;">
                    <div class="third-sec-service-item-img d-flex justify-content-center" style="padding:18px;">
                        <img width="109px" src="<?php echo TD?>/asset/img/services-img-06.png" alt="">
                    </div>
                    <div class="third-sec-service-item-title">
                        <h4>SQL</h4>
                    </div>

                </div>


            </div>
        </div>
        <div class="forth-sec container" style="margin-top: 100px; margin-bottom: 170px;">
            <div class="special-title" style="text-align: center;">
                <h1>آخرین مطالب</h1>
                <p> اخرین مقالات را از اینجا ببنید </p>
            </div>
            <div class="last-blog row g-3">
                <?php
                // The Query.
                $args=array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'orderby' => 'date',
                    'order' => 'DESC'
                );
                $lastPosts = new WP_Query( $args );

                // The Loop.
                if ( $lastPosts->have_posts() ) {
                    
                    while ( $lastPosts->have_posts() ) {
                        $lastPosts->the_post();
                        $postTitle = get_the_title();
                        $postID = get_the_ID();
                        $thumbnails =  get_the_post_thumbnail_url($postID ) ;
                        $expert = get_the_excerpt();
                        $postLink = wp_get_shortlink();
                        $postDate = get_the_date();
                        $argsComment = array(
                            'post_id' => $postID,   // Use post_id, not post_ID
                            'count'   => true // Return only the count
                        );
                        $comments_count = get_comments( $argsComment );
                        ?>
                        <div class="last-blog-cart col-sm-12 col-md-6 col-lg-4">
                            <div class="last-blog-cart-content">
                                <a href="<?php echo $postLink?>">
                                    <div class="last-blog-cart-img">
                                        <img src="<?php echo $thumbnails?>" alt="">
                                    </div>
                                </a>
                                <div class="last-blog-cart-titlexpert">
                                    <a href="#">
                                        <h4 class="last-blog-cart-title"><?php echo $postTitle?></h4>
                                    </a>
                                    <p class="last-blog-cart-expert"><?php echo $expert?></p>
                                </div>
                                <div class="last-blog-cart-info">
                                    <span class="last-blog-cart-info-comment">
                                    <svg style="margin-left:5px;" width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 13.5997 2.37562 15.1116 3.04346 16.4525C3.22094 16.8088 3.28001 17.2161 3.17712 17.6006L2.58151 19.8267C2.32295 20.793 3.20701 21.677 4.17335 21.4185L6.39939 20.8229C6.78393 20.72 7.19121 20.7791 7.54753 20.9565C8.88837 21.6244 10.4003 22 12 22Z" stroke="#1C274C" stroke-width="1.5"/><path opacity="0.5" d="M8 12H8.009M11.991 12H12M15.991 12H16" stroke="#1C274C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    <?php echo $comments_count?> 
                                    </span>
                                    <span class="last-blog-cart-info-date">
                                    <svg style="margin-left:5px;" width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 12C2 8.22876 2 6.34315 3.17157 5.17157C4.34315 4 6.22876 4 10 4H14C17.7712 4 19.6569 4 20.8284 5.17157C22 6.34315 22 8.22876 22 12V14C22 17.7712 22 19.6569 20.8284 20.8284C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.8284C2 19.6569 2 17.7712 2 14V12Z" stroke="#1C274C" stroke-width="1.5"/><path opacity="0.5" d="M7 4V2.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/><path opacity="0.5" d="M17 4V2.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/><path opacity="0.5" d="M2.5 9H21.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/><path d="M18 17C18 17.5523 17.5523 18 17 18C16.4477 18 16 17.5523 16 17C16 16.4477 16.4477 16 17 16C17.5523 16 18 16.4477 18 17Z" fill="#1C274C"/><path d="M18 13C18 13.5523 17.5523 14 17 14C16.4477 14 16 13.5523 16 13C16 12.4477 16.4477 12 17 12C17.5523 12 18 12.4477 18 13Z" fill="#1C274C"/><path d="M13 17C13 17.5523 12.5523 18 12 18C11.4477 18 11 17.5523 11 17C11 16.4477 11.4477 16 12 16C12.5523 16 13 16.4477 13 17Z" fill="#1C274C"/><path d="M13 13C13 13.5523 12.5523 14 12 14C11.4477 14 11 13.5523 11 13C11 12.4477 11.4477 12 12 12C12.5523 12 13 12.4477 13 13Z" fill="#1C274C"/><path d="M8 17C8 17.5523 7.55228 18 7 18C6.44772 18 6 17.5523 6 17C6 16.4477 6.44772 16 7 16C7.55228 16 8 16.4477 8 17Z" fill="#1C274C"/><path d="M8 13C8 13.5523 7.55228 14 7 14C6.44772 14 6 13.5523 6 13C6 12.4477 6.44772 12 7 12C7.55228 12 8 12.4477 8 13Z" fill="#1C274C"/></svg>
                                    <?php echo $postDate?>
                                    </span>
                                </div>
                                <hr>
                                <a href="<?php echo $postLink?>" class="last-blog-cart-btn">
                                    مشاهده جزئیات  
                                    <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 9L10.5 12L13.5 15" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path opacity="0.5" d="M2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C22 4.92893 22 7.28595 22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12Z" stroke="#1C274C" stroke-width="1.5"/></svg> 
                                </a>
                                </div>
                            
                        </div>
                        <?php
                    }

                } else {
                    esc_html_e( 'Sorry, no posts matched your criteria.' );
                }
                // Restore original Post Data.
                wp_reset_postdata();
                ?>
                <div class="d-flex align-items-center justify-content-center">
                    <button> بیشتر ....</button>
                </div>
            </div>
        </div>
        <div class="fifth-sec container" style="margin-top: 100px; margin-bottom: 170px;">
            <div class="special-title" style="text-align: center;">
                <h1>آخرین نمونه کار ها</h1>
                <p> اخرین نمونه کار ها را از اینجا ببنید </p>
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
                <div class="d-flex align-items-center justify-content-center">
                    <a href="<?php echo get_option( "portfolioPageLink" , "" )?>">
                        <button> بیشتر ....</button>
                    </a>
                </div>
        </div>
        </div>


    </main>
<?php
include 'footer.php'
?>
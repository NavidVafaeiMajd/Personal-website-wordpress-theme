<?php
$stylePlaceHolder = TD . '/asset/css/archive.css';
include 'header.php'
?>

<main>
    <div class="archive-blog-content container">
        <nav aria-label="breadcrumb" >
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                <a href="">
                     وبلاگ /  
                </a>
                </li>
                <li class="" aria-current="page">
                     چگونگی استفاده از هوش مصنوعی.... 
                </li>
            </ol>
            <button id="btn-previous-page" class="btn-previous-page">
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
                وبلاگ                </h1>
                <!-- serach blog in posts  -->
                <div class="search-blog-div">
                    <form action="" method="get">
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
                    <div class="blog-content-headercategory-blog" style="margin:0 auto !important;">
                        <ul class="ul-blog-content-headercategory-blog">
                            <li class="active">
                                <a href="#">
                                همه 
                                </a>
                                </li>
                            <!-- list posts  -->
                                <li class="cat-item cat-item-19"><a href="https://topigo.baitimo.ir/blog/category/education">آموزش</a>
                                </li>
                                    <li class="cat-item cat-item-20"><a href="https://topigo.baitimo.ir/blog/category/webdesign">طراحی سایت</a>
                                </li>
                                    <li class="cat-item cat-item-21"><a href="https://topigo.baitimo.ir/blog/category/graphicsdesign">طراحی گرافیک</a>
                                </li>
                                    <li class="cat-item cat-item-1"><a href="https://topigo.baitimo.ir/blog/category/technology">فناوری</a>
                                </li>
                        </ul>

                    </div>
                </div>
        </div>
        <div class="archive-blog-posts row g-3 my-3">
                <div class="last-blog-cart col-sm-12 col-md-6 col-lg-3">
                    <div class="last-blog-cart-content">
                        <a href="#">
                            <div class="last-blog-cart-img">
                                <img src="<?php echo TD?>/asset/img/img-blog-topigo07.jpg" alt="">
                            </div>
                        </a>
                        <div class="last-blog-cart-titlexpert">
                            <a href="#">
                                <h4 class="last-blog-cart-title">چگونگی استفاده از هوش مصنوعی فتوشاپ</h4>
                            </a>
                            <p class="last-blog-cart-expert">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ،....</p>
                        </div>
                        <div class="last-blog-cart-info">
                            <span class="last-blog-cart-info-comment">
                            <svg style="margin-left:5px;" width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 13.5997 2.37562 15.1116 3.04346 16.4525C3.22094 16.8088 3.28001 17.2161 3.17712 17.6006L2.58151 19.8267C2.32295 20.793 3.20701 21.677 4.17335 21.4185L6.39939 20.8229C6.78393 20.72 7.19121 20.7791 7.54753 20.9565C8.88837 21.6244 10.4003 22 12 22Z" stroke="#1C274C" stroke-width="1.5"/><path opacity="0.5" d="M8 12H8.009M11.991 12H12M15.991 12H16" stroke="#1C274C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            1 
                            </span>
                            <span class="last-blog-cart-info-date">
                            <svg style="margin-left:5px;" width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 12C2 8.22876 2 6.34315 3.17157 5.17157C4.34315 4 6.22876 4 10 4H14C17.7712 4 19.6569 4 20.8284 5.17157C22 6.34315 22 8.22876 22 12V14C22 17.7712 22 19.6569 20.8284 20.8284C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.8284C2 19.6569 2 17.7712 2 14V12Z" stroke="#1C274C" stroke-width="1.5"/><path opacity="0.5" d="M7 4V2.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/><path opacity="0.5" d="M17 4V2.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/><path opacity="0.5" d="M2.5 9H21.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/><path d="M18 17C18 17.5523 17.5523 18 17 18C16.4477 18 16 17.5523 16 17C16 16.4477 16.4477 16 17 16C17.5523 16 18 16.4477 18 17Z" fill="#1C274C"/><path d="M18 13C18 13.5523 17.5523 14 17 14C16.4477 14 16 13.5523 16 13C16 12.4477 16.4477 12 17 12C17.5523 12 18 12.4477 18 13Z" fill="#1C274C"/><path d="M13 17C13 17.5523 12.5523 18 12 18C11.4477 18 11 17.5523 11 17C11 16.4477 11.4477 16 12 16C12.5523 16 13 16.4477 13 17Z" fill="#1C274C"/><path d="M13 13C13 13.5523 12.5523 14 12 14C11.4477 14 11 13.5523 11 13C11 12.4477 11.4477 12 12 12C12.5523 12 13 12.4477 13 13Z" fill="#1C274C"/><path d="M8 17C8 17.5523 7.55228 18 7 18C6.44772 18 6 17.5523 6 17C6 16.4477 6.44772 16 7 16C7.55228 16 8 16.4477 8 17Z" fill="#1C274C"/><path d="M8 13C8 13.5523 7.55228 14 7 14C6.44772 14 6 13.5523 6 13C6 12.4477 6.44772 12 7 12C7.55228 12 8 12.4477 8 13Z" fill="#1C274C"/></svg>
                            1403/8/17
                            </span>
                        </div>
                        <hr>
                        <a href="" class="last-blog-cart-btn">
                            مشاهده جزئیات  
                            <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 9L10.5 12L13.5 15" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path opacity="0.5" d="M2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C22 4.92893 22 7.28595 22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12Z" stroke="#1C274C" stroke-width="1.5"/></svg> 
                        </a>
                    </div>
                </div>
                <div class="last-blog-cart col-sm-12 col-md-6 col-lg-3">
                    <div class="last-blog-cart-content">
                        <a href="#">
                            <div class="last-blog-cart-img">
                                <img src="<?php echo TD?>/asset/img/img-blog-topigo07.jpg" alt="">
                            </div>
                        </a>
                        <div class="last-blog-cart-titlexpert">
                            <a href="#">
                                <h4 class="last-blog-cart-title">چگونگی استفاده از هوش مصنوعی فتوشاپ</h4>
                            </a>
                            <p class="last-blog-cart-expert">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ،....</p>
                        </div>
                        <div class="last-blog-cart-info">
                            <span class="last-blog-cart-info-comment">
                            <svg style="margin-left:5px;" width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 13.5997 2.37562 15.1116 3.04346 16.4525C3.22094 16.8088 3.28001 17.2161 3.17712 17.6006L2.58151 19.8267C2.32295 20.793 3.20701 21.677 4.17335 21.4185L6.39939 20.8229C6.78393 20.72 7.19121 20.7791 7.54753 20.9565C8.88837 21.6244 10.4003 22 12 22Z" stroke="#1C274C" stroke-width="1.5"/><path opacity="0.5" d="M8 12H8.009M11.991 12H12M15.991 12H16" stroke="#1C274C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            1 
                            </span>
                            <span class="last-blog-cart-info-date">
                            <svg style="margin-left:5px;" width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 12C2 8.22876 2 6.34315 3.17157 5.17157C4.34315 4 6.22876 4 10 4H14C17.7712 4 19.6569 4 20.8284 5.17157C22 6.34315 22 8.22876 22 12V14C22 17.7712 22 19.6569 20.8284 20.8284C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.8284C2 19.6569 2 17.7712 2 14V12Z" stroke="#1C274C" stroke-width="1.5"/><path opacity="0.5" d="M7 4V2.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/><path opacity="0.5" d="M17 4V2.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/><path opacity="0.5" d="M2.5 9H21.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/><path d="M18 17C18 17.5523 17.5523 18 17 18C16.4477 18 16 17.5523 16 17C16 16.4477 16.4477 16 17 16C17.5523 16 18 16.4477 18 17Z" fill="#1C274C"/><path d="M18 13C18 13.5523 17.5523 14 17 14C16.4477 14 16 13.5523 16 13C16 12.4477 16.4477 12 17 12C17.5523 12 18 12.4477 18 13Z" fill="#1C274C"/><path d="M13 17C13 17.5523 12.5523 18 12 18C11.4477 18 11 17.5523 11 17C11 16.4477 11.4477 16 12 16C12.5523 16 13 16.4477 13 17Z" fill="#1C274C"/><path d="M13 13C13 13.5523 12.5523 14 12 14C11.4477 14 11 13.5523 11 13C11 12.4477 11.4477 12 12 12C12.5523 12 13 12.4477 13 13Z" fill="#1C274C"/><path d="M8 17C8 17.5523 7.55228 18 7 18C6.44772 18 6 17.5523 6 17C6 16.4477 6.44772 16 7 16C7.55228 16 8 16.4477 8 17Z" fill="#1C274C"/><path d="M8 13C8 13.5523 7.55228 14 7 14C6.44772 14 6 13.5523 6 13C6 12.4477 6.44772 12 7 12C7.55228 12 8 12.4477 8 13Z" fill="#1C274C"/></svg>
                            1403/8/17
                            </span>
                        </div>
                        <hr>
                        <a href="" class="last-blog-cart-btn">
                            مشاهده جزئیات  
                            <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 9L10.5 12L13.5 15" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path opacity="0.5" d="M2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C22 4.92893 22 7.28595 22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12Z" stroke="#1C274C" stroke-width="1.5"/></svg> 
                        </a>
                    </div>
                </div>
                <div class="last-blog-cart col-sm-12 col-md-6 col-lg-3">
                    <div class="last-blog-cart-content">
                        <a href="#">
                            <div class="last-blog-cart-img">
                                <img src="<?php echo TD?>/asset/img/img-blog-topigo07.jpg" alt="">
                            </div>
                        </a>
                        <div class="last-blog-cart-titlexpert">
                            <a href="#">
                                <h4 class="last-blog-cart-title">چگونگی استفاده از هوش مصنوعی فتوشاپ</h4>
                            </a>
                            <p class="last-blog-cart-expert">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ،....</p>
                        </div>
                        <div class="last-blog-cart-info">
                            <span class="last-blog-cart-info-comment">
                            <svg style="margin-left:5px;" width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 13.5997 2.37562 15.1116 3.04346 16.4525C3.22094 16.8088 3.28001 17.2161 3.17712 17.6006L2.58151 19.8267C2.32295 20.793 3.20701 21.677 4.17335 21.4185L6.39939 20.8229C6.78393 20.72 7.19121 20.7791 7.54753 20.9565C8.88837 21.6244 10.4003 22 12 22Z" stroke="#1C274C" stroke-width="1.5"/><path opacity="0.5" d="M8 12H8.009M11.991 12H12M15.991 12H16" stroke="#1C274C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            1 
                            </span>
                            <span class="last-blog-cart-info-date">
                            <svg style="margin-left:5px;" width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 12C2 8.22876 2 6.34315 3.17157 5.17157C4.34315 4 6.22876 4 10 4H14C17.7712 4 19.6569 4 20.8284 5.17157C22 6.34315 22 8.22876 22 12V14C22 17.7712 22 19.6569 20.8284 20.8284C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.8284C2 19.6569 2 17.7712 2 14V12Z" stroke="#1C274C" stroke-width="1.5"/><path opacity="0.5" d="M7 4V2.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/><path opacity="0.5" d="M17 4V2.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/><path opacity="0.5" d="M2.5 9H21.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/><path d="M18 17C18 17.5523 17.5523 18 17 18C16.4477 18 16 17.5523 16 17C16 16.4477 16.4477 16 17 16C17.5523 16 18 16.4477 18 17Z" fill="#1C274C"/><path d="M18 13C18 13.5523 17.5523 14 17 14C16.4477 14 16 13.5523 16 13C16 12.4477 16.4477 12 17 12C17.5523 12 18 12.4477 18 13Z" fill="#1C274C"/><path d="M13 17C13 17.5523 12.5523 18 12 18C11.4477 18 11 17.5523 11 17C11 16.4477 11.4477 16 12 16C12.5523 16 13 16.4477 13 17Z" fill="#1C274C"/><path d="M13 13C13 13.5523 12.5523 14 12 14C11.4477 14 11 13.5523 11 13C11 12.4477 11.4477 12 12 12C12.5523 12 13 12.4477 13 13Z" fill="#1C274C"/><path d="M8 17C8 17.5523 7.55228 18 7 18C6.44772 18 6 17.5523 6 17C6 16.4477 6.44772 16 7 16C7.55228 16 8 16.4477 8 17Z" fill="#1C274C"/><path d="M8 13C8 13.5523 7.55228 14 7 14C6.44772 14 6 13.5523 6 13C6 12.4477 6.44772 12 7 12C7.55228 12 8 12.4477 8 13Z" fill="#1C274C"/></svg>
                            1403/8/17
                            </span>
                        </div>
                        <hr>
                        <a href="" class="last-blog-cart-btn">
                            مشاهده جزئیات  
                            <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 9L10.5 12L13.5 15" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path opacity="0.5" d="M2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C22 4.92893 22 7.28595 22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12Z" stroke="#1C274C" stroke-width="1.5"/></svg> 
                        </a>
                    </div>
                </div>
                <div class="last-blog-cart col-sm-12 col-md-6 col-lg-3">
                    <div class="last-blog-cart-content">
                        <a href="#">
                            <div class="last-blog-cart-img">
                                <img src="<?php echo TD?>/asset/img/img-blog-topigo07.jpg" alt="">
                            </div>
                        </a>
                        <div class="last-blog-cart-titlexpert">
                            <a href="#">
                                <h4 class="last-blog-cart-title">چگونگی استفاده از هوش مصنوعی فتوشاپ</h4>
                            </a>
                            <p class="last-blog-cart-expert">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ،....</p>
                        </div>
                        <div class="last-blog-cart-info">
                            <span class="last-blog-cart-info-comment">
                            <svg style="margin-left:5px;" width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 13.5997 2.37562 15.1116 3.04346 16.4525C3.22094 16.8088 3.28001 17.2161 3.17712 17.6006L2.58151 19.8267C2.32295 20.793 3.20701 21.677 4.17335 21.4185L6.39939 20.8229C6.78393 20.72 7.19121 20.7791 7.54753 20.9565C8.88837 21.6244 10.4003 22 12 22Z" stroke="#1C274C" stroke-width="1.5"/><path opacity="0.5" d="M8 12H8.009M11.991 12H12M15.991 12H16" stroke="#1C274C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            1 
                            </span>
                            <span class="last-blog-cart-info-date">
                            <svg style="margin-left:5px;" width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 12C2 8.22876 2 6.34315 3.17157 5.17157C4.34315 4 6.22876 4 10 4H14C17.7712 4 19.6569 4 20.8284 5.17157C22 6.34315 22 8.22876 22 12V14C22 17.7712 22 19.6569 20.8284 20.8284C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.8284C2 19.6569 2 17.7712 2 14V12Z" stroke="#1C274C" stroke-width="1.5"/><path opacity="0.5" d="M7 4V2.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/><path opacity="0.5" d="M17 4V2.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/><path opacity="0.5" d="M2.5 9H21.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/><path d="M18 17C18 17.5523 17.5523 18 17 18C16.4477 18 16 17.5523 16 17C16 16.4477 16.4477 16 17 16C17.5523 16 18 16.4477 18 17Z" fill="#1C274C"/><path d="M18 13C18 13.5523 17.5523 14 17 14C16.4477 14 16 13.5523 16 13C16 12.4477 16.4477 12 17 12C17.5523 12 18 12.4477 18 13Z" fill="#1C274C"/><path d="M13 17C13 17.5523 12.5523 18 12 18C11.4477 18 11 17.5523 11 17C11 16.4477 11.4477 16 12 16C12.5523 16 13 16.4477 13 17Z" fill="#1C274C"/><path d="M13 13C13 13.5523 12.5523 14 12 14C11.4477 14 11 13.5523 11 13C11 12.4477 11.4477 12 12 12C12.5523 12 13 12.4477 13 13Z" fill="#1C274C"/><path d="M8 17C8 17.5523 7.55228 18 7 18C6.44772 18 6 17.5523 6 17C6 16.4477 6.44772 16 7 16C7.55228 16 8 16.4477 8 17Z" fill="#1C274C"/><path d="M8 13C8 13.5523 7.55228 14 7 14C6.44772 14 6 13.5523 6 13C6 12.4477 6.44772 12 7 12C7.55228 12 8 12.4477 8 13Z" fill="#1C274C"/></svg>
                            1403/8/17
                            </span>
                        </div>
                        <hr>
                        <a href="" class="last-blog-cart-btn">
                            مشاهده جزئیات  
                            <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 9L10.5 12L13.5 15" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path opacity="0.5" d="M2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C22 4.92893 22 7.28595 22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12Z" stroke="#1C274C" stroke-width="1.5"/></svg> 
                        </a>
                    </div>
                </div>
                <div class="last-blog-cart col-sm-12 col-md-6 col-lg-3">
                    <div class="last-blog-cart-content">
                        <a href="#">
                            <div class="last-blog-cart-img">
                                <img src="<?php echo TD?>/asset/img/img-blog-topigo07.jpg" alt="">
                            </div>
                        </a>
                        <div class="last-blog-cart-titlexpert">
                            <a href="#">
                                <h4 class="last-blog-cart-title">چگونگی استفاده از هوش مصنوعی فتوشاپ</h4>
                            </a>
                            <p class="last-blog-cart-expert">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ،....</p>
                        </div>
                        <div class="last-blog-cart-info">
                            <span class="last-blog-cart-info-comment">
                            <svg style="margin-left:5px;" width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 13.5997 2.37562 15.1116 3.04346 16.4525C3.22094 16.8088 3.28001 17.2161 3.17712 17.6006L2.58151 19.8267C2.32295 20.793 3.20701 21.677 4.17335 21.4185L6.39939 20.8229C6.78393 20.72 7.19121 20.7791 7.54753 20.9565C8.88837 21.6244 10.4003 22 12 22Z" stroke="#1C274C" stroke-width="1.5"/><path opacity="0.5" d="M8 12H8.009M11.991 12H12M15.991 12H16" stroke="#1C274C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            1 
                            </span>
                            <span class="last-blog-cart-info-date">
                            <svg style="margin-left:5px;" width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 12C2 8.22876 2 6.34315 3.17157 5.17157C4.34315 4 6.22876 4 10 4H14C17.7712 4 19.6569 4 20.8284 5.17157C22 6.34315 22 8.22876 22 12V14C22 17.7712 22 19.6569 20.8284 20.8284C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.8284C2 19.6569 2 17.7712 2 14V12Z" stroke="#1C274C" stroke-width="1.5"/><path opacity="0.5" d="M7 4V2.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/><path opacity="0.5" d="M17 4V2.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/><path opacity="0.5" d="M2.5 9H21.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/><path d="M18 17C18 17.5523 17.5523 18 17 18C16.4477 18 16 17.5523 16 17C16 16.4477 16.4477 16 17 16C17.5523 16 18 16.4477 18 17Z" fill="#1C274C"/><path d="M18 13C18 13.5523 17.5523 14 17 14C16.4477 14 16 13.5523 16 13C16 12.4477 16.4477 12 17 12C17.5523 12 18 12.4477 18 13Z" fill="#1C274C"/><path d="M13 17C13 17.5523 12.5523 18 12 18C11.4477 18 11 17.5523 11 17C11 16.4477 11.4477 16 12 16C12.5523 16 13 16.4477 13 17Z" fill="#1C274C"/><path d="M13 13C13 13.5523 12.5523 14 12 14C11.4477 14 11 13.5523 11 13C11 12.4477 11.4477 12 12 12C12.5523 12 13 12.4477 13 13Z" fill="#1C274C"/><path d="M8 17C8 17.5523 7.55228 18 7 18C6.44772 18 6 17.5523 6 17C6 16.4477 6.44772 16 7 16C7.55228 16 8 16.4477 8 17Z" fill="#1C274C"/><path d="M8 13C8 13.5523 7.55228 14 7 14C6.44772 14 6 13.5523 6 13C6 12.4477 6.44772 12 7 12C7.55228 12 8 12.4477 8 13Z" fill="#1C274C"/></svg>
                            1403/8/17
                            </span>
                        </div>
                        <hr>
                        <a href="" class="last-blog-cart-btn">
                            مشاهده جزئیات  
                            <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 9L10.5 12L13.5 15" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path opacity="0.5" d="M2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C22 4.92893 22 7.28595 22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12Z" stroke="#1C274C" stroke-width="1.5"/></svg> 
                        </a>
                    </div>
                </div>
                <div class="last-blog-cart col-sm-12 col-md-6 col-lg-3">
                    <div class="last-blog-cart-content">
                        <a href="#">
                            <div class="last-blog-cart-img">
                                <img src="<?php echo TD?>/asset/img/img-blog-topigo07.jpg" alt="">
                            </div>
                        </a>
                        <div class="last-blog-cart-titlexpert">
                            <a href="#">
                                <h4 class="last-blog-cart-title">چگونگی استفاده از هوش مصنوعی فتوشاپ</h4>
                            </a>
                            <p class="last-blog-cart-expert">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ،....</p>
                        </div>
                        <div class="last-blog-cart-info">
                            <span class="last-blog-cart-info-comment">
                            <svg style="margin-left:5px;" width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 13.5997 2.37562 15.1116 3.04346 16.4525C3.22094 16.8088 3.28001 17.2161 3.17712 17.6006L2.58151 19.8267C2.32295 20.793 3.20701 21.677 4.17335 21.4185L6.39939 20.8229C6.78393 20.72 7.19121 20.7791 7.54753 20.9565C8.88837 21.6244 10.4003 22 12 22Z" stroke="#1C274C" stroke-width="1.5"/><path opacity="0.5" d="M8 12H8.009M11.991 12H12M15.991 12H16" stroke="#1C274C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            1 
                            </span>
                            <span class="last-blog-cart-info-date">
                            <svg style="margin-left:5px;" width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 12C2 8.22876 2 6.34315 3.17157 5.17157C4.34315 4 6.22876 4 10 4H14C17.7712 4 19.6569 4 20.8284 5.17157C22 6.34315 22 8.22876 22 12V14C22 17.7712 22 19.6569 20.8284 20.8284C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.8284C2 19.6569 2 17.7712 2 14V12Z" stroke="#1C274C" stroke-width="1.5"/><path opacity="0.5" d="M7 4V2.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/><path opacity="0.5" d="M17 4V2.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/><path opacity="0.5" d="M2.5 9H21.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/><path d="M18 17C18 17.5523 17.5523 18 17 18C16.4477 18 16 17.5523 16 17C16 16.4477 16.4477 16 17 16C17.5523 16 18 16.4477 18 17Z" fill="#1C274C"/><path d="M18 13C18 13.5523 17.5523 14 17 14C16.4477 14 16 13.5523 16 13C16 12.4477 16.4477 12 17 12C17.5523 12 18 12.4477 18 13Z" fill="#1C274C"/><path d="M13 17C13 17.5523 12.5523 18 12 18C11.4477 18 11 17.5523 11 17C11 16.4477 11.4477 16 12 16C12.5523 16 13 16.4477 13 17Z" fill="#1C274C"/><path d="M13 13C13 13.5523 12.5523 14 12 14C11.4477 14 11 13.5523 11 13C11 12.4477 11.4477 12 12 12C12.5523 12 13 12.4477 13 13Z" fill="#1C274C"/><path d="M8 17C8 17.5523 7.55228 18 7 18C6.44772 18 6 17.5523 6 17C6 16.4477 6.44772 16 7 16C7.55228 16 8 16.4477 8 17Z" fill="#1C274C"/><path d="M8 13C8 13.5523 7.55228 14 7 14C6.44772 14 6 13.5523 6 13C6 12.4477 6.44772 12 7 12C7.55228 12 8 12.4477 8 13Z" fill="#1C274C"/></svg>
                            1403/8/17
                            </span>
                        </div>
                        <hr>
                        <a href="" class="last-blog-cart-btn">
                            مشاهده جزئیات  
                            <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 9L10.5 12L13.5 15" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path opacity="0.5" d="M2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C22 4.92893 22 7.28595 22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12Z" stroke="#1C274C" stroke-width="1.5"/></svg> 
                        </a>
                    </div>
                </div>
                <div class="last-blog-cart col-sm-12 col-md-6 col-lg-3">
                    <div class="last-blog-cart-content">
                        <a href="#">
                            <div class="last-blog-cart-img">
                                <img src="<?php echo TD?>/asset/img/img-blog-topigo07.jpg" alt="">
                            </div>
                        </a>
                        <div class="last-blog-cart-titlexpert">
                            <a href="#">
                                <h4 class="last-blog-cart-title">چگونگی استفاده از هوش مصنوعی فتوشاپ</h4>
                            </a>
                            <p class="last-blog-cart-expert">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ،....</p>
                        </div>
                        <div class="last-blog-cart-info">
                            <span class="last-blog-cart-info-comment">
                            <svg style="margin-left:5px;" width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 13.5997 2.37562 15.1116 3.04346 16.4525C3.22094 16.8088 3.28001 17.2161 3.17712 17.6006L2.58151 19.8267C2.32295 20.793 3.20701 21.677 4.17335 21.4185L6.39939 20.8229C6.78393 20.72 7.19121 20.7791 7.54753 20.9565C8.88837 21.6244 10.4003 22 12 22Z" stroke="#1C274C" stroke-width="1.5"/><path opacity="0.5" d="M8 12H8.009M11.991 12H12M15.991 12H16" stroke="#1C274C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            1 
                            </span>
                            <span class="last-blog-cart-info-date">
                            <svg style="margin-left:5px;" width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 12C2 8.22876 2 6.34315 3.17157 5.17157C4.34315 4 6.22876 4 10 4H14C17.7712 4 19.6569 4 20.8284 5.17157C22 6.34315 22 8.22876 22 12V14C22 17.7712 22 19.6569 20.8284 20.8284C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.8284C2 19.6569 2 17.7712 2 14V12Z" stroke="#1C274C" stroke-width="1.5"/><path opacity="0.5" d="M7 4V2.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/><path opacity="0.5" d="M17 4V2.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/><path opacity="0.5" d="M2.5 9H21.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/><path d="M18 17C18 17.5523 17.5523 18 17 18C16.4477 18 16 17.5523 16 17C16 16.4477 16.4477 16 17 16C17.5523 16 18 16.4477 18 17Z" fill="#1C274C"/><path d="M18 13C18 13.5523 17.5523 14 17 14C16.4477 14 16 13.5523 16 13C16 12.4477 16.4477 12 17 12C17.5523 12 18 12.4477 18 13Z" fill="#1C274C"/><path d="M13 17C13 17.5523 12.5523 18 12 18C11.4477 18 11 17.5523 11 17C11 16.4477 11.4477 16 12 16C12.5523 16 13 16.4477 13 17Z" fill="#1C274C"/><path d="M13 13C13 13.5523 12.5523 14 12 14C11.4477 14 11 13.5523 11 13C11 12.4477 11.4477 12 12 12C12.5523 12 13 12.4477 13 13Z" fill="#1C274C"/><path d="M8 17C8 17.5523 7.55228 18 7 18C6.44772 18 6 17.5523 6 17C6 16.4477 6.44772 16 7 16C7.55228 16 8 16.4477 8 17Z" fill="#1C274C"/><path d="M8 13C8 13.5523 7.55228 14 7 14C6.44772 14 6 13.5523 6 13C6 12.4477 6.44772 12 7 12C7.55228 12 8 12.4477 8 13Z" fill="#1C274C"/></svg>
                            1403/8/17
                            </span>
                        </div>
                        <hr>
                        <a href="" class="last-blog-cart-btn">
                            مشاهده جزئیات  
                            <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 9L10.5 12L13.5 15" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path opacity="0.5" d="M2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C22 4.92893 22 7.28595 22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12Z" stroke="#1C274C" stroke-width="1.5"/></svg> 
                        </a>
                    </div>
                </div>
        </div>
    </div>
</main>
<?php
include 'footer.php'
?>
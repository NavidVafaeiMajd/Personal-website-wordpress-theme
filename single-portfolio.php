<?php
if(!defined('ABSPATH')){
    wp_die();
}

$stylePlaceHolder = TD . '/asset/css/portfolio.css';
include 'header.php';
if(have_posts()){
    while(have_posts()){
        the_post();
        $postTitle = get_the_title();
        $postID = get_the_ID();
        $thumbnails =  get_the_post_thumbnail_url($postID ) ;
    }
}

?>
<main>
    <div class="content-of-portfolio container">
        <nav aria-label="breadcrumb" >
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                <a href="">
                     نمونه کار ها /  
                </a>
                </li>
                <li class="" aria-current="page">
                    <?php echo  $postTitle;?>
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
        <div class="head-content-of-portfolio row">
            <div class="img-head-content-of-portfolio col-md-6">
                <a href="<?php  echo get_permalink();?>" class="single-portfolio-btn-copy-short-url" data-bs-toggle="tooltip" onclick="copyToClipboard()" title="کپی لینک نمونه کار">
                        <svg xmlns="http://www.w3.org/2000/svg" id="Layer" viewBox="0 0 24 24"><defs><style></style></defs><path id="link" class="cls-1" d="M21.5,8.023a5.442,5.442,0,0,1-1.615,3.9L17.92,13.9a.5.5,0,1,1-.709-.7l1.968-1.978a4.53,4.53,0,0,0,0-6.394,4.528,4.528,0,0,0-6.394,0L10.819,6.8a.5.5,0,0,1-.709-.7l1.968-1.978A5.517,5.517,0,0,1,21.5,8.023Zm-8.3,9.186-1.979,1.969a4.521,4.521,0,0,1-6.395-6.392L6.8,10.818a.5.5,0,1,0-.7-.709l-1.98,1.969a5.521,5.521,0,0,0,7.807,7.808L13.9,17.918a.5.5,0,1,0-.7-.709Zm1.478-8.588L8.646,14.646a.5.5,0,0,0,.708.708L15.38,9.328a.5.5,0,1,0-.707-.707Z"></path></svg>
                        <script>
                            // copy link portfolio
                            $(document).ready(function(){
                            $(".single-portfolio-btn-copy-short-url").click(function(event) {
                            event.preventDefault();
                            navigator.clipboard.writeText($(this).attr("href"));
                            alert("لینک مقاله با موفقیت کپی شد.")
                            });

                            });
                        </script>
                </a>
                <img src="<?php echo $thumbnails;?>" alt="">
            </div>
            <div class="info-head-content-of-portfolio col-md-6">
                <h2 class="title-head-content-of-portfolio"><?php echo $postTitle;?></h2>
                <div class="box-info-head-content-of-portfolio">
                    <ul class="items-info-head-content-of-portfolio">
                        <li>
                            <svg id="Huge-icon_time_and_date_outline_stopwatch-check" data-name="Huge-icon/time and date/outline/stopwatch-check" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path id="Ellipse_469" data-name="Ellipse 469" d="M9.25,18.5a.75.75,0,0,0,0-1.5Zm7.63-7.881a.75.75,0,0,0,1.477.263ZM9.25,17A7.75,7.75,0,0,1,1.5,9.25H0A9.25,9.25,0,0,0,9.25,18.5ZM1.5,9.25A7.75,7.75,0,0,1,9.25,1.5V0A9.25,9.25,0,0,0,0,9.25ZM9.25,1.5A7.75,7.75,0,0,1,17,9.25h1.5A9.25,9.25,0,0,0,9.25,0ZM17,9.25a7.8,7.8,0,0,1-.12,1.369l1.477.263A9.311,9.311,0,0,0,18.5,9.25Z" transform="translate(2.75 4.25)" fill="#28303f"></path>
                            <path id="Ellipse_476" data-name="Ellipse 476" d="M6.546,1.886A.75.75,0,1,0,6.954.442ZM.546.442A.75.75,0,1,0,.954,1.886ZM3.75,1.5a10.258,10.258,0,0,1,2.8.386L6.954.442A11.758,11.758,0,0,0,3.75,0Zm-2.8.386A10.258,10.258,0,0,1,3.75,1.5V0a11.758,11.758,0,0,0-3.2.442Z" transform="translate(8.25 1.25)" fill="#28303f"></path>
                            <path id="Vector_1188" data-name="Vector 1188" d="M1.219,2.164A.75.75,0,0,0,.282,3.336Zm6.1-.92A.75.75,0,1,0,6.186.256ZM2.5,4.152l-.469.586ZM.282,3.336l1.753,1.4.937-1.171-1.753-1.4ZM4.445,4.524l2.87-3.28L6.186.256l-2.87,3.28Zm-2.41.214a1.75,1.75,0,0,0,2.41-.214L3.316,3.536a.25.25,0,0,1-.344.031Z" transform="translate(13.25 17.25)" fill="#28303f"></path>
                            <path id="Ellipse_477" data-name="Ellipse 477" d="M3,2.25A.75.75,0,0,1,2.25,3V4.5A2.25,2.25,0,0,0,4.5,2.25ZM2.25,3a.75.75,0,0,1-.75-.75H0A2.25,2.25,0,0,0,2.25,4.5ZM1.5,2.25a.75.75,0,0,1,.75-.75V0A2.25,2.25,0,0,0,0,2.25Zm.75-.75A.75.75,0,0,1,3,2.25H4.5A2.25,2.25,0,0,0,2.25,0Z" transform="translate(9.75 11.75)" fill="#28303f"></path>
                            <path id="Vector_1187" data-name="Vector 1187" d="M0,3.75a.75.75,0,0,0,1.5,0Zm1.5-3A.75.75,0,0,0,0,.75Zm0,3v-3H0v3Z" transform="translate(11.25 8.25)" fill="#28303f"></path>
                            </svg>
                            <span>
                                    مدت زمان انجام پروژه :    
                                    <b><?php echo get_post_meta($postID, 'time_do', true)?> </b> روز 
                            </span>
                        </li>
                        <li>
                            <svg id="Huge-icon_business_outline_deal" data-name="Huge-icon/business/outline/deal" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path id="Vector" d="M1.962,12.356l-.321.678h0Zm3.93,1.858.321-.678h0Zm3.819.338.2.723h0Zm3.53-.974-.2-.723ZM3.905,1.216,3.543.559h0ZM1.856,2.347,1.493,1.69h0Zm12.656,8.035-.672.332h0Zm3.083-9.165-.362.657h0Zm2.05,1.131.362-.657h0Zm-5.3,9.686a.75.75,0,0,0,0,1.5ZM8.695,7.309l-.556.5h0Zm2.111,0,.556.5h0Zm-.256-4.9-.607-.44h0ZM8.585,5.116l-.607-.44Zm3.636.632.672-.332a.75.75,0,0,0-1.228-.171Zm-1.7-3.306.607.44h0ZM0,4.32v6.008H1.5V4.32Zm1.642,8.714,3.93,1.858.641-1.356-3.93-1.858ZM9.91,15.275l3.53-.974-.4-1.446-3.53.974ZM7.375,0H5.694V1.5H7.375ZM3.543.559,1.493,1.69,2.218,3l2.05-1.131ZM5.694,0A4.447,4.447,0,0,0,3.543.559l.725,1.313A2.947,2.947,0,0,1,5.694,1.5ZM13.44,14.3a3.019,3.019,0,0,0,1.744-4.253l-1.345.665a1.524,1.524,0,0,1-.8,2.142Zm-7.869.591a6.23,6.23,0,0,0,4.339.382l-.4-1.446a4.73,4.73,0,0,1-3.3-.293ZM0,10.328a2.972,2.972,0,0,0,1.642,2.706l.641-1.356a1.475,1.475,0,0,1-.783-1.35ZM1.5,4.32A1.492,1.492,0,0,1,2.218,3L1.493,1.69A2.989,2.989,0,0,0,0,4.32Zm18.5,0v6.256h1.5V4.32ZM13.672,1.5h2.133V0H13.672Zm3.56.373L19.282,3l.725-1.313L17.957.559ZM18.75,12.033H14.342v1.5H18.75ZM8.139,7.813a2.145,2.145,0,0,0,3.222,0L10.25,6.805a.647.647,0,0,1-1,0ZM15.806,1.5a2.947,2.947,0,0,1,1.427.373L17.957.559A4.448,4.448,0,0,0,15.806,0ZM11.156,2.847A3.123,3.123,0,0,1,13.673,1.5V0A4.621,4.621,0,0,0,9.942,1.966ZM7.977,4.675a2.524,2.524,0,0,0,.162,3.137L9.25,6.805a1.025,1.025,0,0,1-.059-1.249ZM20,10.577a1.365,1.365,0,0,1-1.25,1.457v1.5a2.859,2.859,0,0,0,2.75-2.957ZM21.5,4.32a2.99,2.99,0,0,0-1.493-2.63L19.282,3A1.492,1.492,0,0,1,20,4.32ZM11.361,7.813l1.415-1.561L11.665,5.244,10.25,6.805Zm3.823,2.236L12.893,5.415l-1.345.665,2.291,4.634ZM9.192,5.556l1.939-2.675L9.917,2,7.977,4.675Zm1.939-2.675.025-.035L9.942,1.966,9.917,2Zm0-.875A4.627,4.627,0,0,0,7.375,0V1.5A3.128,3.128,0,0,1,9.912,2.875Z" transform="translate(1.25 4.25)" fill="#28303f"></path>
                            </svg>
                            <span>
                            کارفرمای پروژه :                    <b> 
                            <?php echo get_post_meta($postID, 'project_employer', true)?>                       </b>
                                
                            </span>
                        </li>
                        <li>

                            <svg id="Huge-icon_navigation_maps_outline_gps" data-name="Huge-icon/navigation maps/outline/gps" xmlns="http://www.w3.org/2000/svg" width="21.5" height="21.5" viewBox="0 0 21.5 21.5">
                            <g id="Ellipse_871" data-name="Ellipse 871" transform="translate(2 2)" fill="none" stroke-miterlimit="10">
                                <path d="M16,8.75A7.25,7.25,0,0,1,8.75,16v1.5A8.75,8.75,0,0,0,17.5,8.75ZM8.75,16A7.25,7.25,0,0,1,1.5,8.75H0A8.75,8.75,0,0,0,8.75,17.5ZM1.5,8.75A7.25,7.25,0,0,1,8.75,1.5V0A8.75,8.75,0,0,0,0,8.75ZM8.75,1.5A7.25,7.25,0,0,1,16,8.75h1.5A8.75,8.75,0,0,0,8.75,0Z" stroke="none"></path>
                                <path d="M 8.75 0 C 13.58250045776367 0 17.5 3.917510032653809 17.5 8.75 L 16 8.75 C 16 4.745940208435059 12.75409984588623 1.5 8.75 1.5 L 8.75 0 Z M 8.75 0 L 8.75 1.5 C 4.745940208435059 1.5 1.5 4.745940208435059 1.5 8.75 L 0 8.75 C 0 3.917510032653809 3.917510032653809 0 8.75 0 Z M 0 8.75 L 1.5 8.75 C 1.5 12.75409984588623 4.745940208435059 16 8.75 16 L 8.75 17.5 C 3.917510032653809 17.5 0 13.58250045776367 0 8.75 Z M 16 8.75 L 17.5 8.75 C 17.5 13.58250045776367 13.58250045776367 17.5 8.75 17.5 L 8.75 16 C 12.75409984588623 16 16 12.75409984588623 16 8.75 Z" stroke="none" fill="#28303f"></path>
                            </g>
                            <path id="Vector_2278" data-name="Vector 2278" d="M1.092,3.718l-.237.712h0Zm1.515.505.237-.712h0Zm.316.316L3.635,4.3h0Zm.505,1.515.712-.237h0Zm.934.039-.689-.3h0Zm1.99-4.642.689.3h0ZM5.7.794,5.4.1h0ZM1.053,2.784l-.3-.689h0Zm-.2,1.645,1.515.505.474-1.423L1.329,3.006Zm1.357.347.505,1.515L4.14,5.817,3.635,4.3Zm2.84,1.612,1.99-4.642L5.663,1.155,3.673,5.8ZM5.4.1.758,2.094l.591,1.379,4.642-1.99ZM7.041,1.746A1.25,1.25,0,0,0,5.4.1l.591,1.379a.25.25,0,0,1-.328-.328ZM2.717,6.291a1.25,1.25,0,0,0,2.335.1L3.673,5.8a.25.25,0,0,1,.467.019ZM2.37,4.934a.25.25,0,0,1-.158-.158L3.635,4.3a1.25,1.25,0,0,0-.791-.791ZM1.329,3.006a.25.25,0,0,1,.019.467L.758,2.094a1.25,1.25,0,0,0,.1,2.335Z" transform="translate(6.906 7.448)" fill="#28303f"></path>
                            <path id="Vector_2279" data-name="Vector 2279" d="M0,2.75a.75.75,0,0,0,1.5,0Zm1.5-2A.75.75,0,0,0,0,.75Zm0,2v-2H0v2Z" transform="translate(10)" fill="#28303f"></path>
                            <path id="Vector_2280" data-name="Vector 2280" d="M0,2.75a.75.75,0,0,0,1.5,0Zm1.5-2A.75.75,0,0,0,0,.75Zm0,2v-2H0v2Z" transform="translate(10 18)" fill="#28303f"></path>
                            <path id="Vector_2281" data-name="Vector 2281" d="M.75,0a.75.75,0,0,0,0,1.5Zm2,1.5a.75.75,0,0,0,0-1.5Zm-2,0h2V0h-2Z" transform="translate(18 10)" fill="#28303f"></path>
                            <path id="Vector_2282" data-name="Vector 2282" d="M.75,0a.75.75,0,0,0,0,1.5Zm2,1.5a.75.75,0,0,0,0-1.5Zm-2,0h2V0h-2Z" transform="translate(0 10)" fill="#28303f"></path>
                            </svg>
                            <span>
                                    مکان : 
                                    <b>
                                    <?php echo get_post_meta($postID, 'location', true)?>                        </b>
                            </span>
                        </li>
                        <li>
                            <svg id="Huge-icon_interface_outline_layers" data-name="Huge-icon/interface/outline/layers" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path id="Vector" d="M1.539,6.408,1.2,7.079h0Zm7.317,3.658L9.191,9.4Zm9.106-3.658.336.671h0Zm0-1.789.336-.671h0ZM10.645.961l-.335.671Zm-1.789,0L8.52.29h0ZM1.539,4.62,1.2,3.949h0Zm9.023,15.533-.3-.685h0ZM19.055,17.2a.75.75,0,1,0-.609-1.371Zm-18-1.371A.75.75,0,1,0,.446,17.2Zm7.883,4.324.3-.685h0Zm1.625-5-.3-.685h0ZM19.055,12.2a.75.75,0,1,0-.609-1.371Zm-18-1.371A.75.75,0,1,0,.446,12.2Zm7.883,4.324.3-.685h0ZM1.2,7.079,8.52,10.738,9.191,9.4,1.874,5.738Zm9.776,3.658L18.3,7.079l-.671-1.342L10.309,9.4ZM18.3,3.949,10.98.29l-.671,1.342L17.626,5.29ZM8.52.29,1.2,3.949,1.874,5.29,9.191,1.632Zm2.46,0a2.75,2.75,0,0,0-2.46,0l.671,1.342a1.25,1.25,0,0,1,1.118,0ZM18.3,7.079a1.75,1.75,0,0,0,0-3.131L17.626,5.29a.25.25,0,0,1,0,.447ZM8.52,10.738a2.75,2.75,0,0,0,2.46,0L10.309,9.4a1.25,1.25,0,0,1-1.118,0Zm-6.646-5a.25.25,0,0,1,0-.447L1.2,3.949a1.75,1.75,0,0,0,0,3.13Zm8.993,15.1L19.055,17.2l-.609-1.371-8.188,3.639ZM.446,17.2l8.188,3.639.609-1.371L1.055,15.829Zm9.812,2.268a1.25,1.25,0,0,1-1.015,0l-.609,1.371a2.75,2.75,0,0,0,2.234,0Zm.609-3.629L19.055,12.2l-.609-1.371-8.188,3.639ZM.446,12.2l8.188,3.639.609-1.371L1.055,10.829Zm9.812,2.268a1.25,1.25,0,0,1-1.015,0l-.609,1.371a2.75,2.75,0,0,0,2.234,0Z" transform="translate(2.25 1.486)" fill="#28303f"></path>
                            </svg>
                            <span>
                                    دسته بندی :                    <b>
                                    <?php 
                                        $terms = the_terms( $postID, 'portfoliocat' ); 
                                        echo $terms;
                                    ?>                  
                                </b>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="main-content-of-portfolio">
            <?php
            the_content();
            ?>
        </div>
    </div>
</main>
<?php
include 'footer.php';
?>
<?php
$stylePlaceHolder = TD . '/asset/css/single.css';
include 'header.php';
if(have_posts()){
    while(have_posts()){
        the_post();
        $postTitle = get_the_title();
        $postID = get_the_ID();
        $thumbnails =  get_the_post_thumbnail_url($postID ) ;
        $userId = get_current_user_id();
        $favorite_list = get_user_meta($userId, 'favorite_list', true);
        if($favorite_list){
            if(in_array($postID , $favorite_list)){
                $is_favorite= true;
            }else{
                $is_favorite= false;
            }
        }
    }
}
?>
<main>
    <div class="blog-content container">
    <nav aria-label="breadcrumb" >
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                <a href="">
                     وبلاگ /  
                </a>
                </li>
                <li class="" aria-current="page">
                     <?php echo $postTitle;?>
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
    <div class="blog-content-header">
            <div class="blog-content-header-img">
                <img src="<?php if ( has_post_thumbnail() ) {
                            echo $thumbnails;
                        }else{
                            echo TD.'/asset/img/img-blog-topigo07.jpg';
                        } ?>" alt="">
            </div>
            <div class="blog-content-header-info">
                <h4> <?php echo $postTitle;?></h4>
                <div class="blog-content-header-info-deatlis d-flex flex-column flex-md-row g-2">
                    <ul>
                        <li>
                            <svg width="210px" height="210px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.2424 20H17.5758M4.48485 16.5L15.8242 5.25607C16.5395 4.54674 17.6798 4.5061 18.4438 5.16268V5.16268C19.2877 5.8879 19.3462 7.17421 18.5716 7.97301L7.39394 19.5L4 20L4.48485 16.5Z" stroke="#464455" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span>
                                نویسنده <b> : <?php echo get_the_author()?></b>
                            </span>
                        </li>
                        <li>
                        <svg width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.34" d="M5 10H7C9 10 10 9 10 7V5C10 3 9 2 7 2H5C3 2 2 3 2 5V7C2 9 3 10 5 10Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/><path d="M17 10H19C21 10 22 9 22 7V5C22 3 21 2 19 2H17C15 2 14 3 14 5V7C14 9 15 10 17 10Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/><path opacity="0.34" d="M17 22H19C21 22 22 21 22 19V17C22 15 21 14 19 14H17C15 14 14 15 14 17V19C14 21 15 22 17 22Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/><path d="M5 22H7C9 22 10 21 10 19V17C10 15 9 14 7 14H5C3 14 2 15 2 17V19C2 21 3 22 5 22Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            <span>
                            دسته بندی <b> :<?php echo  the_category(",")?></b>
                            </span>
                        </li>
                        <li>
                        <svg style="margin-left:5px;" width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 12C2 8.22876 2 6.34315 3.17157 5.17157C4.34315 4 6.22876 4 10 4H14C17.7712 4 19.6569 4 20.8284 5.17157C22 6.34315 22 8.22876 22 12V14C22 17.7712 22 19.6569 20.8284 20.8284C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.8284C2 19.6569 2 17.7712 2 14V12Z" stroke="#1C274C" stroke-width="1.5"/><path opacity="0.5" d="M7 4V2.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/><path opacity="0.5" d="M17 4V2.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/><path opacity="0.5" d="M2.5 9H21.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/><path d="M18 17C18 17.5523 17.5523 18 17 18C16.4477 18 16 17.5523 16 17C16 16.4477 16.4477 16 17 16C17.5523 16 18 16.4477 18 17Z" fill="#1C274C"/><path d="M18 13C18 13.5523 17.5523 14 17 14C16.4477 14 16 13.5523 16 13C16 12.4477 16.4477 12 17 12C17.5523 12 18 12.4477 18 13Z" fill="#1C274C"/><path d="M13 17C13 17.5523 12.5523 18 12 18C11.4477 18 11 17.5523 11 17C11 16.4477 11.4477 16 12 16C12.5523 16 13 16.4477 13 17Z" fill="#1C274C"/><path d="M13 13C13 13.5523 12.5523 14 12 14C11.4477 14 11 13.5523 11 13C11 12.4477 11.4477 12 12 12C12.5523 12 13 12.4477 13 13Z" fill="#1C274C"/><path d="M8 17C8 17.5523 7.55228 18 7 18C6.44772 18 6 17.5523 6 17C6 16.4477 6.44772 16 7 16C7.55228 16 8 16.4477 8 17Z" fill="#1C274C"/><path d="M8 13C8 13.5523 7.55228 14 7 14C6.44772 14 6 13.5523 6 13C6 12.4477 6.44772 12 7 12C7.55228 12 8 12.4477 8 13Z" fill="#1C274C"/></svg>
                            <span>
                            تاریخ  <b> : <?php echo get_the_date()?> </b>
                            </span>
                        </li>
                        <li>
                            <a href="" id="like-button" class="<?php echo ($is_favorite)?'is_active':'salam' ?>">
                                <svg width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 10V20M8 10L4 9.99998V20L8 20M8 10L13.1956 3.93847C13.6886 3.3633 14.4642 3.11604 15.1992 3.29977L15.2467 3.31166C16.5885 3.64711 17.1929 5.21057 16.4258 6.36135L14 9.99998H18.5604C19.8225 9.99998 20.7691 11.1546 20.5216 12.3922L19.3216 18.3922C19.1346 19.3271 18.3138 20 17.3604 20L8 20" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <script>
                                $(document).ready(function(){
                                    $('#like-button').click(function(e){
                                        let post_id = <?php echo $postID?>;
                                        e.preventDefault();
                                        let ajaxURL = '<?php echo admin_url('admin-ajax.php');?>'; 
                                        			//here can make loader start

                                        $.ajax({
                                            
                                            type : 'POST',
                                            dataType : 'json',
                                            url : ajaxURL,
                                            data :{
                                                post_id : '<?php echo $postID?>',
                                                action : 'make-favorite'
                                            },
                                            error : function(e){
                                                console.log(e)
                                            },
                                            success : function(data){
                                                if(data.is_sent){
                                                    if(data.is_favorite){
                                                        					//here loader finish

                                                        $('#like-button').addClass('is_active');
                                                    }else{
                                                        					//here loader finish

                                                        $('#like-button').removeClass('is_active');
                                                    };
                                                    
                                                }else{
                                                    data.ErrorMessage.forEach(error=>{
                                                        console.log(error)
                                                    })
                                                        
                                        
                                                }
                                                
                                            }
                                        })
                                    })                                    
                                })
                            </script>
                        </li>
                    </ul>
                    <a href="<?php  echo wp_get_shortlink();?>" class="copy-link-head-det-blog">
                        کپی لینک مقاله
                        <svg width="21px" xmlns="http://www.w3.org/2000/svg" id="Layer" viewBox="0 0 24 24"><defs></defs><path id="link" class="cls-1" d="M21.5,8.023a5.442,5.442,0,0,1-1.615,3.9L17.92,13.9a.5.5,0,1,1-.709-.7l1.968-1.978a4.53,4.53,0,0,0,0-6.394,4.528,4.528,0,0,0-6.394,0L10.819,6.8a.5.5,0,0,1-.709-.7l1.968-1.978A5.517,5.517,0,0,1,21.5,8.023Zm-8.3,9.186-1.979,1.969a4.521,4.521,0,0,1-6.395-6.392L6.8,10.818a.5.5,0,1,0-.7-.709l-1.98,1.969a5.521,5.521,0,0,0,7.807,7.808L13.9,17.918a.5.5,0,1,0-.7-.709Zm1.478-8.588L8.646,14.646a.5.5,0,0,0,.708.708L15.38,9.328a.5.5,0,1,0-.707-.707Z"></path></svg>
                    </a>
                    <script>

                        $(document).ready(function(){

                            $(".copy-link-head-det-blog").click(function(event) {
                            event.preventDefault();
                            navigator.clipboard.writeText($(this).attr("href"));
                            alert("لینک مقاله با موفقیت کپی شد.")
                            });

                        });
                        

                    </script>
                </div>
            </div>
        </div>
        <div class="text-blog-content">
            <?php
             the_content();
            ?>
        </div>
        <div class="text-blog-content-comment">
            <?php comments_template();?>
        </div>
    </div>
    
</main>

<?php

include 'footer.php';
?>
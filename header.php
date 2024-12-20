<!DOCTYPE html>
<html lang="en">
<head>
<?php wp_head();?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="<?php echo TD?>/Screenshot.png">
    <link rel="stylesheet" href="<?php echo TD?>/asset/css/main-css.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <?php
        if(isset($stylePlaceHolder)){
            ?>
                <link rel="stylesheet" href="<?php echo $stylePlaceHolder?>">
            <?php
        }

        $currentUserData = wp_get_current_user();
        $myAccountItem = wc_get_account_menu_items();
        $myaccount_page = get_option( 'woocommerce_myaccount_page_id' );

    ?>

    <title>Personal Website</title>
</head>
<body>
    <header>
        <div id="header-content" class="d-none d-md-flex ">
            <div id="header-doted">
                <span id="header-doted-red" style=""></span>
                <span id="header-doted-yellow"></span>
                <span id="header-doted-green"></span>
            </div>
            <div id="header-menu">
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => '',
                        
                    ))
                ?>
            </div>
            <div id="header-login-btn">
                
                    <?php
                    if(is_user_logged_in()){

                        ?>
                        <a id="header-login-btn_account" href="<?php if ( $myaccount_page ) {echo get_permalink( $myaccount_page );} ?>">
                            <?php
                            echo $currentUserData->display_name;
                            echo (" عزیز خوش آمدید! ");
                            
                            ?>
                        </a>
                        <?php do_action('woocommerce_account_navigation');?>
                        <?php
                    }else{
                        ?>
                        <a href="<?php if ( $myaccount_page ) {echo get_permalink( $myaccount_page );} ?>">
                            <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="6" r="4" stroke="white" stroke-width="1.5"/>
                                <path opacity="0.5" d="M20 17.5C20 19.9853 20 22 12 22C4 22 4 19.9853 4 17.5C4 15.0147 7.58172 13 12 13C16.4183 13 20 15.0147 20 17.5Z" stroke="white" stroke-width="1.5"/>
                            </svg>
                            عضویت / ورود
                        </a>
                        <?php
                    }
                    ?>
                
            </div>
        </div>
        <div class="cart-icon-btn">
            <?php do_shortcode('[woo_cart_shortcode]')?>
            
        </div>
        <!-- <script>
            $(document).ready(function(){
                $("#header-login-btn_account").hover(function(){
                    $("#header-login-btn nav.woocommerce-MyAccount-navigation").show();
                },
                function() {
                    $("#header-login-btn nav.woocommerce-MyAccount-navigation").hide();
                }
                );
            });
        </script> -->
    </header>
    <header id="mobile-header" class="d-md-none ">
        <div id="mobile-header-main">
            <div class="mobile-header-item">
                <a href="">
                    <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274C22 8.77128 22 9.91549 22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039Z" stroke="#1C274C" stroke-width="1.5"/><path d="M15 18H9" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/></svg>
                    <span>
                        خانه
                    </span>
                </a>
            </div>
            <div class="mobile-header-item">
                <a href="">
                <svg fill="#000000" width="25px" height="25px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M172.2 226.8c-14.6-2.9-28.2 8.9-28.2 23.8V251c0 10.2 7.1 18.4 16.7 22 18.2 6.8 31.3 24.4 31.3 45 0 26.5-21.5 48-48 48s-48-21.5-48-48V120c0-13.3-10.7-24-24-24H24c-13.3 0-24 10.7-24 24v248c0 89.5 82.1 160.2 175 140.7 54.4-11.4 98.3-55.4 109.7-109.7 17.4-82.9-37-157.2-112.5-172.2zM209 0c-9.2-.5-17 6.8-17 16v31.6c0 8.5 6.6 15.5 15 15.9 129.4 7 233.4 112 240.9 241.5.5 8.4 7.5 15 15.9 15h32.1c9.2 0 16.5-7.8 16-17C503.4 139.8 372.2 8.6 209 0zm.3 96c-9.3-.7-17.3 6.7-17.3 16.1v32.1c0 8.4 6.5 15.3 14.8 15.9 76.8 6.3 138 68.2 144.9 145.2.8 8.3 7.6 14.7 15.9 14.7h32.2c9.3 0 16.8-8 16.1-17.3-8.4-110.1-96.5-198.2-206.6-206.7z"/></svg>    
                <span>
                        بلاگ
                    </span>
                </a>
            </div>
            <div class="mobile-header-item">
                <a href="">
                <svg  height="25px" width="25px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 295.668 295.668" xml:space="preserve"><g><g><g><path d="M269.038,75.741c0.183-0.714,0.29-1.459,0.29-2.231c0-4.971-4.029-9-9-9h-19.499c-4.971,0-9,4.029-9,9
				c0,0.397,0.035,0.785,0.084,1.169h-27.111V62.25c0-20.633-16.787-37.42-37.421-37.42h-39.096
				c-20.634,0-37.421,16.787-37.421,37.42v12.429h-27.11c0.05-0.384,0.084-0.772,0.084-1.169c0-4.971-4.029-9-9-9H35.34
				c-4.971,0-9,4.029-9,9c0,0.771,0.107,1.516,0.29,2.231C11.349,79.581,0,93.432,0,109.888V235.63
				c0,19.414,15.794,35.208,35.208,35.208H260.46c19.414,0,35.208-15.794,35.208-35.208V109.888
				C295.668,93.432,284.319,79.581,269.038,75.741z M108.865,62.25c0-10.708,8.712-19.42,19.421-19.42h39.096
				c10.709,0,19.421,8.712,19.421,19.42v12.429h-77.938V62.25z M277.668,235.63c0,9.488-7.72,17.208-17.208,17.208H35.208
				c-9.488,0-17.208-7.72-17.208-17.208V109.888c0-9.489,7.72-17.208,17.208-17.208H260.46c9.488,0,17.208,7.72,17.208,17.208
				V235.63z"/><path d="M236.314,129.095H59.354c-4.971,0-9,4.029-9,9c0,4.971,4.029,9,9,9h176.961c4.971,0,9-4.029,9-9
				C245.315,133.124,241.285,129.095,236.314,129.095z"/><path d="M236.314,164.645H59.354c-4.971,0-9,4.029-9,9c0,4.971,4.029,9,9,9h176.961c4.971,0,9-4.029,9-9
				C245.315,168.674,241.285,164.645,236.314,164.645z"/><path d="M236.314,200.195H59.354c-4.971,0-9,4.029-9,9s4.029,9,9,9h176.961c4.971,0,9-4.029,9-9S241.285,200.195,236.314,200.195
				z"/></g></g></g></svg>
                
                <span>
                        نمونه کار
                    </span>
                </a>
            </div>
            <div class="mobile-header-item mobile-header-item-menu">
                <a href="">
                    <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9 12C9 12.5523 8.55228 13 8 13C7.44772 13 7 12.5523 7 12C7 11.4477 7.44772 11 8 11C8.55228 11 9 11.4477 9 12Z" fill="#1C274C"/><path d="M13 12C13 12.5523 12.5523 13 12 13C11.4477 13 11 12.5523 11 12C11 11.4477 11.4477 11 12 11C12.5523 11 13 11.4477 13 12Z" fill="#1C274C"/><path d="M16 13C16.5523 13 17 12.5523 17 12C17 11.4477 16.5523 11 16 11C15.4477 11 15 11.4477 15 12C15 12.5523 15.4477 13 16 13Z" fill="#1C274C"/><path fill-rule="evenodd" clip-rule="evenodd" d="M12.0574 1.25H11.9426C9.63424 1.24999 7.82519 1.24998 6.41371 1.43975C4.96897 1.63399 3.82895 2.03933 2.93414 2.93414C2.03933 3.82895 1.63399 4.96897 1.43975 6.41371C1.24998 7.82519 1.24999 9.63422 1.25 11.9426V12.0574C1.24999 14.3658 1.24998 16.1748 1.43975 17.5863C1.63399 19.031 2.03933 20.1711 2.93414 21.0659C3.82895 21.9607 4.96897 22.366 6.41371 22.5603C7.82519 22.75 9.63423 22.75 11.9426 22.75H12.0574C14.3658 22.75 16.1748 22.75 17.5863 22.5603C19.031 22.366 20.1711 21.9607 21.0659 21.0659C21.9607 20.1711 22.366 19.031 22.5603 17.5863C22.75 16.1748 22.75 14.3658 22.75 12.0574V11.9426C22.75 9.63423 22.75 7.82519 22.5603 6.41371C22.366 4.96897 21.9607 3.82895 21.0659 2.93414C20.1711 2.03933 19.031 1.63399 17.5863 1.43975C16.1748 1.24998 14.3658 1.24999 12.0574 1.25ZM3.9948 3.9948C4.56445 3.42514 5.33517 3.09825 6.61358 2.92637C7.91356 2.75159 9.62177 2.75 12 2.75C14.3782 2.75 16.0864 2.75159 17.3864 2.92637C18.6648 3.09825 19.4355 3.42514 20.0052 3.9948C20.5749 4.56445 20.9018 5.33517 21.0736 6.61358C21.2484 7.91356 21.25 9.62177 21.25 12C21.25 14.3782 21.2484 16.0864 21.0736 17.3864C20.9018 18.6648 20.5749 19.4355 20.0052 20.0052C19.4355 20.5749 18.6648 20.9018 17.3864 21.0736C16.0864 21.2484 14.3782 21.25 12 21.25C9.62177 21.25 7.91356 21.2484 6.61358 21.0736C5.33517 20.9018 4.56445 20.5749 3.9948 20.0052C3.42514 19.4355 3.09825 18.6648 2.92637 17.3864C2.75159 16.0864 2.75 14.3782 2.75 12C2.75 9.62177 2.75159 7.91356 2.92637 6.61358C3.09825 5.33517 3.42514 4.56445 3.9948 3.9948Z" fill="#1C274C"/></svg>                    <span>
                        منو
                    </span>
                </a>
            </div>
        </div>
    </header>
<div id="mobile-nav-menu" class="d-md-none">
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'mobile',
                        'container' => '',
                        
                    ))
                ?>
</div>
<script> 
$(document).ready(function(){
  $(".mobile-header-item-menu").click(function(){
    $("#mobile-nav-menu").slideToggle("slow");
  });
  $("main").click(function(){
    $("#mobile-nav-menu").slideUp("slow");
  });
  $('.mobile-header-item-menu a').click(function (e) {
    e.preventDefault();
  })
});
</script>
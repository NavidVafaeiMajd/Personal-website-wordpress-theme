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
    ?>

    <title>Personal Website</title>
</head>
<body>
    <header>
        <div id="header-content">
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
                <button>
                    <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="12" cy="6" r="4" stroke="white" stroke-width="1.5"/>
                        <path opacity="0.5" d="M20 17.5C20 19.9853 20 22 12 22C4 22 4 19.9853 4 17.5C4 15.0147 7.58172 13 12 13C16.4183 13 20 15.0147 20 17.5Z" stroke="white" stroke-width="1.5"/>
                    </svg>
                    عضویت / ورود
                </button>
            </div>
        </div>
        <div class="cart-icon-btn">
            <?php do_shortcode('[woo_cart_shortcode]')?>
            
        </div>
    </header>
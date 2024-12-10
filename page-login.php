<?php
if(!defined('ABSPATH')){
    wp_die();
}

$stylePlaceHolder = TD . '/asset/css/home.css';
include 'header.php';
if(!is_user_logged_in()){
    wp_login_form();
    do_action( 'register_form' );
}{
    ?>
    <script>
        window.location.href = "<?php if ( $myaccount_page ) {echo get_permalink( $myaccount_page );} ?>";
    </script>
    <?php
}
include 'footer.php'
?>
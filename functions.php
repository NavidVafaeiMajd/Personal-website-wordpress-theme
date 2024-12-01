<?php
define('TD' , get_template_directory_uri());

add_filter('use_block_editor_for_post', '__return_false');


add_action('after_setup_theme' , 'my_them_register_menu');

function my_them_register_menu(){
    register_nav_menus(array(
        'primary' => 'منوی اصلی',
        'mobile' => 'منو موبایل'
    ));
}


add_action('after_setup_theme' , 'widget_setup_for_theme');

function widget_setup_for_theme(){
    add_theme_support('widgets');
    add_theme_support('post-thumbnails');


}


/*change to solar date  */


add_filter('get_the_date', 'change_date_format');

function change_date_format(){
    //change date language here
    $date = get_the_time('Y/m/d');
    $date = explode('/', $date);
    $farsi_date = g2p($date[0],$date[1],$date[2]);
    return $farsi_date[0].'/'.$farsi_date[1].'/'.$farsi_date[2];
}

function g2p($g_y, $g_m, $g_d)
{
    $g_days_in_month = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
    $j_days_in_month = array(31, 31, 31, 31, 31, 31, 30, 30, 30, 30, 30, 29);

    $gy = $g_y-1600;
    $gm = $g_m-1;
    $gd = $g_d-1;

    $g_day_no = 365*$gy+floor(($gy+3)/4)-floor(($gy+99)/100)+floor(($gy+399)/400);

    for ($i=0; $i < $gm; ++$i){
        $g_day_no += $g_days_in_month[$i];
    }

    if ($gm>1 && (($gy%4==0 && $gy%100!=0) || ($gy%400==0))){
        /* leap and after Feb */
        ++$g_day_no;
    }

    $g_day_no += $gd;
    $j_day_no = $g_day_no-79;
    $j_np = floor($j_day_no/12053);
    $j_day_no %= 12053;
    $jy = 979+33*$j_np+4*floor($j_day_no/1461);
    $j_day_no %= 1461;

    if ($j_day_no >= 366) {
        $jy += floor(($j_day_no-1)/365);
        $j_day_no = ($j_day_no-1)%365;
    }
    $j_all_days = $j_day_no+1;

    for ($i = 0; $i < 11 && $j_day_no >= $j_days_in_month[$i]; ++$i) {
        $j_day_no -= $j_days_in_month[$i];
    }

    $jm = $i+1;
    $jd = $j_day_no+1;

    return array($jy, $jm, $jd, $j_all_days);
};

define( 'WP_AUTO_UPDATE_CORE', false );

//some change to archive template
function change_in_shop_loop(){
    global $product;

    // دریافت دسته‌بندی‌های محصول
    $categories = wp_get_post_terms($product->get_id(), 'product_cat');

    // نمایش دسته‌بندی‌ها
    if (!empty($categories)) {
        echo '<div class="product-categories"> <span> دسته بندی : </span>';
        foreach ($categories as $category) {
            $category_link = get_term_link($category); // لینک دسته‌بندی
            if (!is_wp_error($category_link)) { // اطمینان از معتبر بودن لینک
                echo '<a href="' . esc_url($category_link) . '" class="product-category">';
                echo esc_html($category->name . '  '); // نمایش نام دسته‌بندی
                echo '</a>';
            }
        }
        echo '</div>';
    }
}; 
add_action('woocommerce_shop_loop_item_title' , 'change_in_shop_loop') ;

//change fileds ... in checkout

add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

// Our hooked in function - $fields is passed via the filter!
function custom_override_checkout_fields( $fields ) {
    unset( $fields['billing']['billing_company'] );
    unset( $fields['billing']['billing_address_1'] );
    unset( $fields['billing']['billing_address_2'] );
    unset( $fields['billing']['billing_city'] );
    unset( $fields['billing']['billing_postcode'] );
    unset( $fields['billing']['billing_country'] );
    unset( $fields['billing']['billing_state'] );
    $fields['billing']['billing_phone']['label'] = 'شماره';


    return $fields;
}

// create shortcode for cart button
add_shortcode('woo_cart_shortcode' , 'cart_shortcode_callback');

function cart_shortcode_callback(){
    $totalCartPrice = WC()->cart->cart_contents_total;
    $totalCartCount = WC()->cart->cart_contents_count;
    $cartUrl = wc_get_cart_url();

    if($totalCartCount!=0){
        echo(   '<a href="'.$cartUrl.'">
        <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2 3L2.26491 3.0883C3.58495 3.52832 4.24497 3.74832 4.62248 4.2721C5 4.79587 5 5.49159 5 6.88304V9.5C5 12.3284 5 13.7426 5.87868 14.6213C6.75736 15.5 8.17157 15.5 11 15.5H19" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
            <path opacity="0.5" d="M7.5 18C8.32843 18 9 18.6716 9 19.5C9 20.3284 8.32843 21 7.5 21C6.67157 21 6 20.3284 6 19.5C6 18.6716 6.67157 18 7.5 18Z" stroke="#1C274C" stroke-width="1.5"/>
            <path opacity="0.5" d="M16.5 18.0001C17.3284 18.0001 18 18.6716 18 19.5001C18 20.3285 17.3284 21.0001 16.5 21.0001C15.6716 21.0001 15 20.3285 15 19.5001C15 18.6716 15.6716 18.0001 16.5 18.0001Z" stroke="#1C274C" stroke-width="1.5"/>
            <path d="M5 6H16.4504C18.5054 6 19.5328 6 19.9775 6.67426C20.4221 7.34853 20.0173 8.29294 19.2078 10.1818L18.7792 11.1818C18.4013 12.0636 18.2123 12.5045 17.8366 12.7523C17.4609 13 16.9812 13 16.0218 13H5" stroke="#1C274C" stroke-width="1.5"/>
        </svg>
        <span>
            '.$totalCartPrice.' تومان
        </span>
        <span id="cart-count-icon">
            '.$totalCartCount.'
        </span>
    </a>'
    );
    }else{
        ?>
        <script>
            $('#cart-icon-btn').hide();
        </script>
        <?php
    }
;
}

// custome my account page
function custom_menu_items(){
    $myMenu = array(
        'dashboard' => 'داشبورد ',
        'orders' => 'سفارشات',
        'download' => 'دانلود ها ',
        'edit-account' => 'جزئیات حساب ',
        'logout' => ' خروج'
    );
    return $myMenu;
}
add_filter('woocommerce_account_menu_items' , 'custom_menu_items');

// create custom new post type

add_action('init' , 'regidter_portfolio_post_type');
function regidter_portfolio_post_type(){
    
    $labels = array(
        'name' => 'نمونه کار',
        'menu_name' => 'نمونه کار',
        'add_new' => 'افزودن نمونه کار',
        'add_new_item' => 'افزودن نمونه کار',
        'new_item' =>'نمونه کار جدید',
        'edit_item' => 'ویرایش نمونه کار' , 
        'view_item' => 'مشاهده نمونه کار' ,
        'all_items' => 'همه نمونه کار ها' , 
        'search_items' => 'جست و جو نمونه کار ها ',
        'not_found' => 'نمونه کاری یافت نشد'
    );
    
    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_icon' =>'dashicons-portfolio',
        'supports' => array('title' , 'editor' , 'comments' , 'thumbnail' , 'author' , 'gallery'),
        'has_archive' => true,


    );
    register_post_type('portfolio' , $args);

}

//create taxanomy for portfolio
add_action('init' , 'regidter_portfolio_post_type_taxanomy'); 
function regidter_portfolio_post_type_taxanomy(){
    $labels = array(
        'name' => 'دسته بندی نمونه کار ها ' ,
        'menu_name' => 'دسته بندی نمونه کار ها',
        'add_new' => 'افزودن دسته بندی نمونه کار',
        'add_new_item' => 'افزودن دسته بندی نمونه کار',
        'new_item' =>'دسته بندی نمونه کار جدید',
        'edit_item' => 'ویرایش دسته بندی نمونه کار' , 
        'view_item' => 'مشاهده دسته بندی نمونه کار' ,
        'all_items' => 'همه دسته بندی نمونه کار ها' , 
        'search_items' => 'جست و جو دسته بندی نمونه کار ها ',
        'not_found' => 'نمونه کاری یافت نشد'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'hierarchical' => true,
        'rewrite' => array('slug' => 'publisher')
    );
    register_taxonomy('portfoliocat' , 'portfolio' , $args);

}

//create meta box for more information in portfolio

add_action('add_meta_boxes' , 'add_custom_meta_box');
function add_custom_meta_box(){
    add_meta_box('posts_meta_box' , 'اطلاعات صفحه نمونه کار ' , 'post_meta_box_output' , 'portfolio' );
}

function post_meta_box_output(){
    $time_do_value = get_post_meta(get_the_ID(), 'time_do', true);
    $project_employer_value = get_post_meta(get_the_ID(), 'project_employer', true);
    $location_value = get_post_meta(get_the_ID(), 'location', true);

    ?>
    <label for="time_do"> مدت زمان انجام پروژه </label>
    <input type="text" name="time_do" id="time_do" value="<?php echo $time_do_value;?>" >
    <label for="project_employer"> مدت زمان انجام پروژه </label>
    <input type="text" name="project_employer" id="project_employer" value="<?php echo $project_employer_value;?>" >
    <label for="location"> مدت زمان انجام پروژه </label>
    <input type="text" name="location" id="location" value="<?php echo $location_value;?>" >
    <?php
}

add_action('save_post' , 'save_post_meta_box_values');
function save_post_meta_box_values($post_id){
    if(!current_user_can('edit_post' , $post_id)){
        return;
    }
    if(isset($_POST['time_do'])){
        $time_do_value= sanitize_text_field($_POST['time_do']);
        update_post_meta($post_id , 'time_do', $time_do_value);
    }
    if(isset($_POST['project_employer'])){
        $project_employer_value= sanitize_text_field($_POST['project_employer']);
        update_post_meta($post_id , 'project_employer', $project_employer_value);
    }
    if(isset($_POST['location'])){
        $location_value= sanitize_text_field($_POST['location']);
        update_post_meta($post_id , 'location', $location_value);
    }
}

///ajax handeler

add_action('wp_ajax_make-favorite' , 'make_favorite_callback');

add_action('wp_ajax_nopriv_make-favorite' , 'make_favorite_callback');

function make_favorite_callback(){
$postID =isset( $_POST['post_id'])?sanitize_text_field($_POST['post_id']):0; 
$all_data = [];
$all_data ['ErrorMessage'] = [];
$all_data ['is_sent'] = true;
$all_data['is_favorite']=false;

if(!is_user_logged_in()){
    $all_data ['is_sent'] = false;
    array_push($all_data ['ErrorMessage'] , 'user_not_login');
    echo json_encode($all_data);
    wp_die();
}

$userId = get_current_user_id();
$favorite_list = get_user_meta($userId, 'favorite_list', true);

if($favorite_list){
    if(in_array($postID , $favorite_list)){
        $new_array = array_diff($favorite_list , array($postID));
        update_user_meta($userId, 'favorite_list', $new_array);
        $all_data['is_favorite']=false;
        echo json_encode($all_data);
    }else{
        array_push($favorite_list , $postID); 
        update_user_meta($userId, 'favorite_list', $favorite_list);
        $all_data['is_favorite']=true;
        echo json_encode($all_data);
    }
}else{
    $favorite_list = array($postID);
    update_user_meta($userId, 'favorite_list', $favorite_list);
    $all_data['is_favorite']=true;
    echo json_encode($all_data);
}
wp_die();
}

////////////////////////////// add to cart ajax btn

add_action('wp_ajax_personal-add-to-cart' , 'personal_add_to_cart_callback');

add_action('wp_ajax_nopriv_personal-add-to-cart' , 'personal_add_to_cart_callback');

function personal_add_to_cart_callback(){
    $product_id = isset($_POST['product_id'])?sanitize_text_field($_POST['product_id']):0;
    $quantity = isset($_POST['quantity'])?sanitize_text_field($_POST['quantity']):0;


    $all_data = [];
    $all_data ['ErrorMessage'] = [];
    $all_data ['is_sent'] = true;
    $all_data ['cart_items'] = [];
    ///check requeste with woo method

    $check_validation= apply_filters('woocommerce_add_to_cart_validation' , true , $product_id , $quantity);

    ///check is publish or ...

    $product_status = get_post_status($product_id);

    //prosseing

    if($check_validation && $product_status == 'publish' && WC()->cart->add_to_cart($product_id , $quantity)){
        global $woocommerce;
        $cart_items=$woocommerce->cart->get_cart();
        $cart_count = WC()->cart->cart_contents_count;
        $all_data['cart_items_count'] = $cart_count;

        foreach ($cart_items as $item) {
            $cart=[];
            $cart['title'] = get_the_title($item['data']->get_id());
            $cart['quantity' ]= $item['quantity'];
            array_push($all_data['cart_items'] , $cart);
        }
    }else{
        $all_data['is_sent']=false;
        array_push($all_data['ErrorMessage'] , 'add_to_cart_error');

    }
    echo json_encode($all_data);
    wp_die();
}

?>
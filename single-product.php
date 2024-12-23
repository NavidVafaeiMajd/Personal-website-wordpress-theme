<?php
if(!defined('ABSPATH')){
    wp_die();
}

$stylePlaceHolder = TD . '/asset/css/woocommerce/single.css';
include 'header.php';
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
 ?>

<main class="container">

	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>

			<?php the_content() ?>
		<?php endwhile; // end of the loop. ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
		 do_shortcode('[related_products limit="4" columns="4"]');
	?>

</main>
<script>
	  $("<h1><?php echo the_title()?></h1>").insertBefore(".summary .price")
	  $(document).ready(function(){
		$(".single_add_to_cart_button").click(function(e){
			e.preventDefault();
			let product_id = $(this).val();
			let quantity = $('input[name = quantity]').val();
			let ajaxURL = '<?php echo admin_url('admin-ajax.php');?>'; 
			//here can make loader start
            $.ajax({
                type : 'POST',
                dataType : 'json',
                url : ajaxURL,
                data :{
                    product_id : product_id,
					quantity : quantity,
                    action : 'personal-add-to-cart'
                },
                error : function(e){
					//here loader finish
                    console.log(e)
                },
                success : function(data){
					//here loader finish
                    if(data.is_sent){
						$('#cart-count-icon').text(data.cart_items_count)
                    }else{
						//here we can show items error with custom sec
                        data.ErrorMessage.forEach(error=>{
                            console.log(error)
                        })
                            
            
                    }
                    
                }
            })
		})
	  })
</script>
<?php
get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */

<?php
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
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
get_header( 'shop' );
?>


<!-- Navigation Menu Place Here -->
<?php get_template_part('template-parts/menubar','menubar')?>


	<section id="custom_single_product_page">
		<div class="container-fluid custom_single_product_page_first_container_fluid">
			<div class="row custom_single_product_page_first_row">
				<div class="col-md-3 custom_single_product_page_sidebar_part">

					<?php
						/**
						 * woocommerce_sidebar hook.
						 *
						 * @hooked woocommerce_get_sidebar - 10
						 */
						do_action( 'woocommerce_sidebar' );

					?>
				</div>

				<div class="col-md-9 custom_single_product_page_main_part">

					<?php
						/**
						 * woocommerce_before_main_content hook.
						 *
						 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
						 * @hooked woocommerce_breadcrumb - 20
						 */
						do_action( 'woocommerce_before_main_content' );
					?>

						<?php while ( have_posts() ) : the_post(); ?>

							<?php wc_get_template_part( 'content', 'single-product' ); ?>

						<?php endwhile; // end of the loop. ?>

					<?php
						/**
						 * woocommerce_after_main_content hook.
						 *
						 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
						 */
						do_action( 'woocommerce_after_main_content' );
					?>

				</div> <!-- class : custom_single_product_page_main_part -->

				<div class="col-md-12 custom_single_product_page_related_products">
					<?php woocommerce_output_related_products(); ?>
				</div> <!-- class : custom_single_product_page_main_part -->

			</div> <!-- class : custom_single_product_page_first_row -->
		</div> <!-- class : custom_single_product_page_first_container_fluid -->
	</section> <!-- ID : custom_single_product_page -->



<?php get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */

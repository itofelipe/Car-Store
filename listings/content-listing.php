<?php
/**
 * The Template for displaying listing content in the single-listing.php template
 *
 * This template can be overridden by copying it to yourtheme/listings/content-single-listing.php.
 *
 * @package Auto Listings.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


$cols = auto_listings_columns();

$classes = array(
    'col-md-3',
    'col-'.$cols,
);
?>





  	

<li <?php post_class($classes); ?>>
<div class="zoomIn wow animated" data-wow-delay="200ms">
	<div class="box-nossos-carros">
	
	<?php
	/**
	 * @hooked auto_listings_template_loop_image
	 */
	do_action( 'auto_listings_before_listings_loop_item_summary' );
	?>

	<div class="summary">

		<?php

		do_action( 'auto_listings_before_listings_loop_item' );

		/**
		 * @hooked auto_listings_template_loop_title
		 * @hooked auto_listings_template_loop_at_a_glance
		 * @hooked auto_listings_template_loop_address
		 * @hooked auto_listings_template_loop_price
		 * @hooked auto_listings_template_loop_description
		 * @hooked auto_listings_template_loop_bottom
		 */
		do_action( 'auto_listings_listings_loop_item' );

		do_action( 'auto_listings_after_listings_loop_item' );

		?>

	</div>

	<?php do_action( 'auto_listings_after_listings_loop_item_summary' ); ?>

 </div>
</div>
</li>



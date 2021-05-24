<?php
/**
 * The Template for displaying listing content in the single-listing.php template
 *
 * This template can be overridden by copying it to yourtheme/listings/content-single-listing.php.
 *
 * @package Auto Listings.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<?php

do_action( 'auto_listings_before_single_listing' );

if ( post_password_required() ) {
	echo get_the_password_form(); // wpcs xss: ok.
	return;
}
?>

<div id="listing-<?php the_ID(); ?>" class="auto-listings-single listing">

	<div class="full-width upper titulo-single">
		<?php
		/**
		 * @hooked auto_listings_template_single_title
		 */
		do_action( 'auto_listings_single_upper_full_width' );
		?>
	</div>

	<div class="has-sidebar">

		<div class="image-gallery">

			<?php
			/**
			 * @hooked auto_listings_template_single_gallery
			 */
			do_action( 'auto_listings_single_gallery' );
			?>

		</div>

		<div class="content">

			<?php
			/**
			 * @hooked auto_listings_template_single_tagline
			 * @hooked auto_listings_template_single_description
			 * @hooked auto_listings_output_listing_tabs
			 */
			do_action( 'auto_listings_single_content' );
			?>

		</div>

	</div>

	<div class="full-width lower">

		<?php do_action( 'auto_listings_single_lower_full_width' ); ?>

	</div>
	<div class="row contato-single">
				<div class="col-md-3 agendar-titulo fadeInLeft animated wow">
					<h2>Gostou do carro?</h2>
					<h1>Entre em contato</h1>
				</div>
				<div class="col-md-5 fadeInLeft animated wow sem-fundo" data-wow-delay="200ms">
					<div class="contact-form">
						<?php echo do_shortcode( '[contact-form-7 id="69" title="form1"]' ); ?>
					</div>
				</div>
				<div class="agendar-box-mobile col-md-4">
					<a href="tel:0066-97050-888033">
						<div class="agendar-box fadeInRight animated wow" data-wow-delay="200ms">
							<div class="agendar-box-icon">
								<i class="fas fa-phone"></i>
				            </div>
				            <div class="agendar-box-text">			      
				                <p>LIGAR</p>
				                <p>0066-97050-888033</p>
				            </div>
						</div>
					</a>
					<a target="_blank" href="https://api.whatsapp.com/send?phone=8109042302223&text=Ol%C3%A1%27%20entro%20em%20contato%20pelo%20site">
						<div class="agendar-box fadeInRight animated wow" data-wow-delay="400ms">
							<div class="agendar-box-icon">
								<i class="fab fa-whatsapp"></i>
				            </div>
				            <div class="agendar-box-text">			      
				                <p>CONVERSAR</p>
				                <p>NO WHATSAPP</p>
				            </div>
						</div>
					</a>
					<a target="_blank" href="http://m.me//Tqmotor.jp">
						<div class="agendar-box fadeInRight animated wow" data-wow-delay="600ms">
							<div class="agendar-box-icon">
								<i class="fab fa-facebook-messenger"></i>
				            </div>
				            <div class="agendar-box-text">			      
				                <p>CONVERSAR</p>
				                <p>NO MESSENGER</p>
				            </div>
						</div>
					</a>
				</div>
			</div>

</div>



<?php do_action( 'auto_listings_after_single_listing' ); ?>


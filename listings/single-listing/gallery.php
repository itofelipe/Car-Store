<?php
/**
 * Single listing gallery
 *
 * This template can be overridden by copying it to yourtheme/listings/single-listing/gallery.php.
 *
 * @package Auto Listings.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$gallery = rwmb_meta( '_al_listing_image_gallery', [ 'size' => 'al-lge' ] );
if ( empty( $gallery ) ) {
	return;
}
$new = auto_listings_highlight_new();
?>

<div class="row">
	
<div class="gallery-wrap">

	<ul id="image-gallery">
		<?php foreach ( $gallery as $image_id => $image ) : ?>
			<?php $sml = wp_get_attachment_image_url( $image_id, 'al-sml' ); ?>
			<li data-thumb="<?php echo esc_url( $sml ); ?>" data-src="<?php echo esc_url( $image['url'] ); ?>">
				<img src="<?php echo esc_url( $image['url'] ); ?>">
			</li>
		<?php endforeach; ?>
	</ul>

</div>
</div>

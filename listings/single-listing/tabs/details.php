<?php
/**
 * Details tab
 *
 * This template can be overridden by copying it to yourtheme/listings/single-listing/tabs/details.php.
 *
 * @package Auto Listings.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

global $post;

$heading = apply_filters( 'auto_listings_details_heading', __( 'Detalhes', 'auto-listings' ) );

// An array of our details that we can loop through.
$details_array = array(
	__( 'Veículo', 'auto-listings' )               => auto_listings_vehicle(),
	auto_listings_miles_kms_label()                => auto_listings_odometer(),
	__( 'Cor', 'auto-listings' )                 => auto_listings_meta( 'color' ),
	__( 'Shaken', 'auto-listings' )          => auto_listings_meta( 'registration' ),
	__( 'Transmissão', 'auto-listings' )          => auto_listings_transmission(),
	__( 'Corpo', 'auto-listings' )                  => auto_listings_body_type(),
	__( 'Direção', 'auto-listings' )            => auto_listings_drive_type(),
	__( 'Motor', 'auto-listings' )                => auto_listings_engine(),
	__( 'Economia', 'auto-listings' ) => auto_listings_fuel_economy(),
);
if ( ! auto_listings_hide_item( 'price' ) ) {
	unset( $details_array[ __( 'Price', 'auto-listings' ) ] );
}
$details_array = apply_filters( 'auto_listings_details_array', $details_array );
?>

<?php if ( $heading ) : ?>
	<h4><?php echo esc_html( $heading ); ?></h4>
<?php endif; ?>


<table class="table table-striped">
	<tbody>
		<?php
		foreach ( $details_array as $label => $value ) {
			if ( empty( $value ) || '' === $value ) {
				continue;
			}
			?>
			<tr>
				<th><?php echo esc_html( $label ); ?></th>
				<td><?php echo wp_kses_post( $value ); ?></td>
			</tr>
		<?php } ?>
	</tbody>
</table>

<?php
/**
 * Single listing price
 *
 * This template can be overridden by copying it to yourtheme/listings/single-listing/price.php.
 *
 * @package Auto Listings.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$price = auto_listings_meta( 'price' );
$condition = auto_listings_meta( 'condition' );

?>
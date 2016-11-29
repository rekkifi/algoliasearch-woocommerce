<?php


/**
 * @param array   $attributes
 * @param WP_Post $post
 *
 * @return array
 */
function aw_product_shared_attributes( array $attributes, WP_Post $post ) {
	$product = wc_get_product( $post );

	// Extract prices.
	$variations_count = 0;
	if ( $product instanceof WC_Product_Variable ) {
		$price = $product->get_variation_price( 'min', true );
		$regular_price = $product->get_variation_regular_price( 'min', true );
		$sale_price = $product->get_variation_sale_price( 'min', true );
		$max_price = $product->get_variation_price( 'max', true );
		$variations_count = count( $product->get_available_variations() );
	} else {
		$price = $max_price = $product->get_display_price();
		$regular_price = $product->get_display_price( $product->get_regular_price() );
		$sale_price = $product->get_display_price( $product->get_sale_price() );
	}
	// Todo: deal with grouped products.

	$attributes['product_type'] = (string) $product->get_type();
	$attributes['price'] = (float) $price;
	$attributes['regular_price'] = (float) $regular_price;
	$attributes['sale_price'] = (float) $sale_price;
	$attributes['max_price'] = (float) $max_price;
	$attributes['is_on_sale'] = (bool) $product->is_on_sale();
	$attributes['average_rating'] = (float) $product->get_average_rating();
	$attributes['rating_count'] = (int) $product->get_rating_count();
	$attributes['attributes'] = (array) $product->get_attributes();
	$attributes['width'] = (string) $product->get_width();
	$attributes['height'] = (string) $product->get_height();
	$attributes['weight'] = (string) $product->get_weight();
	$attributes['length'] = (string) $product->get_length();
	$attributes['review_count'] = (int) $product->get_review_count();
	$attributes['dimensions'] = (string) $product->get_dimensions();
	$attributes['variations_count'] = $variations_count;

	// TODO: Not sure how this behaves with variants.
	$attributes['total_sales'] = (int) get_post_meta( $post->ID, 'total_sales', true );

	return $attributes;
}

add_filter( 'algolia_post_product_shared_attributes', 'aw_product_shared_attributes', 10, 2 );
add_filter( 'algolia_searchable_post_product_shared_attributes', 'aw_product_shared_attributes', 10, 2 );

/**
 * @param bool    $should_index
 * @param WP_Post $post
 *
 * @return bool
 */
function aw_should_index_post( $should_index, WP_Post $post ) {
	// Only alter decision making if we are dealing with a product.
	if ( 'product' !== $post->post_type ) {
		return $should_index;
	}

	// This is required as `is_visible` method also checks for user_cap.
	if( 'publish' !== $post->post_status ) {
		return false;
	}

	$product = wc_get_product( $post );
	// We extracted this check because `is_visible` will not detect searchable products if not in a loop.
	if ( 'search' === $product->visibility ) {
		return true;
	}

	return $product->is_visible();
}

add_filter( 'algolia_should_index_post', 'aw_should_index_post', 10, 2 );
add_filter( 'algolia_should_index_searchable_post', 'aw_should_index_post', 10, 2 );

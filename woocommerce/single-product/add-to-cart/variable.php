<?php
/**
 * Variable product add to cart
 *
 * Custom template for Nuwera theme
 */

defined( 'ABSPATH' ) || exit;

global $product;

$attribute_keys  = array_keys( $attributes );
$variations_json = wp_json_encode( $available_variations );
$variations_attr = function_exists( 'wc_esc_json' ) ? wc_esc_json( $variations_json ) : _wp_specialchars( $variations_json, ENT_QUOTES, 'UTF-8', true );

do_action( 'woocommerce_before_add_to_cart_form' ); ?>

<form class="variations_form cart custom-variations-form" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data' data-product_id="<?php echo absint( $product->get_id() ); ?>" data-product_variations="<?php echo $variations_attr; // WPCS: XSS ok. ?>">
	<?php do_action( 'woocommerce_before_variations_form' ); ?>

	<?php if ( empty( $available_variations ) && false !== $available_variations ) : ?>
		<p class="stock out-of-stock"><?php echo esc_html( apply_filters( 'woocommerce_out_of_stock_message', __( 'This product is currently out of stock and unavailable.', 'woocommerce' ) ) ); ?></p>
	<?php else : ?>
		<div class="variations">
			<?php foreach ( $attributes as $attribute_name => $options ) : ?>
				<div class="variation-option-wrapper">
					<label for="<?php echo esc_attr( sanitize_title( $attribute_name ) ); ?>">
						<?php echo wc_attribute_label( $attribute_name ); // WPCS: XSS ok. ?>
					</label>
					<div class="variation-options">
						<?php
							// Output radio buttons (will be styled by our filter)
							wc_dropdown_variation_attribute_options(
								array(
									'options'   => $options,
									'attribute' => $attribute_name,
									'product'   => $product,
								)
							);

							// Also output hidden select for WooCommerce compatibility
							echo '<select name="attribute_' . esc_attr( sanitize_title( $attribute_name ) ) . '" id="' . esc_attr( sanitize_title( $attribute_name ) ) . '" class="hidden-variation-select" style="display:none;" data-attribute_name="attribute_' . esc_attr( sanitize_title( $attribute_name ) ) . '">';
							echo '<option value="">' . esc_html__( 'Choose an option', 'woocommerce' ) . '</option>';
							if ( ! empty( $options ) ) {
								if ( $product && taxonomy_exists( $attribute_name ) ) {
									$terms = wc_get_product_terms( $product->get_id(), $attribute_name, array( 'fields' => 'all' ) );
									foreach ( $terms as $term ) {
										if ( in_array( $term->slug, $options, true ) ) {
											echo '<option value="' . esc_attr( $term->slug ) . '">' . esc_html( $term->name ) . '</option>';
										}
									}
								} else {
									foreach ( $options as $option ) {
										echo '<option value="' . esc_attr( $option ) . '">' . esc_html( $option ) . '</option>';
									}
								}
							}
							echo '</select>';
						?>
					</div>
				</div>
			<?php endforeach; ?>
		</div>

		<div class="single_variation_wrap">
			<?php
				/**
				 * Hook: woocommerce_before_single_variation.
				 */
				do_action( 'woocommerce_before_single_variation' );

				/**
				 * Hook: woocommerce_single_variation. Used to output the cart button and placeholder for variation data.
				 * @since 2.4.0
				 * @hooked woocommerce_single_variation - 10 Empty div for variation data.
				 * @hooked woocommerce_single_variation_add_to_cart_button - 20 Qty and cart button.
				 */
				do_action( 'woocommerce_single_variation' );

				/**
				 * Hook: woocommerce_after_single_variation.
				 */
				do_action( 'woocommerce_after_single_variation' );
			?>
		</div>
	<?php endif; ?>

	<?php do_action( 'woocommerce_after_variations_form' ); ?>
</form>

<?php
do_action( 'woocommerce_after_add_to_cart_form' );

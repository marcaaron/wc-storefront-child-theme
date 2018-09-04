<?php

/**
 * Storefront automatically loads the core CSS even if using a child theme as it is more efficient
 * than @importing it in the child theme style.css file.
 *
 * Uncomment the line below if you'd like to disable the Storefront Core CSS.
 *
 * If you don't plan to dequeue the Storefront Core CSS you can remove the subsequent line and as well
 * as the sf_child_theme_dequeue_style() function declaration.
 */
add_action( 'wp_enqueue_scripts', 'sf_child_theme_dequeue_style', 999 );
add_action( 'wp_enqueue_scripts', 'add_font_awesome' );
add_action( 'wp_enqueue_scripts', 'add_javascript' );
/**
 * Dequeue the Storefront Parent theme core CSS
 */

show_admin_bar( false );

function sf_child_theme_dequeue_style() {
    wp_dequeue_style( 'storefront-style' );
    wp_dequeue_style( 'storefront-woocommerce-style' );
}

function add_font_awesome() {
  wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css', 'all');
}

function add_javascript() {
  wp_enqueue_script('javascript', get_stylesheet_directory_uri() . '/assets/js/app.js', array(), true);
}

/**
 * Note: DO NOT! alter or remove the code above this text and only add your custom PHP functions below this text.
 */

  function storefront_header_container() {
  	echo '<div class="site-header-content">';
  }

  function storefront_skip_links(){
    echo '';
  }

	function storefront_primary_navigation_wrapper() {
		echo '<div class="storefront-primary-navigation">';
	}

	function storefront_primary_navigation_wrapper_close() {
		echo '</div>';
	}

  function storefront_credit() {
		?>
		<div class="site-info">
			<?php echo esc_html( apply_filters( 'storefront_copyright_text', $content = '&copy; ' . get_bloginfo( 'name' ) . ' ' . date( 'Y' ) ) ); ?>
			<?php if ( apply_filters( 'storefront_credit_link', true ) ) { ?>
			<?php } ?>
		</div><!-- .site-info -->
		<?php
	}

	function storefront_cart_link() {
		?>
			<a class="cart-contents" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'storefront' ); ?>">
				<?php echo wp_kses_post( WC()->cart->get_cart_subtotal() ); ?> <span class="count"><?php echo wp_kses_data( sprintf( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count(), 'storefront' ), WC()->cart->get_cart_contents_count() ) );?></span>
        <i class="fas fa-shopping-cart"></i>
			</a>
		<?php
	}

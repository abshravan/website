<?php
/**
 * Theme About Page
 *
 * @package delivered
 * @since 1.0
 */

function delivered_theme_page_admin_style( $hook ) {
	if ( 'appearance_page_delivered-theme' === $hook ) {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_enqueue_style(
			'delivered-theme-admin-style',
			get_theme_file_uri( 'assets/css/about-admin.css' ),
			array(),
			$version_string
		);
	}
}
add_action( 'admin_enqueue_scripts', 'delivered_theme_page_admin_style' );

/**
 * Add theme page
 */
function delivered_menu() {
	add_theme_page( esc_html__( 'Delivered', 'delivered' ), esc_html__( 'Delivered', 'delivered' ), 'edit_theme_options', 'delivered-theme', 'delivered_theme_page_display' );
}
add_action( 'admin_menu', 'delivered_menu' );

/**
 * Display About page
 */
function delivered_theme_page_display() {
	$theme = wp_get_theme();
	
	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	}
	?>
	
	<div id="welcome-panel" class="welcome-panel">
		<div class="welcome-panel-content">
			<div class="welcome-panel-header">
				<h2><?php echo esc_html( $theme->Name ); ?></h2>
				<p><?php esc_html_e( 'Free Full Site Editing WordPress Theme', 'delivered' ); ?></p>
				<div class="logo-panel">
					<a href="<?php echo esc_url('https://alexathemes.net/','delivered'); ?>"><img src="<?php echo esc_url( get_template_directory_uri().'/assets/img/logo.png' ); ?>"></a>
				</div>
			</div>
			
			<div class="welcome-panel-column-container">
				<div class="container-wrap">
					<div class="welcome-panel-column two-columns">
						<!-- <div class="welcome-panel-icon-pages"></div> -->
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'Getting Started with Delivered!', 'delivered' ); ?></h3>
							<p><?php esc_html_e( 'Awesome! Delivered has been installed and activated successfully. Now, you can start building your dream website with a wide range of highly-customizable block patterns, templates, and template parts available in this astounding theme.', 'delivered' ); ?></p>
						</div>
					</div>
					
					<div class="welcome-panel-column two-columns">
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'More Features with Delivered Pro Theme', 'delivered' ); ?></h3>
							<p><?php esc_html_e( 'To get more features and unique home page sections, we recommend you activate the Delivered Pro. With the pro theme installed, get more options like google fonts, colors, sliders, page template, shortcodes and more.', 'delivered' ); ?></p>
							<a target="_blank" class="button green button-primary button-hero green" href="https://alexathemes.net/themes/delivered-wordpress-theme/"><?php esc_html_e( 'Buy Delivered Pro', 'delivered' ); ?></a>
						</div>
					</div>
					
				</div>
				<div class="sidebar">
					<div class="welcome-panel-column important-links">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Important Links', 'delivered' ); ?></h3>
						<a target="_blank" href="<?php echo esc_url( 'https://alexathemes.net/themes/delivered-wordpress-theme/' ); ?>"><?php esc_html_e( 'Theme Info', 'delivered' ); ?></a>
						<a target="_blank" href="http://live-demo.online/delivered/"><?php esc_html_e( 'View Demo', 'delivered' ); ?></a>
						<a target="_blank" href="<?php echo esc_url( 'https://alexathemes.net/forums/' ); ?>"><?php esc_html_e( 'Support', 'delivered' ); ?></a>
					</div>
				</div>
				
				<div class="welcome-panel-column review">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Leave us a review', 'delivered' ); ?></h3>
						<p><?php esc_html_e( 'Loved Delivered? Feel free to leave your feedback. Your opinion helps us reach more audiences!', 'delivered' ); ?></p>
						<a href="https://wordpress.org/support/theme/delivered/reviews/" class="button button-primary button-hero" style="text-decoration: none;" target="_blank"><?php esc_html_e( 'Review', 'delivered' ); ?></a>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<?php
}

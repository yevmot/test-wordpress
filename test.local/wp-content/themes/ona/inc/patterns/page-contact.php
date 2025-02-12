<?php
/**
 * Page Contact
 */
return array(
	'title'      => __( 'Page contact', 'ona' ),
	'categories' => array( 'ona-pages' ),
	'content'    => '
			<!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( 'assets/img/ona_contact_background.webp' ) ) . '","id":254,"hasParallax":true,"dimRatio":0,"minHeight":85,"minHeightUnit":"vh","contentPosition":"center center","isDark":false} -->
			<div class="wp-block-cover is-light has-parallax" style="background-image:url(' . esc_url( get_theme_file_uri( 'assets/img/ona_contact_background.webp' ) ) . ');min-height:85vh"><span aria-hidden="true" class="has-background-dim-0 wp-block-cover__gradient-background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"inherit":false,"contentSize":"970px"}} -->
			<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","right":"15%","bottom":"80px","left":"15%"}}},"backgroundColor":"background","layout":{"inherit":false}} -->
			<div class="wp-block-group has-background-background-color has-background" style="padding-top:80px;padding-right:15%;padding-bottom:80px;padding-left:15%">
			
			<!-- wp:heading {"textAlign":"center","level":1,"textColor":"headings","className":"is-style-ona-alt-font","fontSize":"x-large"} -->
			<h1 class="wp-block-heading has-text-align-center is-style-ona-alt-font has-headings-color has-text-color has-x-large-font-size">' . esc_html__( 'Get in touch', 'ona' ) . '</h1>
			<!-- /wp:heading -->

			<!-- wp:heading {"textAlign":"center","textColor":"headings","fontSize":"large"} -->
			<h2 class="wp-block-heading has-text-align-center has-headings-color has-text-color has-large-font-size" id="feel-free-to-contact-me-anytime">' . esc_html__( 'Feel free to contact me anytime.', 'ona' ) . '</h2>
			<!-- /wp:heading -->

			<!-- wp:spacer {"height":20} -->
			<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:paragraph {"align":"center","textColor":"text-regular"} -->
			<p class="has-text-align-center has-text-regular-color has-text-color">' . esc_html__( 'Melbourne\'s GPO 350 Bourke St Melbourne VIC 3000 Australia', 'ona' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"center","textColor":"text-regular","className":"mt-1"} -->
			<p class="has-text-align-center mt-1 has-text-regular-color has-text-color">' . esc_html__( 'Phone: +1-888-1554-456-123', 'ona' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"center","textColor":"text-regular","className":"mt-1"} -->
			<p class="has-text-align-center mt-1 has-text-regular-color has-text-color">' . esc_html__( 'Email: ', 'ona' ) . '<a href="mailto:themesupport@gmail.com">themesupport@gmail.com</a></p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:group --></div>
			<!-- /wp:group --></div></div>
			<!-- /wp:cover -->',
);




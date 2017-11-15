<?php if ( has_category( '2017', get_the_ID() ) ) { ?>

<header id="site-header">

	<hgroup class="max-1020">

		<h1><?php echo esc_html( get_bloginfo( 'name' ) ); ?></h1>

		<nav>
			<?php
			$site_menu_args = array(
				'theme_location' => 'site',
				'container' => false,
				'fallback_cb' => false,
				'menu_class' => null,
				'menu_id' => null,
				'items_wrap' => '<ul>%3$s</ul>',
				'depth' => 1,
			);

			wp_nav_menu( $site_menu_args );
			?>
		</nav>

	</hgroup>

</header>

<?php
}

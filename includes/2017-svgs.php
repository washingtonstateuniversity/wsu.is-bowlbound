<?php

namespace WSU\Bowl_Bound_2017\SVG;

add_action( 'wsu_register_inline_svg', 'WSU\Bowl_Bound_2017\SVG\wide_receiver' );
add_action( 'wsu_register_inline_svg', 'WSU\Bowl_Bound_2017\SVG\running_back' );
add_action( 'wsu_register_inline_svg', 'WSU\Bowl_Bound_2017\SVG\offensive_line' );
add_action( 'wsu_register_inline_svg', 'WSU\Bowl_Bound_2017\SVG\quarterback' );

/**
 * Registers SVG data for the WSU Inline SVG plugin.
 */
function wide_receiver() {
	ob_start();
	?>
	<svg id="wide-receiver"
		 xmlns="http://www.w3.org/2000/svg"
		 xmlns:xlink="http://www.w3.org/1999/xlink"
		 width="960"
		 height="842"
		 viewBox="0 0 100 100"
		 role="presentation"
		 aria-hidden="true">
		<!-- 1 unit = 8.42 pixels -->
		<defs>
			<mask id="wide-receiver--mask">
				<path fill="#fff" d="M-7 0H6.8L106.8 100H-7Z"/>
			</mask>
		</defs>
		<g mask="url(#wide-receiver--mask)">
			<image class="background" xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() . '/images/wide-receiver-bg.jpg' ); ?>" x="-7" width="114" height="100"/>
			<image class="foreground" xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() . '/images/wide-receiver-fg.jpg' ); ?>" x="-7" width="114" height="100"/>
		</g>
		<image class="overlay" xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() . '/images/wide-receiver-overlay.jpg' ); ?>" x="6.8" width="92.63655796" height="47.74346979"/>
		<line class="crimson-line" stroke="#a60f2d" stroke-width=".2" x1="6.85" y1="0" x2="106.85" y2="100"/>
		<line class="white-line" stroke="#fff" stroke-width=".1" x1="-2.65" y1="0" x2="97.35" y2="100"/>
	</svg>
	<?php
	$wide_receiver = ob_get_clean();

	wsu_register_inline_svg( 'wide_receiver', $wide_receiver );
}

/**
 * Registers SVG data for the WSU Inline SVG plugin.
 */
function running_back() {
	ob_start();
	?>
	<svg id="running-back"
		 xmlns="http://www.w3.org/2000/svg"
		 xmlns:xlink="http://www.w3.org/1999/xlink"
		 width="1040"
		 height="887"
		 viewBox="0 0 100 100"
		 role="presentation"
		 aria-hidden="true">
		<!-- 1 unit = 8.87 pixels -->
		<image class="background" xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() . '/images/running-back-bg.jpg' ); ?>" x="-8.625" width="117.25" height="100"/>
		<line class="crimson-line" stroke="#a60f2d" stroke-width=".2" x1="88.55" y1="15.67" x2="15.05" y2="89.06"/>
		<line class="white-line" stroke="#fff" stroke-width=".2" x1="97.55" y1="15.67" x2="15.05" y2="98.06"/>
		<image class="foreground" xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() . '/images/running-back-fg.png' ); ?>" x="40" y="20" width="43.4074" height="50.3945"/>
	</svg>
	<?php
	$running_back = ob_get_clean();

	wsu_register_inline_svg( 'running_back', $running_back );
}

/**
 * Registers SVG data for the WSU Inline SVG plugin.
 */
function offensive_line() {
	ob_start();
	?>
	<svg id="offensive-line"
		 xmlns="http://www.w3.org/2000/svg"
		 xmlns:xlink="http://www.w3.org/1999/xlink"
		 width="982"
		 height="954"
		 viewBox="0 0 100 100"
		 role="presentation"
		 aria-hidden="true">
		<!-- 1 unit = 9.54 pixels -->
		<image class="background" xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() . '/images/offensive-line-bg.jpg' ); ?>" x="-1.4675" width="102.935" height="100"/>
		<line class="crimson-line" stroke="#a60f2d" stroke-width=".2" x1="8.9" y1="25.15" x2="77.04" y2="93.29"/>
		<line class="white-line" stroke="#fff" stroke-width=".2" x1=".52" y1="25.15" x2="68.66" y2="93.29"/>
		<image class="foreground" xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() . '/images/offensive-line-fg.png' ); ?>" x="6.5" y="24" width="38.73" height="62.893"/>
	</svg>
	<?php
	$offensive_line = ob_get_clean();

	wsu_register_inline_svg( 'offensive_line', $offensive_line );
}

/**
 * Registers SVG data for the WSU Inline SVG plugin.
 */
function quarterback() {
	ob_start();
	?>
	<svg id="quarterback"
		 xmlns="http://www.w3.org/2000/svg"
		 xmlns:xlink="http://www.w3.org/1999/xlink"
		 width="928"
		 height="869"
		 viewBox="0 0 100 100"
		 role="presentation"
		 aria-hidden="true">
		<!-- 1 unit = 8.69 pixels -->
		<image class="background" xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() . '/images/quarterback-bg.jpg' ); ?>" x="-3.3947" width="106.7894" height="100"/>
		<line class="crimson-line" stroke="#a60f2d" stroke-width=".2" x1="-2.47" y1="16.68" x2="72.2" y2="91.37"/>
		<line class="white-line" stroke="#fff" stroke-width=".2" x1="-11.67" y1="16.68" x2="63" y2="91.37"/>
		<image class="foreground" xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() . '/images/quarterback-fg.png' ); ?>" x=".35" y="18.4" width="44.879" height="73.7629"/>
	</svg>
	<?php
	$quarterback = ob_get_clean();

	wsu_register_inline_svg( 'quarterback', $quarterback );
}

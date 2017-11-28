<?php if ( has_category( '2017', get_the_ID() ) ) { ?>

<section class="footer-hero">

	<svg id="footer-hero"
		 xmlns="http://www.w3.org/2000/svg"
		 xmlns:xlink="http://www.w3.org/1999/xlink"
		 width="1920"
		 height="575"
		 viewBox="0 0 100 100"
		 role="presentation"
		 aria-hidden="true">

		<defs>
			<mask id="footer-hero--mask-overlay">
				<path fill="#fff" d="M6.52 0H107.44L7.5 100H6.52Z"/>
			</mask>
			<mask id="footer-hero--mask-background">
				<path fill="#fff" d="M107.44 0H216.956V100H7.5Z"/>
			</mask>
		</defs>

		<image xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() . '/images/footer-hero-overlay.jpg' ); ?>" x="6.52" y="0" width="101.74" height="100" mask="url(#footer-hero--mask-overlay)"/>

		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 190 146" x="43.2" y="18.6" width="32.86" height="25.21">
			<g fill="#a60f2d">
				<path d="M14 145.7L0.3 132V12L12.4 0.3h68.2l13.1 13v28.1H65.5V26.4H28.4v94h36.7v-25H41.7V69.2h38.3l13.7 13.9v49.5l-13.1 13.1H14z"/>
				<path d="M114.1 145.7L102.4 134V14.3l13.9-14H176l13.7 13.5v118.4l-13.3 13.5H114.1zM161.4 26.4h-30.8v94.1h30.8V26.4z"/>
			</g>
		</svg>
		<rect fill="#a60f2d" x="25.81" y="43.6" width="50.25" height="1.74"/>

		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 483 146" x="-40.08" y="50.78" width="84.17" height="24.8">
			<g fill="#4c4c4c">
				<path d="M60.9 94.5h28.4v37.8l-13.1 13.1H13.7L0 131.8V11.7L12.1 0h64.1l13.1 13v28.1H61.1V26.1H28.1v94h32.8V94.5z"/>
				<path d="M108.2 145.4l-11.7-11.7V14.1l13.9-14h59.8l13.7 13.5v118.4l-13.3 13.5H108.2zM155.6 26.1h-30.8v94.1h30.8V26.1z"/>
				<path d="M260.5 146h-42.7l-15.5-15.8V25.7h-7.9v-25h39.1v25.4h-6.7v94h24.8v-94h-7V0.7h39.1v25.4h-7.6v104L260.5 146z"/>
				<path d="M304.4 145.4l-13.7-13.7V11.7L302.8 0H371l13.1 13v28.1h-28.3V26.1h-37.1v94h36.7V95h-23.4V68.9h38.3l13.7 13.9v49.5L371 145.4H304.4z"/>
				<path d="M392.8 102.6H421v17.6h33.1V85.2h-47.7l-13.7-13.3V13.2l13.3-12.8H468L483 15.1V43h-29.2V26.3h-32.6v32.8h47.9l13.3 13.3v59.4l-13.9 13.7h-60.1L392.8 130V102.6z"/>
			</g>
		</svg>
		<rect fill="#4c4c4c" x="-58.47" y="75.4" width="101.56" height="1.74"/>

		<image xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() . '/images/footer-hero-bg.jpg' ); ?>" x="6.52" y="0" width="210.43" height="100" mask="url(#footer-hero--mask-background)"/>

		<image xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() . '/images/footer-hero-bg-color.jpg' ); ?>" x="6.52" y="0" width="210.43" height="100" mask="url(#footer-hero--mask-background)"/>

		<line class="crimson-line" stroke="#a60f2d" stroke-width=".2" x1="107.5" y1="0" x2="7.5" y2="100"/>
		<line class="white-line" stroke="#fff" stroke-width=".2" x1="121.4" y1="0" x2="21.4" y2="100"/>

	</svg>
</section>

<footer id="site-footer" class="gray-background">

	<section class="row halves gutter pad-top social-media">
		<div class="column one">
			<p><strong>Keep Connected</strong></p>
			<ul>
				<li><a href="https://www.instagram.com/wsualumni/">wsualumni</a><br>
				WSU Alumni Association Instagram</li>
				<li><a href="https://twitter.com/wsucougfb">@wsucougfb</a><br>
				WSU Football Twitter</li>
				<li><a href="https://twitter.com/wsualumassoc">@WSUAlumAssoc</a><br>
				WSU Alumni Association Twitter</li>
				<li><a href="https://www.facebook.com/WSUCougars/">WSUCougars</a><br>
				WSU Athletics Facebook</li>
				<li><a href="https://www.facebook.com/WashingtonStateFootball">WashingtonStateFootball</a><br>
				WSU Football Facebook</li>
			</ul>
		</div>
		<div class="column two"></div>
	</section>

	<section class="row single gutter pad-top footer">
		<div class="column one">
			<p>
				<a href="https://my.wsu.edu/">myWSU</a>
				<a href="https://access.wsu.edu/">Access</a>
				<a href="https://policies.wsu.edu/">Policies</a>
				<a href="https://ucomm.wsu.edu/wsu-copyright-policy/">©</a>
				<a href="#">Back to top</a>
			</p>
		</div>
	</section>

</footer>

<?php
}

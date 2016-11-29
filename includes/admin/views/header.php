<?php if ( isset( $message ) ): ?>
	<div class="updated notice is-dismissible">
		<p><strong><?php echo $message; ?></strong></div>
<?php endif; ?>

<aside class="alg-sidebar">
	<div class="alg-sidebar__brand">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400.2 115"><style>.alg__logo{fill:url(#SVGID_1_);} .st1{fill:#FFFFFF;}</style><linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="-48.418" y1="304.499" x2="-46.737" y2="306.126" gradientTransform="matrix(94.045 0 0 -94.072 4528.19 28782.176)"><stop offset="0" stop-color="#00AEFF"/><stop offset="1" stop-color="#3369E7"/></linearGradient><path class="alg__logo" d="M22.6 10.4h69.3c6.8 0 12.4 5.5 12.4 12.4v69.3c0 6.8-5.5 12.4-12.4 12.4H22.6c-6.8 0-12.4-5.5-12.4-12.4V22.8c.1-6.9 5.6-12.4 12.4-12.4z"/><path class="st1" d="M58.4 34.2c-14.7 0-26.6 11.9-26.6 26.6s11.9 26.6 26.6 26.6S85 75.4 85 60.7 73.1 34.2 58.4 34.2zm0 45.3c-10.3 0-18.7-8.4-18.7-18.7S48 42 58.4 42s18.7 8.4 18.7 18.7-8.4 18.8-18.7 18.8zm0-33.6v14c0 .4.4.7.8.5L71.6 54c.3-.1.4-.5.2-.8-2.6-4.5-7.3-7.6-12.8-7.8-.3-.1-.6.1-.6.5zM41 35.6L39.4 34c-1.6-1.6-4.2-1.6-5.8 0l-1.9 1.9c-1.6 1.6-1.6 4.2 0 5.8l1.6 1.6c.2.2.6.2.8-.1.9-1.3 2-2.5 3.1-3.7 1.2-1.2 2.4-2.2 3.7-3.1.3-.1.3-.5.1-.8zm26.1-4.2v-3.2c0-2.3-1.8-4.1-4.1-4.1h-9.5c-2.3 0-4.1 1.8-4.1 4.1v3.3c0 .4.4.6.7.5 2.7-.8 5.4-1.2 8.3-1.2 2.7 0 5.4.4 8 1.1.3.1.7-.1.7-.5zM245.4 82.4c0 7.6-1.9 13.2-5.8 16.7s-9.9 5.3-17.9 5.3c-2.9 0-9-.6-13.9-1.7l1.8-8.8c4.1.8 9.5 1.1 12.3 1.1 4.5 0 7.7-.9 9.6-2.7 1.9-1.8 2.9-4.5 2.9-8.1v-1.8c-1.1.5-2.6 1.1-4.4 1.6-1.8.5-3.9.8-6.2.8-3.1 0-5.9-.5-8.4-1.5s-4.7-2.4-6.5-4.3c-1.8-1.9-3.2-4.2-4.2-7.1-1-2.8-1.5-7.9-1.5-11.6 0-3.5.5-7.8 1.6-10.8s2.6-5.4 4.7-7.5c2.1-2.1 4.6-3.7 7.5-4.8s6.4-1.9 10.1-1.9c3.6 0 7 .4 10.2 1 3.3.5 6 1.1 8.3 1.7v44.4zm-31-22.1c0 4.7 1 9.9 3.1 12 2.1 2.2 4.7 3.2 8 3.2 1.8 0 3.5-.2 5-.7 1.6-.5 2.8-1.1 3.8-1.7V45.4c-.8-.2-4.1-.9-7.4-.9-4.1-.1-7.1 1.5-9.3 4.2-2.1 2.6-3.2 7.3-3.2 11.6zm84 0c0 3.8-.6 6.6-1.7 9.7s-2.7 5.8-4.7 7.9c-2 2.2-4.5 3.9-7.3 5.1-2.9 1.2-7.2 1.9-9.4 1.9s-6.6-.7-9.4-1.9c-2.8-1.2-5.2-2.9-7.3-5.1-2-2.2-3.6-4.8-4.7-7.9-1.1-3.1-1.7-6-1.7-9.7s.5-7.4 1.7-10.5c1.1-3.1 2.7-5.7 4.8-7.9 2.1-2.2 4.5-3.9 7.3-5.1 2.8-1.2 5.9-1.8 9.3-1.8s6.5.6 9.3 1.8c2.9 1.2 5.3 2.9 7.3 5.1 2 2.2 3.6 4.8 4.7 7.9 1.2 3.1 1.8 6.8 1.8 10.5zm-11.4.1c0-4.8-1.1-8.8-3.1-11.7-2.1-2.8-4.9-4.2-8.6-4.2s-6.6 1.4-8.6 4.2c-2.1 2.8-3 6.8-3 11.7 0 4.9 1 8.1 3.1 11 2.1 2.8 4.9 4.3 8.6 4.3s6.6-1.4 8.6-4.3 3-6.2 3-11zM323.3 85C305 85.1 305 70.2 305 67.8V15.1l11.2-1.8v52.4c0 1.3 0 9.8 7.2 9.9V85zm19.6 0h-11.2V36.9l11.2-1.8V85zm-5.6-55.2c3.7 0 6.8-3 6.8-6.8s-3-6.8-6.8-6.8c-3.7 0-6.8 3-6.8 6.8s3.1 6.8 6.8 6.8zm33.5 5.3c3.7 0 6.8.5 9.3 1.4s4.5 2.2 6 3.8c1.5 1.6 2.5 3.8 3.2 6.2.6 2.3 1 4.9 1 7.7v28.7c-1.7.4-4.3.8-7.8 1.3s-7.4.8-11.7.8c-2.9 0-5.5-.3-7.9-.8-2.4-.5-4.4-1.4-6.1-2.6-1.7-1.2-3-2.8-4-4.8-1-1.9-1.4-4.7-1.4-7.5 0-2.7.5-4.5 1.6-6.4 1.1-1.9 2.5-3.4 4.4-4.6 1.8-1.2 4-2 6.4-2.6 2.4-.5 5-.8 7.6-.8 1.2 0 2.5.1 3.9.2 1.4.2 2.8.4 4.3.8v-1.8c0-1.3-.2-2.5-.5-3.7-.3-1.2-.8-2.2-1.6-3.1-.8-.9-1.8-1.6-3-2.1-1.3-.5-2.9-.9-4.8-.9-2.6 0-4.9.3-7.1.7-2.1.4-3.9.8-5.2 1.3l-1.3-9.2c1.4-.5 3.5-1 6.2-1.5s5.4-.5 8.5-.5zm.9 40.5c3.4 0 6-.2 7.7-.6V63.7c-.6-.2-1.5-.4-2.7-.5s-2.5-.3-3.9-.3c-1.2 0-2.5.1-3.7.3s-2.4.5-3.4 1-1.8 1.2-2.4 2.1c-.6.9-.9 1.4-.9 2.7 0 2.6.9 4.1 2.6 5.1 1.7 1 3.9 1.5 6.7 1.5zM151.4 35.4c3.7 0 6.8.5 9.3 1.4 2.5.9 4.5 2.2 6 3.8 1.5 1.6 2.5 3.8 3.2 6.2.6 2.3 1 4.9 1 7.7v28.7c-1.7.4-4.3.8-7.8 1.3s-7.4.8-11.7.8c-2.9 0-5.5-.3-7.9-.8s-4.5-1.5-6.2-2.7-3-2.8-4-4.8c-1-1.9-1.4-4.7-1.4-7.5 0-2.7.5-4.5 1.6-6.4 1.1-1.9 2.5-3.4 4.4-4.6 1.8-1.2 4-2 6.4-2.6 2.4-.5 5-.8 7.6-.8 1.2 0 2.5.1 3.9.2 1.4.2 2.8.4 4.3.8v-1.8c0-1.3-.2-2.5-.5-3.7-.3-1.2-.8-2.2-1.6-3.1-.8-.9-1.8-1.6-3-2.1-1.3-.5-2.9-.9-4.8-.9-2.6 0-4.9.3-7.1.7s-3.9.8-5.2 1.3l-1.3-9.2c1.4-.5 3.5-1 6.2-1.5 2.6-.2 5.5-.4 8.6-.4zm.9 40.5c3.4 0 6-.2 7.7-.6V64c-.6-.2-1.5-.4-2.7-.5-1.2-.2-2.5-.3-3.9-.3-1.2 0-2.5.1-3.7.3-1.3.2-2.4.5-3.4 1s-1.8 1.2-2.4 2.1c-.6.9-.9 1.4-.9 2.7 0 2.6.9 4.1 2.6 5.1s3.9 1.5 6.7 1.5zm45.3 9.1c-18.3.1-18.3-14.8-18.3-17.2V15.1l11.2-1.8v52.4c0 1.3 0 9.8 7.2 9.9V85z"/></svg>
	</div>
	<ul class="alg-sidebar__list">
		<li class="alg-sidebar__link <?php if ( ! isset( $_GET['tab'] ) || $_GET['tab'] === 'pages'): ?>alg-sidebar__link--active<?php endif; ?>">
			<a href="admin.php?page=algolia-woocommerce">
				Pages
				<span class="alg-sidebar__state">NOT SET</span>
			</a>
		</li>
		<li class="alg-sidebar__link alg-sidebar__link--set<?php if ( isset( $_GET['tab'] ) && $_GET['tab'] === 'zoning'): ?>alg-sidebar__link--active<?php endif; ?>">
			<a href="admin.php?page=algolia-woocommerce&tab=zoning">
				Zoning
				<span class="alg-sidebar__state">OK</span>
			</a>
		</li>
		<li class="alg-sidebar__link <?php if ( isset( $_GET['tab'] ) && $_GET['tab'] === 'appearance'): ?>alg-sidebar__link--active<?php endif; ?>">
			<a href="admin.php?page=algolia-woocommerce&tab=appearance">
				Appearance
				<span class="alg-sidebar__state">NOT SET</span>
			</a>
		</li>
	</ul>
</aside>

<main class="alg-main">
	<div class="alg-main__wrap">

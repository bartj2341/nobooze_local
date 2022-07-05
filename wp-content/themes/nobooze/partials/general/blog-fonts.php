<?php if( 'post' == get_post_type() || is_page( 'blog' ) ): ?>
	<style>
	@font-face {
		font-family: 'pt-serif';
		src: url('../fonts/PTSerif-Regular.woff2') format('woff2'),
		url('../fonts/PTSerif-Regular.woff') format('woff');
		font-style: normal;
		font-weight:400;
		font-display: swap;
	}

	@font-face {
		font-family: 'pt-serif';
		src: url('../fonts/PTSerif-Bold.woff2') format('woff2'),
		url('../fonts/PTSerif-Bold.woff') format('woff');
		font-style: normal;
		font-weight:800;
		font-display: swap;
	}

	.pt-serif {
		font-family: 'PT Serif', serif;
	}
	</style>
<?php endif; ?>
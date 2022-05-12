<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>
	<footer id="colophon" class="u-footer">
		<div class="bg-white">
			<div class="wrapper-nav">
				<div class="u-footer__main d-flex d-flex-justify-s d-flex-align-c">
					<a class="u-footer__logo d-flex d-flex-center" href="<?= home_url(); ?>">
						<?php include get_icons_directory('icons/logo.svg') ?>
					</a>
					<ul class="u-footer__ul d-flex d-flex-wrap list-reset">
						<li class="u-footer__li">
							<ul class="u-footer__sub list-reset">
								<li class="u-footer__link">
									<a href="#">HOME</a>
								</li>
								<li class="u-footer__link">
									<a href="#">ABOUT</a>
								</li>
								<li class="u-footer__link">
									<a href="#">CONTACT</a>
								</li>
							</ul>
						</li>
						<li class="u-footer__li">
							<span class="f-text-bold">WORK WITH ME</span>
							<ul class="u-footer__sub list-reset">
								<li class="u-footer__link">
									<a href="#">EXCLUSIVE PRIVATE COACHING</a>
								</li>
							</ul>
						</li>
		
						<li class="u-footer__li">
							<span class="f-text-bold">RESOURCES</span>
							<ul class="u-footer__sub list-reset">
								<li class="u-footer__link">
									<a href="#">BOOKS</a>
								</li>
								<li class="u-footer__link">
									<a href="#">VIDEOS</a>
								</li>
								<li class="u-footer__link">
									<a href="#">ARTICLES</a>
								</li>
							</ul>
						</li>
					</ul>
		
					<ul class="u-footer__socials d-flex list-reset">
						<li class="u-footer__socials__li"> 
							<a href="#"><?php include get_icons_directory('icons/facebook.svg') ?></a>
						</li>
						<li class="u-footer__socials__li">
							<a href="#"><?php include get_icons_directory('icons/instagram.svg') ?></a>
						</li>
						<li class="u-footer__socials__li">
							<a href="#"><?php include get_icons_directory('icons/linkedin.svg') ?></a>
						</li>
						<li class="u-footer__socials__li">
							<a href="#"><?php include get_icons_directory('icons/youtube.svg') ?></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>

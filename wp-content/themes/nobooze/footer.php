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
				<div class="u-footer__main d-flex">
					<a class="u-footer__logo d-flex d-flex-center" href="<?= home_url(); ?>">
						<?php include get_icons_directory('icons/logo-blue-oval.svg') ?>
					</a>
					<ul class="u-footer__ul d-flex d-flex-justify-c d-flex-wrap list-reset">
						<li class="u-footer__li">
							<ul class="u-footer__sub list-reset">
								<li class="u-footer__sub__li">
									<a class="u-footer__link text-small" href="<?= home_url() ?>/home">HOME</a>
								</li>
								<li class="u-footer__sub__li">
									<a class="u-footer__link text-small" href="<?= site_url() ?>/about">ABOUT</a>
								</li>
								<li class="u-footer__sub__li">
									<a class="u-footer__link text-small" href="<?= site_url() ?>/contact">CONTACT</a>
								</li>
							</ul>
						</li>
						<li class="u-footer__li">
							<ul class="u-footer__sub list-reset">
								<li class="u-footer__sub__li">
									<a class="u-footer__link text-small" href="<?= site_url() ?>/work-with-me">WORK WITH ME</a>
								</li>
							</ul>
						</li>
		
						<li class="u-footer__li">
							<span class="u-footer__li__title f-text-bold text-small">RESOURCES</span>
							<ul class="u-footer__sub list-reset">
								<li class="u-footer__sub__li">
									<a class="u-footer__link text-small" href="<?= site_url() ?>/videos">VIDEOS</a>
								</li>
								<li class="u-footer__sub__li">
									<a class="u-footer__link text-small" href="<?= site_url() ?>/articles">ARTICLES</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="bg-blue">
			<div class="wrapper-nav">
				<div class="u-footer__summary d-flex d-flex-wrap">
					<div class="u-footer__terms d-flex d-flex-justify-c d-flex-align-c">
						<ul class="u-footer__terms__ul d-flex c-white list-reset">
							<li class="u-footer__terms__li">	
								<a class="u-footer__link text-tiny" href="<?= site_url() ?>/terms-of-service">Terms of Service</a>
							</li>
							<li class="u-footer__terms__li">	
								<a class="u-footer__link text-tiny" href="<?= site_url() ?>/refund-policy">Refund Policy</a>
							</li>
							<li class="u-footer__terms__li">	
								<a class="u-footer__link text-tiny" href="<?= site_url() ?>/privacy">Privacy</a>
							</li>
						</ul>
					</div>
					<div class="u-footer__socials d-flex d-flex-justify-c d-flex-align-c">
						<ul class="u-footer__socials__ul d-flex list-reset">
							<li class="u-footer__socials__li p-relative"> 
								<a class="u-footer__socials__link d-flex d-flex-align-c" href="https://www.facebook.com/groups/5914894288539638"><?php include get_icons_directory('icons/facebook.svg') ?></a>
							</li>
							<li class="u-footer__socials__li p-relative">
								<a class="u-footer__socials__link d-flex d-flex-align-c" href="https://www.instagram.com/tomabwhite/"><?php include get_icons_directory('icons/instagram.svg') ?></a>
							</li>
							<li class="u-footer__socials__li p-relative">
								<a class="u-footer__socials__link d-flex d-flex-align-c" href="https://www.youtube.com/channel/UCVbLEt3gdXtoqqXtIzoxzWA"><?php include get_icons_directory('icons/youtube.svg') ?></a>
							</li>
						</ul>
					</div>
					<div class="u-footer__copyright d-flex d-flex-justify-c d-flex-align-c c-white text-tiny">© 2022 NoBooze. All Rights Reserved.</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>

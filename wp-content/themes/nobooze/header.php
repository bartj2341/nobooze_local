<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */


?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header id="masthead" class="u-header">
		<div class="p-relative">
			<div class="bg-black">
				<div class="wrapper-full">
					<div class="u-header__top__content d-flex d-flex-align-c d-flex-justify-e">
						<div class="c-white f-heading line-reset">Call us: <span class="phone-number">+123 0 123 1234</span></div>
					</div>
				</div>
			</div>
			<div class="bg-white">
				<div class="wrapper-full">
					<div class="u-header__main d-flex d-flex-align-c d-flex-justify-s">
						<a class="u-header__logo" href="<?= home_url(); ?>"></a>
						<?php // Remove template template-landing-ebook.php' ?>
						<?php if( 'lp' != get_post_type() && 'ty' != get_post_type() ): ?>
						<ul class="u-header__ul p-relative list-reset">
							<li class="u-header__li d-flex d-flex-align-c p-relative c-pointer line-normal f-heading"><a class="u-header__cta d-flex d-flex-align-c h-100 p-relative" href="#">HOME</a></li>

							<li class="u-header__li d-flex d-flex-align-c p-relative c-pointer line-normal f-heading"><a class="u-header__cta d-flex d-flex-align-c h-100 p-relative" href="#">ABOUT</a></li>

							<li class="u-header__li d-flex d-flex-align-c p-relative c-pointer line-normal f-heading"><a class="u-header__cta d-flex d-flex-align-c h-100 p-relative" href="#">WORK WITH ME</a></li>

							<li class="u-header__li d-flex d-flex-align-c p-relative c-pointer line-normal f-heading"><a class="u-header__cta d-flex d-flex-align-c h-100 p-relative" href="#">MASTERCLASS</a></li>

							<li class="u-header__li d-flex d-flex-align-c p-relative c-pointer line-normal f-heading"><a class="u-header__cta d-flex d-flex-align-c h-100 p-relative" href="#">RESOURCES</a></li>

							<li class="u-header__li d-flex d-flex-align-c p-relative c-pointer line-normal f-heading"><a class="u-header__cta d-flex d-flex-align-c h-100 p-relative" href="#">PRESS & MEDIA</a></li>

							<li class="u-header__li d-flex d-flex-align-c p-relative c-pointer line-normal f-heading"><a class="u-header__cta d-flex d-flex-align-c h-100 p-relative" href="#">CONTACT</a></li>
						</ul>
						<?php endif ?>
					</div>
				</div>
			</div>
		</div>

	</header><!-- #masthead -->

	

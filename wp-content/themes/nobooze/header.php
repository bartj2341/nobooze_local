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
		<?php 
		$post = $wp_query->get_queried_object();
		$pagename = $post ? $post->post_name : '';
		?>
		<div class="p-relative">
			<div class="bg-black">
				<div class="wrapper-nav">
					<div class="u-header__top__content d-flex d-flex-align-c d-flex-justify-e">
						<div class="c-white f-heading line-reset">Call us: <span class="phone-number">+123 1 123 1234</span></div>
					</div>
				</div>
			</div>
			<div class="bg-white">
				<div class="wrapper-nav">
					<div class="u-header__main d-flex d-flex-align-c d-flex-justify-s">
						<a class="u-header__logo d-block" href="<?= home_url(); ?>">
							<img class="u-header__img d-block" src="<?= get_template_directory_uri()?>/assets/src/images/logo.png" alt="nobooze logo">
						</a>

						<ul class="u-header__ul p-relative list-reset">
							<li class="u-header__li d-flex d-flex-align-c p-relative c-pointer line-normal f-heading"><a class="u-header__cta d-flex d-flex-align-c h-100 p-relative <?= strpos('home', $pagename) !== false ? 'u-header__cta--active' : '' ?>" href="<?= home_url() ?>">HOME</a></li>

							<li class="u-header__li d-flex d-flex-align-c p-relative c-pointer line-normal f-heading"><a class="u-header__cta d-flex d-flex-align-c h-100 p-relative <?= strpos('about', $pagename) !== false ? 'u-header__cta--active' : '' ?>" href="<?= site_url() ?>/about">ABOUT</a></li>

							<!-- WORK WITH ME START -->
							<li class="u-header__li d-flex d-flex-align-c p-relative c-pointer line-normal u-header__li--has-children f-heading">
								<a href="#" class="u-header__cta u-header__cta--has-children d-flex d-flex-column d-flex-justify-c d-flex-align-c h-100 p-relative <?= strpos('work-with-me discover-program freedom-coaching-program exclusive-private-coaching', $pagename) !== false ? 'u-header__cta--active' : '' ?>">
									WORK WITH ME
									<?php include get_icons_directory('icons/arrow.svg') ?>
								</a>
								<div class="u-header__sub__ul">
									<div class="u-header__sub__inner p-relative">
										<ul class="u-header__sub__list d-flex d-flex-column list-reset">
											<li class="u-header__sub__li p-relative">
												<a class="u-header__sub__cta d-flex" href="#">DISCOVER PROGRAM</a>
											</li>
											<li class="u-header__sub__li p-relative">
												<a class="u-header__sub__cta d-flex" href="#">FREEDOM COACHING PROGRAM</a>
											</li>
											<li class="u-header__sub__li p-relative">
												<a class="u-header__sub__cta d-flex" href="<?= site_url() ?>/exclusive-private-coaching">EXCLUSIVE PRIVATE COACHING</a>
											</li>
										</ul>
									</div>
								</div>
							</li>
							<!-- WORK WITH ME END -->

							<li class="u-header__li d-flex d-flex-align-c p-relative c-pointer line-normal f-heading">
								<a class="u-header__cta d-flex d-flex-align-c h-100 p-relative <?= strpos(' case-studies-offshore-software-development', $pagename) !== false ? 'u-header__cta--active' : '' ?>" href="#">MASTERCLASS</a>
							</li>
							
							<!-- RESOURCES START -->
							<li class="u-header__li d-flex d-flex-align-c p-relative c-pointer line-normal u-header__li--has-children f-heading">
								<a href="#" class="u-header__cta u-header__cta--has-children d-flex d-flex-column d-flex-justify-c d-flex-align-c h-100 p-relative <?= strpos('books videos articles', $pagename) !== false ? 'u-header__cta--active' : '' ?>">
									RESOURCES
									<?php include get_icons_directory('icons/arrow.svg') ?>
								</a>
								<div class="u-header__sub__ul">
									<div class="u-header__sub__inner p-relative">
										<ul class="u-header__sub__list d-flex d-flex-column list-reset">
											<li class="u-header__sub__li p-relative">
												<a class="u-header__sub__cta d-flex" href="<?= site_url() ?>/books">BOOKS</a>
											</li>
											<li class="u-header__sub__li p-relative">
												<a class="u-header__sub__cta d-flex" href="<?= site_url() ?>/videos">VIDEOS</a>
											</li>
											<li class="u-header__sub__li p-relative">
												<a class="u-header__sub__cta d-flex" href="<?= site_url() ?>/articles">ARTICLES</a>
											</li>
										</ul>
									</div>
								</div>
							</li>
							<!-- RESOURCES END -->

							<li class="u-header__li d-flex d-flex-align-c p-relative c-pointer line-normal f-heading">
								<a class="u-header__cta d-flex d-flex-align-c h-100 p-relative <?= strpos('press-media', $pagename) !== false ? 'u-header__cta--active' : '' ?>" href="<?= site_url() ?>/press-media">PRESS & MEDIA</a>
							</li>
						</ul>

						<div class="u-header__contact">
							<a class="u-header__contact__cta u-btn--mobile-lg" href="#">CONTACT</a>
						</div>
						
						<!-- <div class="menu-toggle__wrapper d-flex d-flex-center h-100 c-pointer">
							<div id="menu-toggle" class="p-relative c-pointer">
								<div id="hamburger" class="p-absolute w-100 h-100">
									<span class="menu-span d-block bg-black"></span>
									<span class="menu-span d-block bg-black"></span>
								</div>
								<div id="cross" class="p-absolute w-100 h-100">
									<span class="menu-span d-block bg-black"></span>
									<span class="menu-span d-block bg-black"></span>
								</div>
							</div>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->

	

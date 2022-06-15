<?php 
$post = $wp_query->get_queried_object();
$pagename = $post ? $post->post_name : '';
?>
<div class="p-relative">
    <div class="bg-blue">
        <div class="wrapper-nav">
            <div class="u-header__top__content d-flex d-flex-align-c d-flex-justify-e">
                <div class="c-white f-heading line-reset text-small">Call us: <span class="phone-number"><a href="tel:+12311231234">+123 1 123 1234</a></span></div>
            </div>
        </div>
    </div>
    <div class="bg-white">
        <div class="wrapper-nav">
            <div class="u-header__main d-flex d-flex-align-c d-flex-justify-s">
                <a class="u-header__logo d-flex d-flex-align-c" href="<?= home_url(); ?>">
                    <?php include get_icons_directory('icons/logo-blue-oval.svg') ?> 
                </a>

                <ul class="u-header__ul p-relative list-reset">
                    <li class="u-header__li d-flex d-flex-align-c p-relative c-pointer line-normal f-heading">
                        <a class="u-header__cta d-flex d-flex-align-c h-100 p-relative <?= strpos('home', $pagename) !== false && $pagename !== NULL && $pagename !== "" ? 'u-header__cta--active' : '' ?>" href="<?= home_url() ?>">HOME
                    </a></li>

                    <li class="u-header__li d-flex d-flex-align-c p-relative c-pointer line-normal f-heading">
                        <a class="u-header__cta d-flex d-flex-align-c h-100 p-relative <?= strpos('about', $pagename) !== false && $pagename !== NULL && $pagename !== "" ? 'u-header__cta--active' : '' ?>" href="<?= site_url() ?>/about">ABOUT</a>
                    </li>

                    <li class="u-header__li d-flex d-flex-align-c p-relative c-pointer line-normal f-heading">
                        <a class="u-header__cta d-flex d-flex-align-c h-100 p-relative <?= strpos('work-with-me', $pagename) !== false && $pagename !== NULL && $pagename !== "" ? 'u-header__cta--active' : '' ?>" href="<?= site_url() ?>/work-with-me">WORK WITH ME</a>
                    </li>

                    <li class="u-header__li d-flex d-flex-align-c p-relative c-pointer line-normal f-heading">
                        <a class="u-header__cta d-flex d-flex-align-c h-100 p-relative <?= strpos('videos', $pagename) !== false && $pagename !== NULL && $pagename !== "" ? 'u-header__cta--active' : '' ?>" href="<?= site_url() ?>/videos">VIDEOS</a>
                    </li>

                    <li class="u-header__li d-flex d-flex-align-c p-relative c-pointer line-normal f-heading">
                        <a class="u-header__cta d-flex d-flex-align-c h-100 p-relative <?= strpos('blog', $pagename) !== false && $pagename !== NULL && $pagename !== "" ? 'u-header__cta--active' : '' ?>" href="<?= site_url() ?>/blog">BLOG</a>
                    </li>

                    <li class="u-header__li d-flex d-flex-align-c p-relative c-pointer line-normal f-heading">
                        <a class="u-header__cta d-flex d-flex-align-c h-100 p-relative <?= strpos('booking', $pagename) !== false && $pagename !== NULL && $pagename !== "" ? 'u-header__cta--active' : '' ?>" href="<?= site_url() ?>/booking">BOOKING</a>
                    </li>

                    <li class="u-header__contact d-flex-align-c">
                        <a class="u-header__contact__cta u-btn--nav" href="<?= site_url() ?>/contact">CONTACT</a>
                    </li>
                </ul>

                
                <div class="menu-toggle__wrapper d-flex d-flex-center h-100 c-pointer">
                    <div id="menu-toggle" class="p-relative c-pointer">
                        <div id="hamburger" class="p-absolute w-100 h-100">
                            <span class="menu-span d-block bg-blue"></span>
                            <span class="menu-span d-block bg-blue"></span>
                        </div>
                        <div id="cross" class="p-absolute w-100 h-100">
                            <span class="menu-span d-block bg-blue"></span>
                            <span class="menu-span d-block bg-blue"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
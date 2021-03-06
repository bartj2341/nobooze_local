<!-- Mobile Menu -->
<div class="m-menu bg-white w-100">
    <div class="m-menu__inner">
        <div class="wrapper-nav">
            <ul class="m-menu__ul list-reset">
                <li class="m-menu__li p-relative">
                    <a class="m-menu__link d-flex d-flex-justify-s d-flex-align-c w-100 c-pointer" href="<?= home_url() ?>">
                        <span class="f-heading">HOME</span>
                    </a>
                </li>
                <li class="m-menu__li p-relative">
                    <a class="m-menu__link d-flex d-flex-justify-s d-flex-align-c w-100 c-pointer" href="<?= site_url() ?>/about">
                        <span class="f-heading">ABOUT</span>
                    </a>
                </li>
                <li class="m-menu__li p-relative">
                    <a class="m-menu__link d-flex d-flex-justify-s d-flex-align-c w-100 c-pointer" href="<?= site_url() ?>/work-with-me">
                        <span class="f-heading">WORK WITH ME</span>
                    </a>
                </li>
                <li class="m-menu__li p-relative">
                    <a class="m-menu__link d-flex d-flex-justify-s d-flex-align-c w-100 c-pointer" href="<?= site_url() ?>/videos">
                        <span class="f-heading">VIDEOS</span>
                    </a>
                </li>
                <li class="m-menu__li p-relative">
                    <a class="m-menu__link d-flex d-flex-justify-s d-flex-align-c w-100 c-pointer" href="<?= site_url() ?>/blog">
                        <span class="f-heading">BLOG</span>
                    </a>
                </li>
                <?php
                /*
                <!-- RESOURCES DROPDOWN START -->
                <li class="m-menu__li m-menu__has-children p-relative">
                    <div class="m-menu__link d-flex d-flex-justify-s d-flex-align-c w-100 c-pointer">
                        <span class="f-heading">RESOURCES</span>
                        <div class="m-menu__li__arrow d-block"></div>
                    </div>
                    <ul class="m-submenu__ul list-reset p-relative">
                        <li class="m-submenu__li">
                            <a class="d-flex d-flex-align-c w-100" href="<?= site_url() ?>/videos">
                                <div class="u-header__sub__icon"><?php include get_icons_directory('icons/video.svg') ?></div>
                                <div class="m-submenu__text f-heading text-sixteen">VIDEOS</div>
                            </a>
                        </li>
                        <li class="m-submenu__li">
                            <a class="d-flex d-flex-align-c w-100" href="<?= site_url() ?>/articles">
                                <div class="u-header__sub__icon"><?php include get_icons_directory('icons/articles.svg') ?></div>
                                <div class="m-submenu__text f-heading text-sixteen">ARTICLES</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- RESOURCES DROPDOWN END -->
                */
                ?>
                
                <li class="m-menu__li p-relative">
                    <a class="m-menu__link d-flex d-flex-justify-s d-flex-align-c w-100 c-pointer" href="<?= site_url() ?>/booking">
                        <span class="f-heading">BOOKING</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="m-menu__btn">
            <div class="wrapper-nav">
                <div class="m-menu__cta__wrapper">
                    <a class="m-menu__cta u-btn--nav" href="<?= site_url() ?>/contact">CONTACT</a>
                </div>
            </div>
        </div>
    </div>
</div>
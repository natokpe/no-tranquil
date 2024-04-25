<?php

declare(strict_types = 1);

use NatOkpe\Wp\Theme\Ecjp\Theme;


$navMenu = wp_nav_menu([
    'theme_location' => 'navbar-menu',
    'menu_class' => 'menu-list',
    'menu_id' => false,
    'container' => 'nav',
    'container_class' => 'navbar-menu',
    'container_id' => false,
    'container_aria_label' => '',
    'fallback_cb' => false,
    'before' => '',
    'after' => '',
    'link_before' => '',
    'link_after' => '',
    'echo' => false,
    'depth' => 1,
    // 'items_wrap' => '',
    'item_spacing' => 'preserve', // Accepts 'preserve' or 'discard'. Default 'preserve'.
]);

$homeUrl = home_url();

if (! $navMenu) {
$navMenu = <<<END
<nav class="navbar-menu">
    <ul class="menu-list">
        <li class="menu-item current-menu-item"><a href="{$homeUrl}">Home</a></li>
        <li class="menu-item"><a href="{$homeUrl}/about-us/">About Us</a></li>
        <li class="menu-item"><a href="{$homeUrl}/contact-us/">Contact Us</a></li>
    </ul>
</nav>
END;
}

$mobileNavMenu = wp_nav_menu([
    'theme_location' => 'navbar-menu-mobile',
    'menu_class' => 'menu-list',
    'menu_id' => false,
    'container' => 'nav',
    'container_class' => 'navbar-menu-mobile',
    'container_id' => false,
    'container_aria_label' => '',
    'fallback_cb' => false,
    'before' => '',
    'after' => '',
    'link_before' => '',
    'link_after' => '',
    'echo' => false,
    'depth' => 1,
    // 'items_wrap' => '',
    'item_spacing' => 'preserve', // Accepts 'preserve' or 'discard'. Default 'preserve'.
]);

if (! $mobileNavMenu) {
$mobileNavMenu = <<<END
<nav class="navbar-menu-mobile">
    <ul class="menu-list">
        <li class="menu-item current-menu-item"><a href="{$homeUrl}">Home</a></li>
        <li class="menu-item"><a href="{$homeUrl}/about-us/">About Us</a></li>
        <li class="menu-item"><a href="{$homeUrl}/contact-us/">Contact Us</a></li>
    </ul>
</nav>
END;
}

?><div class="navbar no-select">

    <!-- Top Bar -->
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="topbar-content">
                        <div class="topbar-content-left">
                            <nav class="topbar-links">
                                <ul>
                                    <li>
                                        <a class="topbar-link" href="mailto:info@ecjp.org">
                                            <i class="topbar-link-icon fas fa-envelope"></i>
                                            <span class="topbar-link-label">info@ecjp.org</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="topbar-link" href="tel:+2348036145319">
                                            <i class="topbar-link-icon fa-solid fa-phone-flip"></i>
                                            <span class="topbar-link-label">+234 (803) 614-5319</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                        <div class="topbar-content-right">
                            <nav class="topbar-links">
                                <ul>
                                    <li>
                                        <a class="topbar-link" href="<?= home_url() . '/faqs' ?>">
                                            <i class="topbar-link-icon fa-solid fa-circle-question"></i>
                                            <span class="topbar-link-label faq">FAQs</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Bar -->
    <div class="mainbar">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="mainbar-content">
                        <a class="brand" href="<?= home_url() ?>">
                            <img class="brand-img" src="<?= Theme::url('assets/img/ecjp-brand.svg') ?>" alt="<?php bloginfo('name'); ?>" />
                        </a>

                        <div class="mainbar-content-right">

                            <?= $navMenu ?>

                            <button class="searchbar-toggle" data-tippy-content="Search" tabindex="0">
                                <i class="fa fa-solid fa-magnifying-glass"></i>
                            </button>

                            <a class="button outline navbar-cta" href="<?= home_url() . '/contact-us' ?>">Get In Touch</a>

                            <button class="mobile-nav-toggle" data-tippy-content="Menu" tabindex="0">
                                <i class="fa fa-solid fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mobile-nav no-select">
    <button class="mobile-nav-close"><i class="fa-solid fa-arrow-right"></i></button>

    <div class="mobile-nav-content">
        <?= $mobileNavMenu ?>
    </div>
</div>

<div class="searchbar">
</div>

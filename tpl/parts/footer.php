<?php

declare(strict_types = 1);

use NatOkpe\Wp\Theme\Ecjp\Theme;

$f1 = wp_nav_menu([
    'theme_location' => 'footer-menu-1',
    'menu_class' => 'menu-list',
    'menu_id' => false,
    'container' => 'nav',
    'container_class' => 'content-footer-menu',
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

if (! $f1) {
$f1 = <<<END
<nav class="content-footer-menu">
    <ul class="menu-list">
        <li class="menu-item current-menu-item"><a href="{$homeUrl}">Home</a></li>
        <li class="menu-item"><a href="{$homeUrl}/about-us/">Our Mission</a></li>
        <li class="menu-item"><a href="{$homeUrl}/events/">Events</a></li>
        <li class="menu-item"><a href="{$homeUrl}/news/">News</a></li>
        <li class="menu-item"><a href="{$homeUrl}/contact-us/">Join Us</a></li>
    </ul>
</nav>
END;
}

$f2 = wp_nav_menu([
    'theme_location' => 'footer-menu-2',
    'menu_class' => 'menu-list',
    'menu_id' => false,
    'container' => 'nav',
    'container_class' => 'content-footer-menu',
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

if (! $f2) {
$f2 = <<<END
<nav class="content-footer-menu">
    <ul class="menu-list">
        <li class="menu-item"><a href="{$homeUrl}/faqs/">FAQs</a></li>
        <li class="menu-item"><a href="{$homeUrl}/about-us/">About Us</a></li>
        <li class="menu-item"><a href="{$homeUrl}/contact-us/">Contact Us</a></li>
        <li class="menu-item"><a href="{$homeUrl}/terms-of-service/">Terms of Service</a></li>
        <li class="menu-item"><a href="{$homeUrl}/privacy-policy/">Privacy Policy</a></li>
    </ul>
</nav>
END;
}

$f3 = wp_nav_menu([
    'theme_location' => 'footer-menu-3',
    'menu_class' => 'menu-list',
    'menu_id' => false,
    'container' => 'nav',
    'container_class' => 'content-footer-menu',
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

if (! $f3) {
$f3 = <<<END
<nav class="content-footer-menu">
    <ul class="menu-list">
        <li class="menu-item"><a href="{$homeUrl}">CRUDAN</a></li>
        <li class="menu-item"><a href="{$homeUrl}">BENGONET</a></li>
        <li class="menu-item"><a href="{$homeUrl}">PBA</a></li>
        <li class="menu-item"><a href="{$homeUrl}">CiSHAN</a></li>
        <li class="menu-item"><a href="{$homeUrl}">AONN</a></li>
    </ul>
</nav>
END;
}

?><!-- Footer Area -->
<div class="content-footer">
    <section class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="content-footer-tab">
                    <img class="content-footer-logo no-select" src="<?= Theme::url('assets/img/ecjp-brand.svg') ?>" alt="ECJP Logo">
                    <p>The Ecumenical Centre for Justice and Peace (ECJP) is a faith-based NGO Founded in 1996 and registered in Nigeria 2007 with the CAC</p>

                    <nav class="social-icons mt-50 no-select">
                        <ul>
                            <li>
                                <a target="_blank" rel="noopener noreferrer" data-tippy-content="Facebook" href="https://www.facebook.com/profile.php?id=100093853145576"><i class="fa-brands fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a data-tippy-content="X" href="#!"><i class="fa-brands fa-x-twitter"></i></a>
                            </li>
                            <li>
                                <a data-tippy-content="Instagram" href="#!"><i class="fa-brands fa-instagram"></i></a>
                            </li>
                            <li>
                                <a data-tippy-content="LinkedIn" href="#!"><i class="fa-brands fa-linkedin-in"></i></a>
                            </li>
                            <li>
                                <a data-tippy-content="WhatsApp" href="#!"><i class="fa-brands fa-whatsapp"></i></a>
                            </li>
                            <!-- <li>
                                <a data-tippy-content="T" href="#!"><i class="fa-brands fa-telegram"></i></a>
                            </li> -->
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 no-select">
                <div class="content-footer-tab">
                    <h3 class="content-footer-heading">Quick Links</h3>
                    <?= $f1 ?>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 no-select">
                <div class="content-footer-tab">
                    <h3 class="content-footer-heading">Support</h3>
                    <?= $f2 ?>
                </div>
            </div>

            <div class="col-md-6 col-lg-2 no-select">
                <div class="content-footer-tab">
                    <h3 class="content-footer-heading">Our Network</h3>
                    <?= $f3 ?>
                </div>
            </div>
        </div>
    </section>
    <section class="content-footer-copyright no-select">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>Copyright &copy; 2023 <a href="<?= home_url() ?>">ECJP</a> | All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </section>
</div>
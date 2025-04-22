<?php

declare(strict_types = 1);

use NatOkpe\Wp\Theme\Tranquil\Theme;
use NatOkpe\Wp\Theme\Tranquil\Utils\Clock;

$logo = get_theme_mod('custom_logo');
$logo = (! empty((string) $logo)) ? wp_get_attachment_image_src((int) $logo, 'full', false) : null;
$logo = is_array($logo) ? $logo[0] : '';

$homeUrl = home_url();

$menus = [
    'footer-1' => [
        'name' => 'Organization',
        'menu' => <<<END
            <nav class="content-footer-menu">
                <ul class="menu-list">
                    <li class="menu-item current-menu-item"><a href="{$homeUrl}">Home</a></li>
                </ul>
            </nav>
        END,
    ],

    'footer-2' => [
        'name' => 'Support',
        'menu' => <<<END
            <nav class="content-footer-menu">
                <ul class="menu-list">
                    <li class="menu-item"><a href="{$homeUrl}/privacy-policy/">Privacy Policy</a></li>
                </ul>
            </nav>
        END,
    ],

    'footer-3' => [
        'name' => 'Our Network',
        'menu' => <<<END
            <nav class="content-footer-menu">
                <ul class="menu-list">
                    <li class="menu-item"><a href="{$homeUrl}">CRUDAN</a></li>
                </ul>
            </nav>
        END,
    ]
];

foreach ($menus as $theme_location => &$_menu) {
    $menu = wp_nav_menu([
        'theme_location' => $theme_location,
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

    if (is_string($menu) && (! empty($menu))) {
        $_menu['menu'] = $menu;
    }
}

?><!-- Footer Area -->
<div class="content-footer pt-5">
    <section class="container">
        <div class="row gx-5 gy-4">
            <div class="col-md-6 col-lg-4">
                <div class="content-footer-tab">
                    <img class="content-footer-logo no-select" src="<?php echo $logo; ?>" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>">
                    <p class="content-footer-logo-desc" title="<?php bloginfo('description'); ?>"><?php bloginfo('description'); ?></p>

                    <nav class="social-icons no-select mt-4">
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
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 no-select">
                <div class="content-footer-tab">
                    <h3 class="content-footer-heading">Organization</h3>
                    <?= $menus['footer-1']['menu'] ?>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 no-select">
                <div class="content-footer-tab">
                    <h3 class="content-footer-heading">Support</h3>
                    <?= $menus['footer-2']['menu'] ?>
                </div>
            </div>

            <div class="col-md-6 col-lg-2 no-select">
                <div class="content-footer-tab">
                    <h3 class="content-footer-heading">Our Network</h3>
                    <?= $menus['footer-3']['menu'] ?>
                </div>
            </div>
        </div>
    </section>
    <section class="content-footer-copyright no-select">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <p>Copyright &copy; <?= Clock::nowYear() ?> <a href="<?= home_url() ?>"><?php bloginfo('name'); ?></a> | All Rights Reserved.</p>
                </div>

                <div class="col-md-2">
                    <p style="text-align: right;"><a href="<?php echo home_url('/wp-sitemap.xml'); ?>" title="Sitemap"><i class="fa-solid fa-sitemap"></i></a> <a class="ms-3" href="<?php bloginfo('rss2_url'); ?>" title="RSS"><i class="fa-solid fa-rss"></i></a></p>
                </div>
            </div>
        </div>
    </section>
</div>
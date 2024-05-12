<?php
/**
 * Template Name: Homepage
 * 
 * The Homepage
 * 
 * @package natokpe
 * @subpackage Ecjp
 * @since Ecjp 0.0.0
 */

declare(strict_types = 1);

use NatOkpe\Wp\Theme\Tranquil\Theme;

get_header();

?><!-- Header Area -->
<header>
    <?php get_template_part('tpl/parts/navbar'); ?>
</header><?php

get_template_part('tpl/parts/home-hero');
get_template_part('tpl/parts/home-intro');
get_template_part('tpl/parts/home-statements');
get_template_part('tpl/parts/home-objectives');
get_template_part('tpl/parts/home-commitment');
get_template_part('tpl/parts/home-events');
get_template_part('tpl/parts/home-news');
get_template_part('tpl/parts/home-cta');
// get_template_part('tpl/parts/home-newsletter');
get_template_part('tpl/parts/footer');

get_footer();

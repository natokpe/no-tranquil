<?php
/**
 * Template Name: About
 * 
 * About
 * 
 * @package natokpe
 * @subpackage Ecjp
 * @since Ecjp 0.0.0
 */

declare(strict_types = 1);

use NatOkpe\Ecjp\Theme\Theme;

get_header();

if ( have_posts() ) :
    while ( have_posts() ) : the_post();

?><div class="content-frame">
    <header class="content-frame-header pt-100">
        <?php get_template_part('tpl/parts/navbar'); ?>
        
        
    </header>

    <main class="content-frame-body mt-50 mb-80">
    	<div class="container">
    	<div class="row">
    	    <div class="col-12">
    	        <h2 style="font-size: 28px;"><?= get_the_title() ?></h2>
    	    </div>
        </div>
        
    	<div class="row">
    	<div class="col-12">
        <article class="post post-<?php the_ID(); ?>"><?php the_content(); ?></article>
        </div>
        </div>
        </div>
    </main>

    <footer class="content-frame-footer">
        <?php get_template_part('tpl/parts/footer'); ?>
    </footer>
</div>
<?php
endwhile;
endif;

get_footer();

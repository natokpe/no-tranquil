<?php
/**
 * Template Name: News
 * 
 * News
 * 
 * @package natokpe
 * @subpackage Ecjp
 * @since Ecjp 0.0.0
 */

declare(strict_types = 1);

use NatOkpe\Wp\Theme\Ecjp\Theme;

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
<?php
$query = new WP_Query([
    'post_type' => 'post',
    'post_status' => 'publish',
    'has_password' => false,
    'order' => 'DESC',
    'orderby' => 'date',
    'nopaging' => false,
    'posts_per_page' => 20
]);

while ($query->have_posts()) {
    $query->the_post();
// $news_date_ago = (new \Smirik\PHPDateTimeAgo\DateTimeAgo())->get(new \DateTime('-24 hours'));
// composer require smirik/php-datetime-ago

    $news_cat = get_the_category(get_the_ID());

    if (! empty($news_cat)) {
        $news_cat = $news_cat[0];
        $news_cat_link = esc_url(get_category_link($news_cat->term_id));
        $news_cat = $news_cat->name;
    } else {
        $news_cat = '';
        $news_cat_link = '';
    }

    $thmb = has_post_thumbnail() ? get_the_post_thumbnail_url() : Theme::url('assets/img/i.jpg');

    ?>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="card-blog mb-30">
                    <a class="card-blog-image" href="<?= get_the_permalink() ?>">
                        <img src="<?= $thmb ?>" alt="<?= get_the_title() ?>" />
                    </a>

                    <div class="card-blog-body">
                        <div class="card-blog-tax no-select">
                            <a class="post-category" href="<?= $news_cat_link ?>"><?= $news_cat; ?></a>
                        </div>
                        <h3 class="card-blog-title no-select"><a href="<?= get_the_permalink() ?>"><?= get_the_title() ?></a></h3>
                        <p class="card-blog-excerpt"><?= get_the_excerpt() ?></p>
                    </div>
                    <div class="card-blog-footer no-select">
                        <div class="card-blog-date">
                            <i class="fa-solid fa-clock"></i>
                            <span class="date"><?= get_the_time('F j, Y - g:i a') ?></span>
                        </div>
                    </div>
                </div>
            </div>
    <?php
}

wp_reset_postdata(); ?>
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

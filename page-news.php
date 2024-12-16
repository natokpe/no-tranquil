<?php
/**
 * Template Name: News
 * 
 * @package NatOkpe
 */

declare(strict_types = 1);

use NatOkpe\Wp\Theme\Tranquil\Theme;

Theme::add_body_classes('navbar-sticky');

get_header();

$query = new WP_Query([
    'post_type' => 'post',
    'post_status' => 'publish',
    'has_password' => false,
     'order' => 'DESC',
     'orderby' => 'date',
     'nopaging' => false,
     'posts_per_page' => 20
]);

while (have_posts()):
    the_post();

    ?>
<div class="frame">
    <header class="frame-header">
    <?php get_template_part('tpl/parts/navbar'); ?>

    </header>

    <main class="frame-body mt-4 mb-5 pb-3">
        <div class="container">
            <div class="row">

                <div class="col-lg-9 col-xl-8">
                    <div class="post-details mb-3">
                        <h1 class="page-title"><?= get_the_title() ?></h1>
                    </div>
                </div>

                <div class="col-12">
                    <div class="row gy-4">
<?php

while ($query->have_posts()):
    $query->the_post();

    $schedule_date = get_post_meta(get_the_ID(), 'event_date', true) ?? '';
?>

                        <div class="col-md-4 col-lg-3">
                            <a class="news no-select" href="<?= get_the_permalink() ?>">
                                <div class="news-image">
<?php if (has_post_thumbnail()): ?>
                                    <img src="<?= get_the_post_thumbnail_url() ?>" alt="<?= get_the_title() ?>" />
<?php endif; ?>
                                </div>

                                <h3 class="news-title"><?= get_the_title() ?></h3>

                                <div class="news-date">
                                    <time><?= get_the_time('M j, Y') ?></time>
                                </div>
                            </a>
                        </div>
<?php

endwhile;

wp_reset_postdata();
?>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <footer class="frame-footer">
        <?php get_template_part('tpl/parts/footer'); ?>
    </footer>
</div>
<?php

endwhile;

get_footer();

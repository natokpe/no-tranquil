<?php
declare(strict_types = 1);

use NatOkpe\Wp\Theme\Tranquil\Theme;

Theme::add_body_classes('navbar-sticky');

get_header();

while (have_posts()):
    the_post();

    $news_cat = get_the_category(get_the_ID());

    if (! empty($news_cat)) {
        $news_cat = $news_cat[0];
        $news_cat_link = esc_url(get_category_link($news_cat->term_id));
        $news_cat = $news_cat->name;
    } else {
        $news_cat = '';
        $news_cat_link = '';
    }

    ?>
<div class="frame">
    <header class="frame-header">
    <?php get_template_part('tpl/parts/navbar'); ?>

    </header>

    <main class="frame-body mt-4 mb-5">
        <div class="container">
            <div class="row gy-5 gx-5">

                <div class="col-lg-9 col-xl-8">
                    <div class="post-details mb-3">
                        <h1 class="page-title"><?= get_the_title() ?></h1>

                        <div class="post-details-date">
                            Published on: <time datetime="<?= get_the_time('c') ?>"><?= get_the_time('M j, Y \a\t g:i A') ?></time>
                        </div>

<?php if (! empty($news_cat) && ($news_cat != 'Uncategorized')): ?>
                        <div class="post-details-categories">
                            <div class="post-category"><?= $news_cat ?></div>
                        </div>
<?php endif; ?>


<?php if (has_post_thumbnail()): ?>
                        <div class="post-details-image">
                            <img src="<?= get_the_post_thumbnail_url() ?>" alt="<?= get_the_title() ?>" title="<?= get_the_title() ?>" />
                        </div>
<?php endif; ?>
                    </div>
                    <div class="w-100">
                        <?php the_content() ?>
                    </div>
                </div>

<?php if (is_active_sidebar('news-post-sidebar')): ?>
                <div class="col-lg-3 col-xl-4">
                    <div class="widgets">
                        <?php dynamic_sidebar('news-post-sidebar'); ?>
                    </div>
                </div>
<?php endif; ?>

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

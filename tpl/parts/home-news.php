<?php
declare(strict_types = 1);

use NatOkpe\Wp\Theme\Tranquil\Theme;

?><!-- News -->
<section class="content-section mt-70 mb-70">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-heading">News & Updates</h2>
                <h3 class="section-sub-heading">Our Recent Publications</h3>
            </div>
        </div>
        <div class="row justify-content-center">
<?php

$query = new WP_Query([
    'post_type' => 'post',
    'post_status' => 'publish',
    'has_password' => false,
    'order' => 'DESC',
    'orderby' => 'date',
    'nopaging' => false,
    'posts_per_page' => 3
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

wp_reset_postdata();
?>
        </div>
    </div>
</section>

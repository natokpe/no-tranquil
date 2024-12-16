<?php
declare(strict_types = 1);

use NatOkpe\Wp\Theme\Tranquil\Theme;

?>
<section class="content-section my-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-heading">News & Updates</h2>
                <h3 class="section-sub-heading">Our Recent Publications</h3>
            </div>
        </div>
        <div class="row gy-3 pb-3">
<?php

$query = new WP_Query([
    'post_type' => 'post',
    'post_status' => 'publish',
    'has_password' => false,
     'order' => 'DESC',
     'orderby' => 'date',
     'nopaging' => false,
     'posts_per_page' => 4
]);

while (have_posts()):
    the_post();

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
</section>

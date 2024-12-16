<?php
declare(strict_types = 1);

use NatOkpe\Wp\Theme\Tranquil\Theme;

?><!-- Events -->
<section class="content-section events py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-heading">Events</h2>
                <h3 class="section-sub-heading">Recent & Upcoming</h3>
            </div>
        </div>
        <div class="row gy-4 pb-4">

<?php

$query = new WP_Query([
    'post_type' => 'event',
    'post_status' => 'publish',
    'has_password' => false,
    'order' => 'DESC',
    'orderby' => 'date',
    'nopaging' => false,
    'posts_per_page' => 3
]);

while ($query->have_posts()) {
    $query->the_post();
    $schedule_date = get_post_meta(get_the_ID(), 'event_date', true) ?? '';
    ?>
            <div class="col-md-4 col-lg-3">
                <a class="event no-select" href="<?= get_the_permalink() ?>">
                    <div class="event-image">
<?php if (has_post_thumbnail()): ?>
                        <img src="<?= get_the_post_thumbnail_url() ?>" alt="<?= get_the_title() ?>" />
<?php endif; ?>
                    </div>

                    <div class="event-schedule">
                        <time><?= $schedule_date ?></time>
                    </div>

                    <h3 href="#" class="event-title"><?= get_the_title() ?></h3>
                </a>
            </div>

    <?php
}

wp_reset_postdata();
?>

        </div>
    </div>
</section>

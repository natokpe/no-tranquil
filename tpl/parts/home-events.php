<?php
declare(strict_types = 1);

use NatOkpe\Wp\Theme\Tranquil\Theme;

?><!-- Events -->
<section class="content-section events">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-heading">Events</h2>
                <h3 class="section-sub-heading">Recent & Upcoming</h3>
            </div>
        </div>
        <div class="row justify-content-center">

<?php

// $query = new WP_Query([
//     'post_type' => 'event',
//     'post_status' => 'publish',
//     'has_password' => false,
//     'order' => 'DESC',
//     'orderby' => 'date',
//     'nopaging' => false,
//     'posts_per_page' => 3
// ]);

// while ($query->have_posts()) {
//     $query->the_post(); ?>
            <div class="col-md-6 col-lg-4">
                <div class="card-event mb-30">
                    <a class="card-event-image" href="#">
                        <img src="<?= Theme::url('assets/img/blog.jpg') ?>" alt="Event Title" />
                    </a>

                    <div class="card-event-body">
                        <div class="card-event-body-details">
                            <div class="details-left">
                                <div class="card-event-tax no-select">
                                    <a class="post-tag" href="#">ECJP</a>
                                </div>

                                <h3 class="card-event-title no-select"><a href="#">Campaign for Healthy food and nutrition for all the children</a></h3>

                                <p class="card-event-excerpt">Lorem ipsum dolor sit amet, consectetur notted adipisicing elit sed do eiusmod</p>
                            </div>
                            <div class="details-right no-select">
                                <span class="card-event-date">
                                    <span class="card-event-date-day">6</span>
                                    <span class="card-event-date-month">Nov</span>
                                </span>
                            </div>
                        </div>

                        <div class="card-event-footer no-select">
                            <div class="card-event-footer-tab card-event-footer-tab-left">
                                <span class="tab-icon"><i class="fa-solid fa-location-dot"></i></span>
                                <div class="tab-summary">
                                    <span class="tab-heading">Location</span>
                                    <span class="tab-details">Lorem ipsum dolor sit amet, consectetur notted adipisicing elit</span>
                                </div>
                            </div>

                            <div class="card-event-footer-tab card-event-footer-tab-right">
                                <span class="tab-icon"><i class="fa-solid fa-clock"></i></span>
                                <div class="tab-summary">
                                    <span class="tab-heading">Time</span>
                                    <span class="tab-details">10:30 AM (WAT)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    <?php
// }

// wp_reset_postdata();
?>

        </div>
    </div>
</section>

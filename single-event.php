<?php
/**
 * Template Name: Event Details
 * 
 * Event Details page
 * 
 * @package natokpe
 * @subpackage Ecjp
 * @since Ecjp 0.0.0
 */

declare(strict_types = 1);

use NatOkpe\Ecjp\Theme\Theme;

get_header();

while (have_posts()):
    the_post();

    $thmb = has_post_thumbnail() ? get_the_post_thumbnail_url() : Theme::url('assets/img/blog.jpg');

    ?>
<div class="content-frame">
    <header class="content-frame-header pt-100">
    <?php get_template_part('tpl/parts/navbar'); ?>

        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-3 col-xl-4">

                    <nav class="breadcrumb no-select mt-40">
                        <ol>
                            <li data-tippy-content="Go to Home"><a href="<?= home_url() ?>"><i class="mr-5 fa fa-solid fa-home"></i> Home</a></li>
                            <li data-tippy-content="Go to Events"><a href="<?= home_url() . '/events' ?>">Events</a></li>
                            <li class="active" data-tippy-content="You are here!"><?= get_the_title() ?></li>
                        </ol>
                    </nav>

                </div>
            </div>
        </div>

    </header>

    <div class="content-frame-body mt-50 mb-80">
        <div class="container">
            <div class="row">

                <div class="col-lg-9 col-xl-8">
                    <div class="row">
                        <div class="col-12">
                            <span class="page-label no-select">Event</span>
                        </div>
                        <div class="col-12">
                            <h1 class="page-heading mb-10"><?= get_the_title() ?></h1>
                        </div>
<?php if (has_post_thumbnail()): ?>
                        <div class="col-12">
                            <div class="featured-image">
                                <img src="<?= get_the_post_thumbnail_url() ?>" alt="<?= get_the_title() ?>" />
                            </div>
                        </div>
<?php endif; ?>
                        <!-- <div class="col-12">
                            <div class="event-details">
                                <div class="detail">
                                    <h2 class="">Date / Time</h2>
                                </div>
                            </div>
                        </div> -->
                        <div class="col-12">
                            <article <?php post_class('post-content'); ?>>
                                <?php the_content() ?>
                            </article>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-xl-4">
                </div>
            </div>
        </div>
    </div>

    <footer class="content-frame-footer">
        <?php get_template_part('tpl/parts/footer'); ?>
    </footer>
</div>
<?php

endwhile;

get_footer();

<?php
/**
 * Template Name: 1-Col Full-Width
 * 
 * @package NatOkpe
 */

declare(strict_types = 1);

use NatOkpe\Wp\Theme\Tranquil\Theme;

Theme::add_body_classes('navbar-sticky');

get_header();

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

<?php if (has_post_thumbnail()): ?>
                        <div class="post-details-image">
                            <img src="<?= get_the_post_thumbnail_url() ?>" alt="<?= get_the_title() ?>" title="<?= get_the_title() ?>" />
                        </div>
<?php endif; ?>
                    </div>
                </div>

                <div class="col-12">
                    <?php the_content() ?>
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

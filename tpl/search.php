<?php
/**
 * Template Name: SRP
 * 
 * SRP
 * 
 * @package natokpe
 * @subpackage Ecjp
 * @since Ecjp 0.0.0
 */

declare(strict_types = 1);

use NatOkpe\Ecjp\Theme\Theme;

get_header();

$navBar = [
    's' => esc_attr(ecjp_get_option('ecjpopnb_s', home_url() . '/search')),
];

while (have_posts()):
    the_post();

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
                            
                        <form class="searchbar-form mb-30" method="GET" action="<?= $navBar['s'] ?>">
                            <div class="form-group block">
                                <input type="search"
                                       class="form-control bar"
                                       name="q"
                                       placeholder="Search"
                                       required="required"
                                />
                                <button type="submit"><i class="fa fa-solid fa-search"></i></button>
                            </div>
                        </form>

                        </div>
                        <div class="col-12">
                            <h1 class="page-heading mb-10">Search Results</h1>
                        </div>
                        <div class="col-12">
                            <article <?php post_class('post-content'); ?>>
                                <p>No Results</p>
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

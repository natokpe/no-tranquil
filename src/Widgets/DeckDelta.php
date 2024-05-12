<?php

declare(strict_types=1);

namespace NatOkpe\Wp\Theme\Tranquil\Widgets;

use \WP_Widget;
use \WP_Query;

class DeckDelta extends WP_Widget
{
    /**
     * @var array
     */
    public $args = [
        'before_title'  => '',
        'after_title'   => '',
        'before_widget' => '',
        'after_widget'  => ''
    ];

    /**
     * 
     */
    public
    function __construct() {
        parent::__construct(
            'deck-delta',  // Base ID
            'Deck: Delta'  // Name
        );
    }

    /**
     * 
     */
    public
    function widget($args, $instance)
    {
        $q = new WP_Query([
            'order'   => 'DESC',
            'orderby' => 'date',
            'nopaging'=> true,
            // 'posts_per_page',
            'post__not_in' => Theme::getLoadedPosts()
        ]);

        if (! $q->have_posts()) {
            return;
        }

        shuffle($q->posts);

        $c = 5;

        $placeholder = get_stylesheet_directory_uri() . '/media/images/lazyloader.png';

        ?><div class="lukaf-deck-delta">
            <div class="container">
                <div class="row g-3">
                    <div class="col-12 col-lg-6"><?php

                    while ($q->have_posts() && $c > 4) {
                        $q->the_post();

                        $cat = wp_get_post_categories($q->post->ID, [
                            'hide_empty' => true,
                            'number'     => 1,
                            'fields'     => 'names',
                            'count'      => false,
                        ])[0] ?? '';

                        $thumb = has_post_thumbnail() ? get_the_post_thumbnail_url() : '';

                        $post_dt = (new \SalernoLabs\RelativeTime\Formatter())
                        ->getRelativeTime(new \DateTime(get_the_time('Y-m-d\TH:i:sP')));

                        ?><a class="deck-delta-card deck-delta-card-1" href="<?php the_permalink() ?>">
                            <img class="lazy" src="<?= $placeholder ?>" data-src="<?= $thumb ?>" />
                            <div class="content">
                                <div class="category"><?= $cat ?></div>
                                <div class="title"><?php the_title() ?></div>
                                <!-- <div class="date" datetime="1914-12-20T08:00+00:00" title="2022-05-15"><?= $post_dt ?></div> -->
                            </div>
                        </a><?php

                        Theme::addLoadedPost($q->post->ID);

                        $c--;
                    } ?>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="row g-3"><?php

                        while ($q->have_posts() && $c > 0) {
                            $q->the_post();

                            $cat = wp_get_post_categories($q->post->ID, [
                                'hide_empty' => true,
                                'number'     => 1,
                                'fields'     => 'names',
                                'count'      => false,
                            ])[0] ?? '';

                            $thumb = has_post_thumbnail() ? get_the_post_thumbnail_url() : '';

                            $post_dt = (new \SalernoLabs\RelativeTime\Formatter())
                            ->getRelativeTime(new \DateTime(get_the_time('Y-m-d\TH:i:sP')));

                            ?><div class="col-6 col-sm-6 col-lg-6">
                                <a class="deck-delta-card" href="<?php the_permalink() ?>">
                                    <img class="lazy" src="<?= $placeholder ?>" data-src="<?= $thumb ?>" />
                                    <div class="content">
                                        <div class="category"><?= $cat ?></div>
                                        <div class="title"><?php the_title() ?></div>
                                        <!-- <div class="date" datetime="1914-12-20T08:00+00:00" title="2022-05-15"><?= $post_dt ?></div> -->
                                    </div>
                                </a>
                            </div><?php

                            Theme::addLoadedPost($q->post->ID);

                            $c--;
                        } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div><?php

        wp_reset_postdata();
    }
 
    public function form($instance)
    {
        // Defaults.
        $instance = wp_parse_args(
            (array) $instance,
            array(
                'sortby'  => 'post_title',
                'title'   => '',
                'exclude' => '',
            )
        );
        ?>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php _e( 'Title:' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['title'] ); ?>" />
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'sortby' ) ); ?>"><?php _e( 'Sort by:' ); ?></label>
            <select name="<?php echo esc_attr( $this->get_field_name( 'sortby' ) ); ?>" id="<?php echo esc_attr( $this->get_field_id( 'sortby' ) ); ?>" class="widefat">
                <option value="post_title"<?php selected( $instance['sortby'], 'post_title' ); ?>><?php _e( 'Page title' ); ?></option>
                <option value="menu_order"<?php selected( $instance['sortby'], 'menu_order' ); ?>><?php _e( 'Page order' ); ?></option>
                <option value="ID"<?php selected( $instance['sortby'], 'ID' ); ?>><?php _e( 'Page ID' ); ?></option>
            </select>
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'exclude' ) ); ?>"><?php _e( 'Exclude:' ); ?></label>
            <input type="text" value="<?php echo esc_attr( $instance['exclude'] ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'exclude' ) ); ?>" id="<?php echo esc_attr( $this->get_field_id( 'exclude' ) ); ?>" class="widefat" />
            <br />
            <small><?php _e( 'Page IDs, separated by commas.' ); ?></small>
        </p>
        <?php
    }
 
    public function update($new_instance, $old_instance)
    {
      $instance = array();
      return $instance;
    }
}

<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

declare(strict_types = 1);

namespace NatOkpe\Wp\Theme\Tranquil;

use NatOkpe\Wp\Theme\Tranquil\Loaders\AssetLoader;
use NatOkpe\Wp\Theme\Tranquil\Loaders\WidgetLoader;

use \WP_Query;

use function \add_action;
use function \esc_attr;
use function \add_theme_support;
use function \add_filter;
use function \remove_filter;
use function \add_shortcode;
use function \shortcode_atts;
use function \wpautop;
use function \get_stylesheet_directory;
use function \get_stylesheet_directory_uri;
use function \load_theme_textdomain;
use function \cmb2_get_option;
class Theme
{
    /**
     * @var \NatOkpe\Ecjp\Theme\Config
     */
    private
    $_config = null;

    /**
     * 
     */
    public
    function __construct(Config $config)
    {
        $this->_config = $config->close();
    }

    public static
    function add_body_classes(string ...$body_classes): void
    {
        add_filter('body_class', function($classes) use ($body_classes)
        {
            // TODO: check uniqueness
            // TODO: remove empty strings
            return array_merge($classes, $body_classes);
        });
    }

    /**
     * 
     */
    public static
    function url(...$parts): string
    {
        $a = [];
        $p = [];
        $d = get_stylesheet_directory_uri();

        foreach ($parts as $part) {
            if (is_array($part)) {
                $a = array_merge($a, $part);
            } else {
                if (is_scalar($part)) {
                    $a[] = $part;
                }
            }
        }

        foreach ($a as $part) {
            $p[] = ltrim((string) $part, '/');
        }

        $d = ! empty($p) ? rtrim($d, '/') : $d;

        return implode('/', array_merge([$d], $p));
    }

    /**
     * 
     */
    public static
    function dir(...$parts): string
    {
        $a = [];
        $p = [];
        $d = get_stylesheet_directory();

        foreach ($parts as $part) {
            if (is_array($part)) {
                $a = array_merge($a, $part);
            } else {
                if (is_scalar($part)) {
                    $a[] = $part;
                }
            }
        }

        foreach ($a as $part) {
            $p[] = ltrim((string) $part, '\\/');
        }

        $d = ! empty($p) ? rtrim($d, '\\/') : $d;

        return implode(DIRECTORY_SEPARATOR, array_merge([$d], $p));
    }

    /**
     * 
     */
    public static
    function dirAssets(...$parts): string
    {
        return self::dir('assets', ...$parts);
    }

    /**
     * 
     */
    public static
    function dirConfig(...$parts): string
    {
        return self::dir('config', ...$parts);
    }

    /**
     * 
     */
    public static
    function path(...$parts): string
    {
        $a = [];
        $p = [];

        foreach ($parts as $part) {
            if (is_array($part)) {
                $a = array_merge($a, $part);
            } else {
                if (is_scalar($part)) {
                    $a[] = $part;
                }
            }
        }

        foreach ($a as $part) {
            if (is_scalar($part)) {
                $p[] = $part;
            }
        }

        return implode(DIRECTORY_SEPARATOR, $p);
    }

    /**
     * 
     */
    public static
    function env(?string $key = null, $alt = null): mixed
    {
        return is_null($key) ? ($_ENV ?? []) : ($_ENV[$key] ?? $alt);
    }

    /**
     * 
     */
    public static
    function get_option(string $key = '', $default = false, string $store = 'no_opts')
    {
        if (function_exists( 'cmb2_get_option' ) ) {
            // Use cmb2_get_option as it passes through some key filters.
            return cmb2_get_option($store, $key, $default );
        }

        // Fallback to get_option if CMB2 is not loaded yet.
        $opts = get_option( $store, $default );

        $val = $default;

        if ( 'all' == $key ) {
            $val = $opts;
        } elseif ( is_array( $opts ) && array_key_exists( $key, $opts ) && false !== $opts[ $key ] ) {
            $val = $opts[ $key ];
        }

        return $val;
    }

    /**
     * 
     */
    public
    function start(): self
    {
        global $content_width;

        load_theme_textdomain('natokpe', self::dir('lang'));

        add_filter('locale', function ($locale) {
            return $this->_config->locale;
        });

        add_action('admin_init', function () {
            add_theme_support('editor-styles');
            add_editor_style('style.css');
        });

        add_action('after_setup_theme', function () {
            foreach ($this->_config->theme_support as $_ => $__) {
                add_theme_support($_, $__);
            }

            // add_editor_style();

            foreach ($this->_config->image_sizes as $slug => $__) {
                if (! isset($__['width'])) {
                    continue;
                }

                add_image_size(
                    (string) $slug,
                    (int) $__['width'],
                    ((int) $__['height']) ?? null,
                    ((bool) $__['crop']) ?? true,
                );
            }
        });

        $loader = (new AssetLoader([
            'styles'  => $this->_config->assets['styles'] ?? [],
            'scripts' => $this->_config->assets['scripts'] ?? []
        ]))->loadAll();

        $loader = (new WidgetLoader([
            'widgets'          => $this->_config->widgets ?? [],
            'widget_locations' => $this->_config->widget_locations ?? []
        ]))->loadAll();

        add_action('init', function () {
            register_nav_menus([
                'navbar-menu'        => __('Nav Bar Menu', 'natokpe'),
                'navbar-menu-mobile' => __('Nav Bar Menu (Mobile)', 'natokpe'),
                'footer-menu-1'         => __('Footer Menu 1', 'natokpe'),
                'footer-menu-2'         => __('Footer Menu 2', 'natokpe'),
                'footer-menu-3'         => __('Footer Menu 3', 'natokpe')
            ]);

            add_shortcode('list_people', function ($atts, $content = '') {
                $args = [
                    'post_type'    => 'person',
                    'post_status'  => 'publish',
                    'has_password' => false,

                    'order'        =>
                    in_array($atts['order'] ?? null, ['ASC', 'DESC'])
                    ? $atts['order'] : 'ASC',

                    'orderby'      => in_array(($atts['orderby'] ?? null), [
                        'none', 'ID', 'date', 'modified', 'menu_order',
                    ], true) ? $atts['orderby'] : 'menu_order',

                    'nopaging' => true,
                    'posts_per_page' => -1,
                    'tax_query' => [
                        [
                            'taxonomy' =>'person-group',
                            'field' => 'slug',
                            'include_children' => false,
                        ]
                    ]
                ];

                if (ctype_digit($atts['limit'] ?? '')) {
                    $limit = (int) $atts['limit'];

                    if ($limit > 0) {
                        $args['nopaging'] = false;
                        $args['posts_per_page'] = $limit;
                    }
                }

                if (! empty(($atts['group'] ?? ''))) {
                    $args['tax_query'][0]['terms'] = $atts['group'];
                }

                $query = new WP_Query($args);

                $people = [];

                while ($query->have_posts()) {
                    $query->the_post();

                    $person = [
                        'photo' => has_post_thumbnail() ?
                        get_the_post_thumbnail_url() :
                        Theme::url('assets/img/person.webp'),

                        'name' => filter_var(
                            get_post_meta(get_the_ID(), 'name', true),
                            FILTER_CALLBACK,
                            [
                                'options' => function ($vl) {
                                    return is_string($vl) ? $vl : '';
                                },
                            ],
                        ),

                        'name_prefix' => filter_var(
                            get_post_meta(get_the_ID(), 'name_prefix', true),
                            FILTER_CALLBACK,
                            [
                                'options' => function ($vl) {
                                    return is_string($vl) ? $vl : '';
                                },
                            ],
                        ),

                        'name_suffix' => filter_var(
                            get_post_meta(get_the_ID(), 'name_suffix', true),
                            FILTER_CALLBACK,
                            [
                                'options' => function ($vl) {
                                    return is_string($vl) ? $vl : '';
                                },
                            ],
                        ),
                    ];

                    $roles = get_the_terms(get_the_ID(), 'person-role');
                    $roles = ($roles !== false) ? $roles : [];

                    foreach ($roles as $role) {
                        $person['roles'][] = $role->name;
                    }

                    $person_link = filter_var(
                        get_post_meta(get_the_ID(), 'social_fb', true),
                        FILTER_VALIDATE_URL,
                        [
                            'default' => '',
                        ],
                    );

                    if (! empty($person_link)) {
                        $person['links']['fa-brands fa-facebook-f'] = $person_link;
                    }

                    // X
                    $person_link = filter_var(
                        get_post_meta(get_the_ID(), 'social_x', true),
                        FILTER_VALIDATE_URL,
                        [
                            'default' => '',
                        ],
                    );

                    if (! empty($person_link)) {
                        $person['links']['fa-brands fa-x-twitter'] = $person_link;
                    }

                    // IG
                    $person_link = filter_var(
                        get_post_meta(get_the_ID(), 'social_ig', true),
                        FILTER_VALIDATE_URL,
                        [
                            'default' => '',
                        ],
                    );

                    if (! empty($person_link)) {
                        $person['links']['fa-brands fa-instagram'] = $person_link;
                    }

                    // LinkedIn
                    $person_link = filter_var(
                        get_post_meta(get_the_ID(), 'social_in', true),
                        FILTER_VALIDATE_URL,
                        [
                            'default' => '',
                        ],
                    );

                    if (! empty($person_link)) {
                        $person['links']['fa-brands fa-linkedin-in'] = $person_link;
                    }

                    $person_link = filter_var(
                        get_post_meta(get_the_ID(), 'social_wa', true),
                        FILTER_VALIDATE_URL,
                        [
                            'default' => '',
                        ],
                    );

                    if (! empty($person_link)) {
                        $person['links']['fa-brands fa-whatsapp'] = $person_link;
                    }

                    $person_link = filter_var(
                        get_post_meta(get_the_ID(), 'social_tg', true),
                        FILTER_VALIDATE_URL,
                        [
                            'default' => '',
                        ],
                    );

                    if (! empty($person_link)) {
                        $person['links']['fa-brands fa-telegram'] = $person_link;
                    }

                    $person_link = filter_var(
                        get_post_meta(get_the_ID(), 'email', true),
                        FILTER_VALIDATE_EMAIL,
                        [
                            'default' => '',
                        ],
                    );

                    if (! empty($person_link)) {
                        $person['links']['fa fa-envelope'] = 'mailto:' .
                        $person_link;
                    }

                    $person_link = filter_var(
                        get_post_meta(get_the_ID(), 'website', true),
                        FILTER_VALIDATE_URL,
                        [
                            'default' => '',
                        ],
                    );

                    if (! empty($person_link)) {
                        $person['links']['fa fa-globe'] = $person_link;
                    }

                    $people[] = $person;
                }

                wp_reset_postdata();

                return Tpl::load('list-people', $people);
            });

        });

        $content_width = 800;

        return $this;
    }
}
/*
 * Local variables:
 * tab-width: 4
 * c-basic-offset: 4
 * c-hanging-comment-ender-p: nil
 * End:
 */

<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

declare(strict_types = 1);

namespace NatOkpe\Wp\Theme\Tranquil;

use NatOkpe\Wp\Theme\Tranquil\Loaders\AssetLoader;
use NatOkpe\Wp\Theme\Tranquil\Loaders\WidgetLoader;

use function \add_action;
use function \add_theme_support;
use function \get_stylesheet_directory;
use function \get_stylesheet_directory_uri;
use function \load_theme_textdomain;
use function \cmb2_get_option;

/**
 * The short description
 *
 * As many lines of extendend description as you want {@link element} links to an element
 * {@link http://www.example.com Example hyperlink inline link} links to a website
 * Below this goes the tags to further describe element you are documenting
 *
 * @param type $varname description
 * @param string $month 3-letter Month abbreviation
 * @param integer $day day of the month
 * @param integer $year year
 * @return type description
 * @access public
 * @author Nat Okpe <natokpe@gmail.com>
 * @copyright name date
 * @version 1.0.0
 * @see name of another element that can be documented, produces a link to it in the documentation
 * @link a url
 * @since a version or a date
 * @deprec alias for deprecated
 * @magic phpdoc.de compatibility
 * @todo phpdoc.de compatibility
 * @exception Javadoc-compatible, use as needed
 * @throws Javadoc-compatible, use as needed
 * @var type a data type for a class variable
 * @package package name
 * @subpackage sub package name, groupings inside of a project
 */
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

        load_theme_textdomain('thewedding', self::dir('lang'));

        add_filter('locale', function ($locale) {
            return $this->_config->locale;
        });

        add_action('after_setup_theme', function () {
            foreach ($this->_config->theme_support as $_ => $__) {
                add_theme_support($_, $__);
            }

            // add_editor_style();
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
                'navbar-menu'        => __('Nav Menu', 'thewedding'),
                'navbar-menu-mobile' => __('Navbar Menu Mobile', 'ecjp'),
                'footer-menu-1'         => __('Footer Menu 1', 'ecjp'),
                'footer-menu-2'         => __('Footer Menu 2', 'ecjp'),
                'footer-menu-3'         => __('Footer Menu 3', 'ecjp')
            ]);
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

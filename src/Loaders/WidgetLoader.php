<?php
declare(strict_types = 1);

namespace NatOkpe\Wp\Theme\Tranquil\Loaders;

use \WP_Widget;

use function \add_action;
use function \get_stylesheet_directory;
use function \register_sidebar;
use function \register_widget;

/**
 * @author Nat Okpe <natokpe@gmail.com>
 */
class WidgetLoader
{

    /**
     * @var array
     */
    private
    $_widgets = [];

    /**
     * @var array
     */
    private
    $_widget_locations = [];

    /**
     * 
     */
    public
    function __construct(array $config = [])
    {
        $a = [
            'widgets'          => $config['widgets'] ?? [],
            'widget_locations' => $config['widget_locations'] ?? [],
        ];

        foreach($a['widgets'] as $handle => $_) {
            $this->addWidget($handle, $_);
        }

        foreach($a['widget_locations'] as $handle => $_) {
            $this->addWidgetLocation($handle, $_);
        }
    }

    /**
     * 
     */
    public
    function addWidget(string $widget): self
    {
        $wg = 'natokpe \\Ecjp\\Widgets\\' . $widget;

        if (class_exists($wg, true)) {
            $this->_widgets[$widget] = new $wg;
        }

        return $this;
    }

    /**
     * 
     */
    public
    function addWidgetLocation(string $widget_location, array $config = []): self
    {
        $wa       = [];
        $wa['id'] = $widget_location;

        foreach ($config as $k => $v) {
            switch ($k) {
                case 'id':
                case 'name':
                case 'description':
                case 'class':
                case 'before_widget':
                case 'after_widget':
                case 'before_title':
                case 'after_title':
                    $wa[$k] = is_scalar($v) ? (string) $v : '';
                    break;

                default:
                    break;
            }
        }

        if (! empty($wa['id']) && ! empty($wa['name'])) {
            $this->_widget_locations[$wa['id']] = $wa;
        }

        return $this;
    }

    /**
     * @return array loaded widgets 
     */
    public
    function loadWidgets(array $exclude = []): array
    {
        $loaded = [];

        add_action('widgets_init', function () use ($exclude, &$loaded)
        {
            foreach ($this->_widgets as $k => $widget) {
                if (! in_array($k, $exclude, true)) {
                    register_widget($widget);
                    $loaded[$k] = $widget;
                }
            }
        });

        return $loaded;
    }

    /**
     * 
     */
    public
    function loadWidgetLocations(array $exclude = []): array
    {
        $loaded = [];

        add_action('widgets_init', function () use (&$loaded)
        {
            foreach ($this->_widget_locations as $k => $wl) {
                if (isset($wl['id']) && isset($wl['name'])) {
                    register_sidebar($wl);
                    $loaded[$k] = $wl;
                }
            }
        });

        return $loaded;
    }

    /**
     * 
     */
    public
    function loadAll(array $exclude = []): array
    {
        return [
            'widgets'          => $this->loadWidgets($exclude),
            'widget_locations' => $this->loadWidgetLocations($exclude),
        ];
    }

    /**
     * 
     */
    public
    function getLoadedWidgets(): array
    {
        return $this->_widgets;
    }

    /**
     * 
     */
    public
    function getLoadedWidgetAreas(): array
    {
        return $this->_widget_locations;
    }
}

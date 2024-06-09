<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

declare(strict_types = 1);

namespace NatOkpe\Wp\Theme\Tranquil;

class Config
{
    /**
     * @var string
     */
    private
    $_text_domain = 'thewedding';

    /**
     * @var string
     */
    private
    $_locale = 'en_GB';

    /**
     * @var string
     */
    private
    $_lang_dir = 'lang';

    /**
     * @var int
     */
    private
    $_content_width = 800;

    /**
     * @var array
     */
    private
    $_theme_support = [];

    /**
     * @var array
     */
    private
    $_assets = [];

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
     * @var bool
     */
    private
    $_closed = false;

    /**
     * @var array
     */
    private
    $_image_sizes = [];

    /**
     * 
     */
    public
    function __construct(array $config = [])
    {
        $conf = [
            'assets'           => Theme::dirConfig('assets.php'),
            'theme'            => Theme::dirConfig('theme.php'),
            'widgets'          => Theme::dirConfig('widgets.php'),
            'widget_locations' => Theme::dirConfig('widget_locations.php'),
        ];

        foreach ($conf as $_ => $__) {
            $conf[$_] = file_exists($__) ? require($__) : [];

            switch ($_) {
                case 'assets':
                    $conf[$_] = is_array($conf[$_]) ? $conf[$_] : [];
                    $this->_assets = array_merge($this->_assets, $conf[$_]);
                    break;

                case 'theme':
                    $this->_image_sizes   = $conf[$_]['image_sizes'];
                    $this->_text_domain   = $conf[$_]['text_domain'];
                    $this->_content_width = $conf[$_]['content_width'];
                    $this->_locale   = $conf[$_]['locale'];
                    $this->_lang_dir      = $conf[$_]['lang_dir'];
                    $this->_theme_support = array_merge(
                        $this->_theme_support, $conf[$_]['theme_support']
                    );
                    break;

                case 'widgets':
                case 'widget_locations':
                    $conf[$_] = is_array($conf[$_]) ? $conf[$_] : [];
                    $this->{'_' . $_} = array_merge($this->{'_' . $_}, $conf[$_]);
                    break;
            }
        }

    }

    /**
     * 
     */
    public
    function config(array $config = [])
    {
    }

    /**
     * 
     */
    public
    function __set(string $name, $value = null)
    {
        if ($this->_closed) {
            trigger_error('Config can no longer be modified', E_USER_NOTICE);
        }

        switch ($name) {
            case "root":
                return get_stylesheet_directory();
                break;

            default:
                $trace = debug_backtrace();
                $msg   = 'Undefined property: '
                . $name . ' in '
                . $trace[0]['file']
                . ' on line ' . $trace[0]['line'];

                trigger_error($msg, E_USER_NOTICE);

                return null;
        }
    }

    /**
     * 
     */
    public
    function __get(string $name)
    {
        switch ($name) {
            case "root":
                return get_stylesheet_directory();
                break;

            default:
                if (isset($this->{'_' . $name})) {
                    return $this->{'_' . $name};
                }

                $trace = debug_backtrace();
                $msg   = 'Undefined property: '
                . $name . ' in '
                . $trace[0]['file']
                . ' on line ' . $trace[0]['line'];

                trigger_error($msg, E_USER_NOTICE);

                return null;
        }
    }

    /**
     * 
     */
    public
    function close(): self
    {
        $this->_closed = true;
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

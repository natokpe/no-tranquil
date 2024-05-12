<?php
declare(strict_types = 1);

namespace NatOkpe\Wp\Theme\Tranquil\Loaders;

use function \add_action;
use function \wp_enqueue_script;
use function \wp_enqueue_style;

/**
 * @author Nat Okpe <natokpe@incamax.com>
 */
class AssetLoader
{
    /**
     * @var array
     */
    private
    $_styles = [];

    /**
     * @var array
     */
    private
    $_scripts = [];

    /**
     * @var array
     */
    private
    $_loaded_styles = [];

    /**
     * @var array
     */
    private
    $_loaded_scripts = [];

    /**
     * 
     */
    public
    function __construct(array $assets = [])
    {
        $a = [
            'styles'  => $assets['styles'] ?? [],
            'scripts' => $assets['scripts'] ?? [],
        ];

        foreach($a['styles'] as $handle => $_) {
            $this->addStyle($handle, $_);
        }

        foreach($a['scripts'] as $handle => $_) {
            $this->addScript($handle, $_);
        }
    }

    /**
     * 
     */
    public
    function addStyle(string|int $handle, array $params = []): self
    {
        $this->_styles[(string) $handle] = [
            'src'    => (string) ($params['src'] ?? ''),
            'deps'   => (array) ($params['deps'] ?? []),
            'ver'    => $params['ver'] ?? false,
            'media'  => (string) ($params['media'] ?? 'all'),
        ];

        return $this;
    }

    /**
     * 
     */
    public
    function removeStyle(string|int $handle): self
    {
        unset($this->_styles[$handle]);
        return $this;
    }

    /**
     * 
     */
    public
    function addScript(string|int $handle, array $params = []): self
    {
        $this->_scripts[(string) $handle] = [
            'src'    => (string) ($params['src'] ?? ''),
            'deps'   => (array) ($params['deps'] ?? []),
            'ver'    => $params['ver'] ?? false,
            'footer' => (bool) ($params['footer'] ?? true),
        ];

        return $this;
    }

    /**
     * 
     */
    public
    function removeScript(string|int $handle): self
    {
        unset($this->_scripts[(string) $handle]);
        return $this;
    }

    /**
     * 
     */
    public
    function loadStyles(array $exclude = []): array
    {
        $loaded = [];

        add_action('wp_enqueue_scripts', function () use ($exclude) {
            foreach ($this->_styles as $handle => $_) {
                if (! in_array($handle, $exclude, true)) {
                    wp_enqueue_style(
                        $handle,
                        $_['src'],
                        $_['deps'],
                        $_['ver'],
                        $_['media']
                    );

                    $loaded[$handle] = $_;
                 }
            }
        });

        $this->_loaded_styles = array_merge($this->_loaded_styles, $loaded);

        return $loaded;
    }

    /**
     * 
     */
    public
    function loadScripts(array $exclude = []): array
    {
        $loaded = [];

        add_action('wp_enqueue_scripts', function () use ($exclude) {
            foreach ($this->_scripts as $handle => $_) {
                if (! in_array($handle, $exclude, true)) {
                    wp_enqueue_script(
                        $handle,
                        $_['src'],
                        $_['deps'],
                        $_['ver'],
                        $_['footer']
                    );

                    $loaded[$handle] = $_;
                 }
            }
        });

        $this->_loaded_scripts = array_merge($this->_loaded_scripts, $loaded);

        return $loaded;
    }

    /**
     * enqueues all styles and scripts
     * 
     * @return array loaded scripts
     */
    public
    function loadAll(array $exclude = []): array
    {
        return [
            'styles'  => $this->loadStyles($exclude),
            'scripts' => $this->loadScripts($exclude),
        ];
    }

    /**
     * dequeues all styles
     */
    public
    function unloadStyles(array $exclude = []): array
    {
        return [];
    }

    /**
     * dequeues all scripts
     */
    public
    function unloadScripts(array $exclude = []): array
    {
        return [];
    }

    /**
     * dequeues all styles and scripts
     */
    public
    function unloadAll(array $exclude = []): array
    {
        return [
            'styles'  => $this->unloadStyles($exclude),
            'scripts' => $this->unloadScripts($exclude),
        ];
    }

    /**
     * 
     */
    public
    function getList(bool $hide_loaded = false): array
    {
        return [];
    }

    /**
     * 
     */
    public
    function getLoaded(bool $hide_default = true): array
    {
        return [];
    }
}

<?php
declare(strict_types = 1);

/** Theme prefs */

use NatOkpe\Wp\Theme\Tranquil\Theme;

return [
    'text_domain'   => 'natokpe',
    'content_width' => 800,
    'locale'        => 'en_GB',
    'lang_dir'      => Theme::dir('lang'),

    'theme_support' => [
        'title-tag'                           => null,
        'automatic-feed-links'                => null,
        'post-thumbnails'                     => ['page', 'post'],
        'post-formats'                        => [
            'aside',
            'gallery',
            'link',
            'image',
            'quote',
            'status',
            'video',
            'audio',
            'chat'
        ],

        'html5'                               => [
            'comment-list',
            'comment-form',
            'search-form',
            'gallery',
            'caption',
            // 'style',
            // 'script'
        ],

        'customize-selective-refresh-widgets' => null,

        'custom-logo'                         => [
            'height'               => 100,
            'width'                => 400,
            'flex-height'          => true,
            'flex-width'           => true,
            'header-text'          => ['site-title', 'site-description'],
            'unlink-homepage-logo' => true
        ],

        'align-wide'                          => null
    ],
];

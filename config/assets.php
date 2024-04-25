<?php
declare(strict_types = 1);

use NatOkpe\Wp\Theme\Ecjp\Theme;

$styles = [];
$scripts = [];

$styles['ecjp'] = [
    'src'   => Theme::url('style.css'),
    'deps'   => [],
    'ver'   => false,
    'media' => 'all'
];

$scripts['ecjp'] = [
    'src'    => Theme::url('script.js'),
    'deps'    => [],
    'ver'    => false,
    'footer' => true
];

if (is_singular() && comments_open() && get_option('thread_comments')) {
    $scripts['comment-reply'] = [];
}

return [
    'styles'  => $styles,
    'scripts' => $scripts,
];

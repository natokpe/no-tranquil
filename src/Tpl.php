<?php
declare(strict_types = 1);

namespace NatOkpe\Wp\Theme\Tranquil;

use Handlebars\Handlebars;
use Handlebars\Loader\FilesystemLoader;

class Tpl
{

    /**
     * 
     */
    public
    function __construct()
    {
    }

    /**
     * 
     */
    public static
    function load(string $tpl_name, array $tpl_data = []): string
    {
        $tpl_dir = dirname( __DIR__ ) . DIRECTORY_SEPARATOR . 'tpl';

        try {
            $tpl_partial_loader = new FilesystemLoader(
                // $tpl_dir . DIRECTORY_SEPARATOR . 'partials',
                $tpl_dir . DIRECTORY_SEPARATOR . 'templates',
                [
                    'extension' => 'php',
                ]
            );

            $tpl_template_loader = new FilesystemLoader(
                $tpl_dir . DIRECTORY_SEPARATOR . 'templates',
                [
                    'extension' => 'php',
                ]
            );

            $tpl = new Handlebars( [
                "loader"          => $tpl_template_loader,
                "partials_loader" => $tpl_partial_loader,
            ] );

            return $tpl->render( $tpl_name, $tpl_data );
        } catch (Exception $e) {
            return '';
        }
    }
}

<?php
declare(strict_types = 1);

namespace NatOkpe\Wp\Theme\Tranquil\Utils;

use \DateTime;
use \DateTimeZone;
use Spatie\CalendarLinks\Link;

/**
 * 
 */
class Clock
{
    /**
     * 
     */
    public static
    function now(string $tz = 'UTC'): float
    {
        $dt = new DateTime('now', new DateTimeZone($tz));
        return (float) $dt->getTimestamp();
    }

    /**
     * 
     */
    public static
    function nowYear(string $tz = 'UTC'): string
    {
        return (new DateTime('now', new DateTimeZone($tz)))->format('Y');
    }
}

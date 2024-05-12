<?php
declare(strict_types = 1);

namespace NatOkpe\Wp\Theme\Tranquil\Utils;

use \DateTime;
use \DateTimeZone;

use Spatie\CalendarLinks\Link;

/**
 * 
 */
class Calendar
{
    /**
     * @param $event array  Event details
     * @param $sys   string Calendar system. One of google|yahoo|outlook|office|ics  Default is ics
     */
    public static
    function event(string $name, array $event, string $sys = 'ics'): null|string
    {
        foreach (['from', 'to', 'description', 'address'] as $_) {
            switch ($_) {
                case 'from':
                case 'to':
                    if (! array_key_exists($_, $event)) {
                        return null;
                    }

                    if (! ($event[$_] instanceOf DateTime)) {
                        return null;
                    }
                    break;

                case 'description':
                case 'address':
                    if (array_key_exists($_, $event) && (! is_string($event[$_]))) {
                        return null;
                    }
                    break;
            }
        }

        $link = Link::create(
            $name,
            $event['from'],
            $event['to']
        );

        if (array_key_exists('description', $event)) {
            $link = $link->description($event['description']);
        }

        if (array_key_exists('address', $event)) {
            $link = $link->address($event['address']);
        }

        switch ($sys) {
            case 'google':
                return $link->google();
                break;

            case 'yahoo':
                return $link->yahoo();
                break;

            case 'outlook':
                return $link->webOutlook();
                break;

            case 'office':
                return $link->webOffice();
                break;

            case 'ics':
                return $link->ics();
                break;

            default:
                return null;
                break;
        }

        return '';
    }
}

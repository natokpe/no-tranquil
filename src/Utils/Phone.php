<?php
declare(strict_types = 1);

namespace NatOkpe\Wp\Theme\Ecjp\Utils;

use libphonenumber\PhoneNumberUtil;
use libphonenumber\PhoneNumberFormat;

/**
 * 
 */
class Phone
{
    /**
     * 
     */
    public static
    function format(string $phoneNumber, string $format = 'intl', string $region = 'NG'): string
    {
        $util = PhoneNumberUtil::getInstance();
        $num = $util->parse($phoneNumber, $region);

        switch ($format) {
            case 'e164':
            case 'E164':
                return $util->format($num, PhoneNumberFormat::E164);
                break;

            case 'intl':
            case 'international':
                return $util->format($num, PhoneNumberFormat::INTERNATIONAL);
                break;

            case 'nat':
            case 'national':
                return $util->format($num, PhoneNumberFormat::NATIONAL);
                break;

            case 'rfc':
            case 'RFC3966':
                return $util->format($num, PhoneNumberFormat::RFC3966);
                break;

            default:
                return $phoneNumber;
                break;
        }
    }
}

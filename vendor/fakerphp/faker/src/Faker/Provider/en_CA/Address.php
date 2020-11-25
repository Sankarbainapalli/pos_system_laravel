<?php

namespace Faker\Provider\en_CA;

/**
 * Extend US class since most fields share the same format
 */

class Address extends \Faker\Provider\en_US\Address
{
<<<<<<< HEAD
    protected static $postcode = ['?#? #?#', '?#?-#?#', '?#?#?#'];

    protected static $postcodeLetters = ['A','B','C','E','G','H','J','K','L','M','N','P','R','S','T','V','X','Y'];

    protected static $province = [
        'Alberta', 'British Columbia', 'Manitoba', 'New Brunswick', 'Newfoundland and Labrador', 'Northwest Territories', 'Nova Scotia', 'Nunavut', 'Ontario', 'Prince Edward Island', 'Quebec', 'Saskatchewan', 'Yukon Territory',
    ];

    protected static $provinceAbbr = [
        'AB', 'BC', 'MB', 'NB', 'NL', 'NT', 'NS', 'NU', 'ON', 'PE', 'QC', 'SK', 'YT'
    ];

    protected static $addressFormats = [
        "{{streetAddress}}\n{{city}}, {{provinceAbbr}}  {{postcode}}",
    ];
=======
    protected static $postcode = array('?#? #?#', '?#?-#?#', '?#?#?#');

    protected static $postcodeLetters = array('A','B','C','E','G','H','J','K','L','M','N','P','R','S','T','V','X','Y');

    protected static $province = array(
        'Alberta', 'British Columbia', 'Manitoba', 'New Brunswick', 'Newfoundland and Labrador', 'Northwest Territories', 'Nova Scotia', 'Nunavut', 'Ontario', 'Prince Edward Island', 'Quebec', 'Saskatchewan', 'Yukon Territory',
    );

    protected static $provinceAbbr = array(
        'AB', 'BC', 'MB', 'NB', 'NL', 'NT', 'NS', 'NU', 'ON', 'PE', 'QC', 'SK', 'YT'
    );

    protected static $addressFormats = array(
        "{{streetAddress}}\n{{city}}, {{provinceAbbr}}  {{postcode}}",
    );
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

    /**
     * @example 'Ontario'
     */
    public static function province()
    {
        return static::randomElement(static::$province);
    }

    /**
     * @example 'ON'
     */
    public static function provinceAbbr()
    {
        return static::randomElement(static::$provinceAbbr);
    }

    /**
     * Returns a postalcode-safe letter
     * @example A1B 2C3
     */
    public static function randomPostcodeLetter()
    {
        return static::randomElement(static::$postcodeLetters);
    }

    /**
     * @example A1B 2C3
     */
    public static function postcode()
    {
        $string = static::randomElement(static::$postcode);

        $string = preg_replace_callback('/\#/u', 'static::randomDigit', $string);
        $string = preg_replace_callback('/\?/u', 'static::randomPostcodeLetter', $string);

        return static::toUpper($string);
    }
}

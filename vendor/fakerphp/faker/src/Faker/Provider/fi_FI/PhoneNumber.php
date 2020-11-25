<?php

namespace Faker\Provider\fi_FI;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    /**
     * @link https://www.viestintavirasto.fi/en/internettelephone/numberingoftelecommunicationsnetworks/localcallsandtelecommunicationsareas/mapoftelecommunicationsareas.html
     * @var array
     */
<<<<<<< HEAD
    protected static $landLineareaCodes = [
=======
    protected static $landLineareaCodes = array(
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
        '02',
        '03',
        '05',
        '06',
        '08',
        '09',
        '013',
        '014',
        '015',
        '016',
        '017',
        '018',
        '019',
<<<<<<< HEAD
    ];
=======
    );
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

    /**
     * @link https://www.viestintavirasto.fi/en/internettelephone/numberingoftelecommunicationsnetworks/mobilenetworks/mobilenetworkareacodes.html
     * @var array
     */
<<<<<<< HEAD
    protected static $mobileNetworkAreaCodes = [
=======
    protected static $mobileNetworkAreaCodes = array(
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
        '040',
        '050',
        '044',
        '045',
<<<<<<< HEAD
    ];

    protected static $numberFormats = [
        '### ####',
        '#######',
    ];

    protected static $formats = [
=======
    );

    protected static $numberFormats = array(
        '### ####',
        '#######',
    );

    protected static $formats = array(
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
        '+358 ({{ e164MobileNetworkAreaCode }}) {{ numberFormat }}',
        '+358 {{ e164MobileNetworkAreaCode }} {{ numberFormat }}',
        '+358 ({{ e164landLineAreaCode }}) {{ numberFormat }}',
        '+358 {{ e164landLineAreaCode }} {{ numberFormat }}',
        '{{ mobileNetworkAreaCode }}{{ separator }}{{ numberFormat }}',
        '{{ landLineAreaCode }}{{ separator }}{{ numberFormat }}',
<<<<<<< HEAD
    ];
=======
    );
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

    /**
     * @return string
     */
    public function landLineAreaCode()
    {
        return static::randomElement(static::$landLineareaCodes);
    }

    /**
     * @return string
     */
    public function e164landLineAreaCode()
    {
        return substr(static::randomElement(static::$landLineareaCodes), 1);
    }

    /**
     * @return string
     */
    public function mobileNetworkAreaCode()
    {
        return static::randomElement(static::$mobileNetworkAreaCodes);
    }

    /**
     * @return string
     */
    public function e164MobileNetworkAreaCode()
    {
        return substr(static::randomElement(static::$mobileNetworkAreaCodes), 1);
    }

    /**
     * @return string
     */
    public function numberFormat()
    {
        return static::randomElement(static::$numberFormats);
    }

    /**
     * @return string
     */
    public function separator()
    {
<<<<<<< HEAD
        return static::randomElement([' ', '-']);
=======
        return static::randomElement(array(' ', '-'));
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
    }
}

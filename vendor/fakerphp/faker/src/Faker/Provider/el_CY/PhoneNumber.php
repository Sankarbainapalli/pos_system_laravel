<?php

namespace Faker\Provider\el_CY;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
<<<<<<< HEAD
    protected static $formats = [
=======
    protected static $formats = array(
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
        '+3572#######',
        '+3579#######',
        '2#######',
        '9#######',
<<<<<<< HEAD
    ];
=======
    );
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

    /**
     * An array of el_CY mobile (cell) phone number formats.
     *
     * @var array
     */
<<<<<<< HEAD
    protected static $mobileFormats = [
        '9#######',
    ];
=======
    protected static $mobileFormats = array(
        '9#######',
    );
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

    /**
     * Return a el_CY mobile phone number.
     *
     * @return string
     */
    public static function mobileNumber()
    {
        return static::numerify(static::randomElement(static::$mobileFormats));
    }
}

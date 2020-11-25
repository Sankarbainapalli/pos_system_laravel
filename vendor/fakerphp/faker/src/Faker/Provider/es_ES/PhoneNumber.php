<?php

namespace Faker\Provider\es_ES;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
<<<<<<< HEAD
    protected static $formats = [
=======
    protected static $formats = array(
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
        '+34 9## ## ####',
        '+34 9## ######',
        '+34 9########',
        '+34 9##-##-####',
        '+34 9##-######',
        '9## ## ####',
        '9## ######',
        '9########',
        '9##-##-####',
        '9##-######',
<<<<<<< HEAD
    ];

    protected static $mobileFormats = [
=======
    );

    protected static $mobileFormats = array(
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
        '+34 6## ## ####',
        '+34 6## ######',
        '+34 6########',
        '+34 6##-##-####',
        '+34 6##-######',
        '6## ## ####',
        '6## ######',
        '6########',
        '6##-##-####',
        '6##-######',
<<<<<<< HEAD
    ];

    protected static $tollFreeFormats = [
        '900 ### ###',
        '800 ### ###',
    ];
=======
    );

    protected static $tollFreeFormats = array(
        '900 ### ###',
        '800 ### ###',
    );
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

    public static function mobileNumber()
    {
        return static::numerify(static::randomElement(static::$mobileFormats));
    }

    public static function tollFreeNumber()
    {
        return static::numerify(static::randomElement(static::$tollFreeFormats));
    }
}

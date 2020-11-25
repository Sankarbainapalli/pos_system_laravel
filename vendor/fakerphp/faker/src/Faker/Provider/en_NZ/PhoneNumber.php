<?php

namespace Faker\Provider\en_NZ;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    /**
     * An array of en_NZ landline phone number formats
     * @var array
     */
<<<<<<< HEAD
    protected static $formats = [
        // National Calls
        '{{areaCode}}{{beginningNumber}}######',
        '{{areaCode}} {{beginningNumber}}## ####'
    ];
=======
    protected static $formats = array(
        // National Calls
        '{{areaCode}}{{beginningNumber}}######',
        '{{areaCode}} {{beginningNumber}}## ####'
    );
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

    /**
     * An array of en_NZ mobile (cell) phone number formats
     * @var array
     */
<<<<<<< HEAD
    protected static $mobileFormats = [
=======
    protected static $mobileFormats = array(
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
        // Local
        '02########',
        '02#########',
        '02# ### ####',
        '02# #### ####'
<<<<<<< HEAD
    ];
=======
    );
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

    /**
     * An array of toll free phone number formats
     * @var array
     */
<<<<<<< HEAD
    protected static $tollFreeFormats = [
=======
    protected static $tollFreeFormats = array(
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
        '0508######',
        '0508 ######',
        '0508 ### ###',
        '0800######',
        '0800 ######',
        '0800 ### ###',
<<<<<<< HEAD
    ];
=======
    );
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

    /**
     * An array of en_NZ landline area codes
     * @var array
     */
<<<<<<< HEAD
    protected static $areaCodes = [
        '02', '03', '04', '06', '07', '09'
    ];
=======
    protected static $areaCodes = array(
        '02', '03', '04', '06', '07', '09'
    );
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

    /**
     * An array of en_NZ landline beginning numbers
     * @var array
     */
<<<<<<< HEAD
    protected static $beginningNumbers = [
        '2', '3', '4', '5', '6', '7', '8', '9'
    ];
=======
    protected static $beginningNumbers = array(
        '2', '3', '4', '5', '6', '7', '8', '9'
    );
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

    /**
     * Return a en_NZ mobile phone number
     * @return string
     */
    public static function mobileNumber()
    {
        return static::numerify(static::randomElement(static::$mobileFormats));
    }

    /**
     * Return a en_NZ toll free phone number
     * @return string
     */
    public static function tollFreeNumber()
    {
        return static::numerify(static::randomElement(static::$tollFreeFormats));
    }

    /**
     * Return a en_NZ landline area code
     * @return string
     */
    public static function areaCode()
    {
        return static::numerify(static::randomElement(static::$areaCodes));
    }

    /**
     * Return a en_NZ landline beginning number
     * @return string
     */
    public static function beginningNumber()
    {
        return static::numerify(static::randomElement(static::$beginningNumbers));
    }
}

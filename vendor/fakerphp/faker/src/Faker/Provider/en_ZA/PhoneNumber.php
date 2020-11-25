<?php

namespace Faker\Provider\en_ZA;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
<<<<<<< HEAD
    protected static $formats = [
=======
    protected static $formats = array(
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
        '+27({{areaCode}})#######',
        '+27{{areaCode}}#######',
        '0{{areaCode}}#######',
        '0{{areaCode}} ### ####',
        '0{{areaCode}}-###-####',
<<<<<<< HEAD
    ];

    protected static $cellphoneFormats = [
=======
    );

    protected static $cellphoneFormats = array(
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
        '+27{{cellphoneCode}}#######',
        '0{{cellphoneCode}}#######',
        '0{{cellphoneCode}} ### ####',
        '0{{cellphoneCode}}-###-####',
<<<<<<< HEAD
    ];

    protected static $specialFormats = [
=======
    );

    protected static $specialFormats = array(
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
        '{{specialCode}}#######',
        '{{specialCode}} ### ####',
        '{{specialCode}}-###-####',
        '({{specialCode}})###-####',
<<<<<<< HEAD
    ];

    protected static $tollFreeAreaCodes = [
        '0800', '0860', '0861', '0862',
    ];
=======
    );

    protected static $tollFreeAreaCodes = array(
        '0800', '0860', '0861', '0862',
    );
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

    /**
     * @see https://en.wikipedia.org/wiki/Telephone_numbers_in_South_Africa
     */
    public static function areaCode()
    {
        $digits[] = self::numberBetween(1, 5);
        switch ($digits[0]) {
            case 1:
                $digits[] = self::numberBetween(1, 8);
                break;
            case 2:
                $number = self::numberBetween(1, 8);
<<<<<<< HEAD
                $digits[] = in_array($number, [5, 6]) ? $number + 2 : $number;
                break;
            case 3:
                $number = self::numberBetween(1, 8);
                $digits[] = in_array($number, [7, 8]) ? $number - 2 : $number;
=======
                $digits[] = in_array($number, array(5, 6)) ? $number + 2 : $number;
                break;
            case 3:
                $number = self::numberBetween(1, 8);
                $digits[] = in_array($number, array(7, 8)) ? $number - 2 : $number;
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
                break;
            case 4:
                $digits[] = self::numberBetween(1, 9);
                break;
            case 5:
                $number = self::numberBetween(1, 8);
<<<<<<< HEAD
                $digits[] = in_array($number, [2, 5]) ? $number + 2 : $number;
=======
                $digits[] = in_array($number, array(2, 5)) ? $number + 2 : $number;
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
                break;
        }

        return implode('', $digits);
    }

    public static function cellphoneCode()
    {
        $digits[] = self::numberBetween(6, 8);
        switch ($digits[0]) {
            case 6:
                $digits[] = self::numberBetween(0, 2);
                break;
            case 7:
                $number = self::numberBetween(1, 9);
<<<<<<< HEAD
                $digits[] = in_array($number, [5, 7]) ? $number + 1 : $number;
=======
                $digits[] = in_array($number, array(5, 7)) ? $number + 1 : $number;
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
                break;
            case 8:
                $digits[] = self::numberBetween(1, 9);
                break;
        }

        return implode('', $digits);
    }

    public static function specialCode()
    {
        return static::randomElement(static::$tollFreeAreaCodes);
    }

    public function mobileNumber()
    {
        $format = static::randomElement(static::$cellphoneFormats);

        return self::numerify($this->generator->parse($format));
    }

    public function tollFreeNumber()
    {
        $format = static::randomElement(static::$specialFormats);

        return self::numerify($this->generator->parse($format));
    }
}

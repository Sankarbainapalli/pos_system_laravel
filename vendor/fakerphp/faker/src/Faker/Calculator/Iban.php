<?php

namespace Faker\Calculator;

class Iban
{
    /**
     * Generates IBAN Checksum
     *
     * @param string $iban
     * @return string Checksum (numeric string)
     */
    public static function checksum($iban)
    {
        // Move first four digits to end and set checksum to '00'
        $checkString = substr($iban, 4) . substr($iban, 0, 2) . '00';

        // Replace all letters with their number equivalents
<<<<<<< HEAD
        $checkString = preg_replace_callback('/[A-Z]/', ['self','alphaToNumberCallback'], $checkString);
=======
        $checkString = preg_replace_callback('/[A-Z]/', array('self','alphaToNumberCallback'), $checkString);
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

        // Perform mod 97 and subtract from 98
        $checksum = 98 - self::mod97($checkString);

        return str_pad($checksum, 2, '0', STR_PAD_LEFT);
    }

    /**
     * @param string $match
     *
     * @return int
     */
    private static function alphaToNumberCallback($match)
    {
        return self::alphaToNumber($match[0]);
    }

    /**
     * Converts letter to number
     *
     * @param string $char
     * @return int
     */
    public static function alphaToNumber($char)
    {
        return ord($char) - 55;
    }

    /**
     * Calculates mod97 on a numeric string
     *
     * @param string $number Numeric string
     * @return int
     */
    public static function mod97($number)
    {
<<<<<<< HEAD
        $checksum = (int) $number[0];
=======
        $checksum = (int)$number[0];
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
        for ($i = 1, $size = strlen($number); $i < $size; $i++) {
            $checksum = (10 * $checksum + (int) $number[$i]) % 97;
        }
        return $checksum;
    }

    /**
     * Checks whether an IBAN has a valid checksum
     *
     * @param string $iban
<<<<<<< HEAD
     * @return bool
=======
     * @return boolean
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
     */
    public static function isValid($iban)
    {
        return self::checksum($iban) === substr($iban, 2, 2);
    }
}

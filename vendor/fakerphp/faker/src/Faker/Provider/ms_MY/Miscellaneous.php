<?php

namespace Faker\Provider\ms_MY;

class Miscellaneous extends \Faker\Provider\Miscellaneous
{
    /**
     * @link https://en.wikipedia.org/wiki/Vehicle_registration_plates_of_Malaysia
     */
<<<<<<< HEAD
    protected static $jpjNumberPlateFormats = [
=======
    protected static $jpjNumberPlateFormats = array(
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
        '{{peninsularPrefix}}{{validAlphabet}}{{validAlphabet}} {{numberSequence}}',
        '{{peninsularPrefix}}{{validAlphabet}}{{validAlphabet}} {{numberSequence}}',
        '{{peninsularPrefix}}{{validAlphabet}}{{validAlphabet}} {{numberSequence}}',
        '{{peninsularPrefix}}{{validAlphabet}}{{validAlphabet}} {{numberSequence}}',
        'W{{validAlphabet}}{{validAlphabet}} {{numberSequence}} {{validAlphabet}}',
        'KV {{numberSequence}} {{validAlphabet}}',
        '{{sarawakPrefix}} {{numberSequence}} {{validAlphabet}}',
        '{{sabahPrefix}} {{numberSequence}} {{validAlphabet}}',
        '{{specialPrefix}} {{numberSequence}}',
<<<<<<< HEAD
    ];
=======
    );
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

    /**
     * Some alphabet has higher frequency that coincides with the current number
     * of registrations. E.g. W = Wilayah Persekutuan
     *
     * @link https://en.wikipedia.org/wiki/Vehicle_registration_plates_of_Malaysia#Current_format
     */
<<<<<<< HEAD
    protected static $peninsularPrefix = [
        'A','A','B','C','D','F','J','J','K','M','N','P','P','R','T','V',
        'W','W','W','W','W','W',
    ];
=======
    protected static $peninsularPrefix = array(
        'A','A','B','C','D','F','J','J','K','M','N','P','P','R','T','V',
        'W','W','W','W','W','W',
    );
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

    /**
     * @link https://en.wikipedia.org/wiki/Vehicle_registration_plates_of_Malaysia#Current_format_2
     */
<<<<<<< HEAD
    protected static $sarawakPrefix = [
        'QA','QK','QB','QC','QL','QM','QP','QR','QS','QT'
    ];
=======
    protected static $sarawakPrefix = array(
        'QA','QK','QB','QC','QL','QM','QP','QR','QS','QT'
    );
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

    /**
     * @link https://en.wikipedia.org/wiki/Vehicle_registration_plates_of_Malaysia#Current_format_3
     */
<<<<<<< HEAD
    protected static $sabahPrefix = [
        'SA','SAA','SAB','SAC','SB','SD','SG',
        'SK','SL','SS','SSA','ST','STA','SU'
    ];
=======
    protected static $sabahPrefix = array(
        'SA','SAA','SAB','SAC','SB','SD','SG',
        'SK','SL','SS','SSA','ST','STA','SU'
    );
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

    /**
     * @link https://en.wikipedia.org/wiki/Vehicle_registration_plates_of_Malaysia#Commemorative_plates
     */
<<<<<<< HEAD
    protected static $specialPrefix = [
=======
    protected static $specialPrefix = array(
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
        '1M4U',
        'A1M',
        'BAMbee',
        'Chancellor',
        'G','G1M','GP','GT',
        'Jaguh',
        'K1M','KRISS',
        'LOTUS',
        'NAAM','NAZA','NBOS',
        'PATRIOT','Perdana','PERFECT','Perodua','Persona','Proton','Putra','PUTRAJAYA',
        'RIMAU',
        'SAM','SAS','Satria','SMS','SUKOM',
        'T1M','Tiara','TTB',
        'U','US',
        'VIP',
        'WAJA',
        'XIIINAM','XOIC','XXVIASEAN','XXXIDB',
        'Y'
<<<<<<< HEAD
    ];
=======
    );
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

    /**
     * Chances of having an empty alphabet will be 1/24
     *
     * @link https://en.wikipedia.org/wiki/Vehicle_registration_plates_of_Malaysia#Current_format
     */
<<<<<<< HEAD
    protected static $validAlphabets = [
=======
    protected static $validAlphabets = array(
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
        'A','B','C','D','E','F',
        'G','H','J','K','L','M',
        'N','P','Q','R','S','T',
        'U','V','W','X','Y',''
<<<<<<< HEAD
    ];
=======
    );
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

    /**
     * Return a valid Malaysia JPJ(Road Transport Department) vehicle licence plate number
     *
     * @example 'WKN 2368'
     *
<<<<<<< HEAD
     * @return string
=======
     * @return @string
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
     */
    public function jpjNumberPlate()
    {
        $formats = static::toUpper(static::lexify(static::bothify(static::randomElement(static::$jpjNumberPlateFormats))));

        return $this->generator->parse($formats);
    }

    /**
     * Return Peninsular prefix alphabet
     *
     * @example 'W'
     *
<<<<<<< HEAD
     * @return string
=======
     * @return @string
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
     */
    public static function peninsularPrefix()
    {
        return static::randomElement(static::$peninsularPrefix);
    }

    /**
     * Return Sarawak state prefix alphabet
     *
     * @example 'QA'
     *
<<<<<<< HEAD
     * @return string
=======
     * @return @string
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
     */
    public static function sarawakPrefix()
    {
        return static::randomElement(static::$sarawakPrefix);
    }

    /**
     * Return Sabah state prefix alphabet
     *
     * @example 'SA'
     *
<<<<<<< HEAD
     * @return string
=======
     * @return @string
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
     */
    public static function sabahPrefix()
    {
        return static::randomElement(static::$sabahPrefix);
    }

    /**
     * Return specialty licence plate prefix
     *
     * @example 'G1M'
     *
<<<<<<< HEAD
     * @return string
=======
     * @return @string
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
     */
    public static function specialPrefix()
    {
        return static::randomElement(static::$specialPrefix);
    }

    /**
     * Return a valid license plate alphabet
     *
     * @example 'A'
     *
<<<<<<< HEAD
     * @return string
=======
     * @return @string
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
     */
    public static function validAlphabet()
    {
        return static::randomElement(static::$validAlphabets);
    }

    /**
     * Return a valid number sequence between 1 and 9999
     *
     * @example '1234'
     *
<<<<<<< HEAD
     * @return int
=======
     * @return @integer
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
     */
    public static function numberSequence()
    {
        return mt_rand(1, 9999);
    }
}

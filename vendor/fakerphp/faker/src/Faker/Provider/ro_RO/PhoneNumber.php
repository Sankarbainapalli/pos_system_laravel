<?php

namespace Faker\Provider\ro_RO;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
<<<<<<< HEAD
    protected static $normalFormats = [
        'landline' => [
=======
    protected static $normalFormats = array(
        'landline' => array(
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
            '021#######', // Bucharest
            '023#######',
            '024#######',
            '025#######',
            '026#######',
            '027#######', // non-geographic
            '031#######', // Bucharest
            '033#######',
            '034#######',
            '035#######',
            '036#######',
            '037#######', // non-geographic
<<<<<<< HEAD
        ],
        'mobile' => [
            '07########',
        ]
    ];

    protected static $specialFormats = [
        'toll-free' => [
=======
        ),
        'mobile' => array(
            '07########',
        )
    );

    protected static $specialFormats = array(
        'toll-free' => array(
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
            '0800######',
            '0801######', // shared-cost numbers
            '0802######', // personal numbering
            '0806######', // virtual cards
            '0807######', // pre-paid cards
            '0870######', // internet dial-up
<<<<<<< HEAD
        ],
        'premium-rate' => [
            '0900######',
            '0903######', // financial information
            '0906######', // adult entertainment
        ]
    ];
=======
        ),
        'premium-rate' => array(
            '0900######',
            '0903######', // financial information
            '0906######', // adult entertainment
        )
    );
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

    /**
     * @link http://en.wikipedia.org/wiki/Telephone_numbers_in_Romania#Last_years
     */
    public function phoneNumber()
    {
        $type = static::randomElement(array_keys(static::$normalFormats));

        return static::numerify(static::randomElement(static::$normalFormats[$type]));
    }

    public static function tollFreePhoneNumber()
    {
<<<<<<< HEAD
        return static::numerify(static::randomElement(static::$specialFormats['toll-free']));
=======
        $number = static::numerify(static::randomElement(static::$specialFormats['toll-free']));

        return $number;
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
    }

    public static function premiumRatePhoneNumber()
    {
<<<<<<< HEAD
        return static::numerify(static::randomElement(static::$specialFormats['premium-rate']));
=======
        $number = static::numerify(static::randomElement(static::$specialFormats['premium-rate']));

        return $number;
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
    }
}

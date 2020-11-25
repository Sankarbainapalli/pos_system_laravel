<?php

namespace Faker\Provider\nb_NO;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    /**
<<<<<<< HEAD
     * @var array Norwegian phone number formats
     */
    protected static $formats = [
=======
    * @var array Norwegian phone number formats
    */
    protected static $formats = array(
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
        '+47#########',
        '+47 ## ## ## ##',
        '## ## ## ##',
        '## ## ## ##',
        '########',
        '########',
        '9## ## ###',
        '4## ## ###',
        '9#######',
        '4#######',
<<<<<<< HEAD
    ];
=======
    );
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

    /**
     * @var array Norweign mobile number formats
     */
<<<<<<< HEAD
    protected static $mobileFormats = [
=======
    protected static $mobileFormats = array(
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
        '+474#######',
        '+479#######',
        '9## ## ###',
        '4## ## ###',
        '9#######',
        '4#######',
<<<<<<< HEAD
    ];
=======
    );
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

    public function mobileNumber()
    {
        $format = static::randomElement(static::$mobileFormats);

        return self::numerify($this->generator->parse($format));
    }
}

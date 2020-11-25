<?php

namespace Faker\Provider\bn_BD;

class Company extends \Faker\Provider\Company
{
<<<<<<< HEAD
    protected static $formats = [
        '{{companyName}} {{companyType}}'
    ];

    protected static $names = [
        'রহিম', 'করিম', 'বাবলু'
    ];

    protected static $types = [
        'সিমেন্ট', 'সার', 'ঢেউটিন'
    ];
=======
    protected static $formats = array(
        '{{companyName}} {{companyType}}'
    );

    protected static $names = array(
        'রহিম', 'করিম', 'বাবলু'
    );

    protected static $types = array(
        'সিমেন্ট', 'সার', 'ঢেউটিন'
    );
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

    public static function companyType()
    {
        return static::randomElement(static::$types);
    }

    public static function companyName()
    {
        return static::randomElement(static::$names);
    }
}

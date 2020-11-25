<?php

namespace Faker\Provider\ja_JP;

class Company extends \Faker\Provider\Company
{
<<<<<<< HEAD
    protected static $formats = [
        '{{companyPrefix}} {{lastName}}'
    ];

    protected static $companyPrefix = ['株式会社', '有限会社'];
=======
    protected static $formats = array(
        '{{companyPrefix}} {{lastName}}'
    );

    protected static $companyPrefix = array('株式会社', '有限会社');
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

    public static function companyPrefix()
    {
        return static::randomElement(static::$companyPrefix);
    }
}

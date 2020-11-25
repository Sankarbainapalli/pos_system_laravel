<?php

namespace Faker\Provider\id_ID;

class Company extends \Faker\Provider\Company
{
<<<<<<< HEAD
    protected static $formats = [
=======
    protected static $formats = array(
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
        '{{companyPrefix}} {{lastName}}',
        '{{companyPrefix}} {{lastName}} {{lastName}}',
        '{{companyPrefix}} {{lastName}} {{companySuffix}}',
        '{{companyPrefix}} {{lastName}} {{lastName}} {{companySuffix}}',
<<<<<<< HEAD
    ];
=======
    );
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

    /**
     * @link http://id.wikipedia.org/wiki/Jenis_badan_usaha
     */
<<<<<<< HEAD
    protected static $companyPrefix = ['PT', 'CV', 'UD', 'PD', 'Perum'];
=======
    protected static $companyPrefix = array('PT', 'CV', 'UD', 'PD', 'Perum');
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

    /**
     * @link http://id.wikipedia.org/wiki/Jenis_badan_usaha
     */
<<<<<<< HEAD
    protected static $companySuffix = ['(Persero) Tbk', 'Tbk'];
=======
    protected static $companySuffix = array('(Persero) Tbk', 'Tbk');
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

    /**
     * Get company prefix
     *
     * @return string company prefix
     */
    public static function companyPrefix()
    {
        return static::randomElement(static::$companyPrefix);
    }

    /**
     * Get company suffix
     *
     * @return string company suffix
     */
    public static function companySuffix()
    {
        return static::randomElement(static::$companySuffix);
    }
}

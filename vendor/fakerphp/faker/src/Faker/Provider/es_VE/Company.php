<?php

namespace Faker\Provider\es_VE;

class Company extends \Faker\Provider\Company
{
<<<<<<< HEAD
    protected static $formats = [
=======
    protected static $formats = array(
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
        '{{companyPrefix}} {{lastName}} {{companySuffix}}',
        '{{companyPrefix}} {{lastName}}',
        '{{companyPrefix}} {{lastName}} y {{lastName}}',
        '{{lastName}} y {{lastName}} {{companySuffix}}',
        '{{lastName}} de {{lastName}} {{companySuffix}}',
        '{{lastName}} y {{lastName}}',
        '{{lastName}} de {{lastName}}'
<<<<<<< HEAD
    ];

    protected static $companyPrefix = [
        'Asociación', 'Centro', 'Corporación', 'Cooperativa', 'Empresa', 'Gestora', 'Global', 'Grupo', 'Viajes',
        'Inversiones', 'Lic.', 'Dr.'
    ];
    protected static $companySuffix = ['S.R.L.', 'C.A.', 'S.A.', 'R.L.', 'etc'];
=======
    );

    protected static $companyPrefix = array(
        'Asociación', 'Centro', 'Corporación', 'Cooperativa', 'Empresa', 'Gestora', 'Global', 'Grupo', 'Viajes',
        'Inversiones', 'Lic.', 'Dr.'
    );
    protected static $companySuffix = array('S.R.L.', 'C.A.', 'S.A.', 'R.L.', 'etc');
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

    /**
     * @example 'Grupo'
     */
    public static function companyPrefix()
    {
        return static::randomElement(static::$companyPrefix);
    }

    /**
     * Generate random Taxpayer Identification Number (RIF in Venezuela). Ex J-123456789-1
     * @param string $separator
     * @return string
     */
    public function taxpayerIdentificationNumber($separator = '')
    {
<<<<<<< HEAD
        return static::randomElement(['J', 'G', 'V', 'E', 'P', 'C']) . $separator . static::numerify('########') . $separator . static::numerify('#');
=======
        return static::randomElement(array('J', 'G', 'V', 'E', 'P', 'C')) . $separator . static::numerify('########') . $separator . static::numerify('#');
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
    }
}

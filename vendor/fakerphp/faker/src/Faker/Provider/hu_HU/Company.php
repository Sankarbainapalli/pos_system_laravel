<?php

namespace Faker\Provider\hu_HU;

class Company extends \Faker\Provider\Company
{
<<<<<<< HEAD
    protected static $formats = [
        '{{lastName}} {{companySuffix}}',
        '{{lastName}}',
    ];

    protected static $companySuffix = ['Kft', 'és Tsa', 'Kht', 'ZRT', 'NyRT', 'BT'];
=======
    protected static $formats = array(
        '{{lastName}} {{companySuffix}}',
        '{{lastName}}',
    );

    protected static $companySuffix = array('Kft', 'és Tsa', 'Kht', 'ZRT', 'NyRT', 'BT');
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
}

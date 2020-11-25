<?php

namespace Faker\Provider\it_CH;

class Company extends \Faker\Provider\Company
{
<<<<<<< HEAD
    protected static $formats = [
=======
    protected static $formats = array(
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{lastName}} {{companySuffix}}',
        '{{lastName}}',
        '{{lastName}}',
<<<<<<< HEAD
    ];

    protected static $companySuffix = ['SA', 'Sarl'];
=======
    );

    protected static $companySuffix = array('SA', 'Sarl');
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
}

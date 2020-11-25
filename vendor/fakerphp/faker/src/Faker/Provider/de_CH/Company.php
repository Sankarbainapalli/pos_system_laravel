<?php

namespace Faker\Provider\de_CH;

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

    protected static $companySuffix = ['AG', 'GmbH'];
=======
    );

    protected static $companySuffix = array('AG', 'GmbH');
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
}

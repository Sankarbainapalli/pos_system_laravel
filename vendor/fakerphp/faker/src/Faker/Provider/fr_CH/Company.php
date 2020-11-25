<?php

namespace Faker\Provider\fr_CH;

class Company extends \Faker\Provider\fr_FR\Company
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

    protected static $companySuffix = ['AG', 'Sàrl', 'SA', 'GmbH'];
=======
    );

    protected static $companySuffix = array('AG', 'Sàrl', 'SA', 'GmbH');
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
}

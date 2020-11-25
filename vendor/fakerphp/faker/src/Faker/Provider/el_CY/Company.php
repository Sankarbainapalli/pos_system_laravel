<?php

namespace Faker\Provider\el_CY;

class Company extends \Faker\Provider\Company
{
<<<<<<< HEAD
    protected static $companySuffix = [
=======
    protected static $companySuffix = array(
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
        'ΛΤΔ',
        'Δημόσια εταιρεία',
        '& Υιοι',
        '& ΣΙΑ',
<<<<<<< HEAD
    ];

    protected static $formats = [
        '{{lastName}} {{companySuffix}}',
        '{{lastName}}-{{lastName}}',
    ];
=======
    );

    protected static $formats = array(
        '{{lastName}} {{companySuffix}}',
        '{{lastName}}-{{lastName}}',
    );
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
}

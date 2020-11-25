<?php

namespace Faker\Provider\pt_PT;

class Company extends \Faker\Provider\Company
{
<<<<<<< HEAD
    protected static $formats = [
=======
    protected static $formats = array(
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{lastName}}',
        '{{lastName}} e {{lastName}}',
        '{{lastName}} {{lastName}} {{companySuffix}}',
        'Grupo {{lastName}} {{companySuffix}}'
<<<<<<< HEAD
    ];

    protected static $companySuffix = ['e Filhos', 'e Associados', 'Lda.', 'S.A.'];
=======
    );

    protected static $companySuffix = array('e Filhos', 'e Associados', 'Lda.', 'S.A.');
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
}

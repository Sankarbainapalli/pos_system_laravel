<?php

namespace Faker\Provider\lt_LT;

class Company extends \Faker\Provider\Company
{
<<<<<<< HEAD
    protected static $formats = [
=======
    protected static $formats = array(
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
        '{{companySuffix}} {{lastNameMale}}',
        '{{companySuffix}} {{lastNameMale}} ir {{lastNameMale}}',
        '{{companySuffix}} "{{lastNameMale}} ir {{lastNameMale}}"',
        '{{companySuffix}} "{{lastNameMale}}"',
<<<<<<< HEAD
    ];

    protected static $companySuffix = ['UAB', 'AB', 'IĮ', 'MB', 'VŠĮ'];
=======
    );

    protected static $companySuffix = array('UAB', 'AB', 'IĮ', 'MB', 'VŠĮ');
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
}

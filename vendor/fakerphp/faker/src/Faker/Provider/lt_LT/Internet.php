<?php

namespace Faker\Provider\lt_LT;

class Internet extends \Faker\Provider\Internet
{
<<<<<<< HEAD
    protected static $userNameFormats = [
=======
    protected static $userNameFormats = array(
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
        '{{lastNameMale}}.{{firstNameMale}}',
        '{{lastNameFemale}}.{{firstNameFemale}}',
        '{{firstNameMale}}##',
        '{{firstNameFemale}}##',
        '?{{lastNameFemale}}',
        '?{{lastNameMale}}',
<<<<<<< HEAD
    ];

    protected static $freeEmailDomain = ['gmail.com', 'yahoo.com', 'hotmail.com'];
    protected static $tld = ['com', 'com', 'net', 'org', 'lt', 'lt', 'lt', 'lt', 'lt'];
=======
    );

    protected static $freeEmailDomain = array('gmail.com', 'yahoo.com', 'hotmail.com');
    protected static $tld = array('com', 'com', 'net', 'org', 'lt', 'lt', 'lt', 'lt', 'lt');
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
}

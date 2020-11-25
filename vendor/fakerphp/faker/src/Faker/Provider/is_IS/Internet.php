<?php

namespace Faker\Provider\is_IS;

/**
 * @author Birkir Gudjonsson <birkir.gudjonsson@gmail.com>
 */
class Internet extends \Faker\Provider\Internet
{
    /**
     * @var array Some email domains in Denmark.
     */
<<<<<<< HEAD
    protected static $freeEmailDomain = [
        'gmail.com', 'yahoo.com', 'hotmail.com', 'visir.is', 'simnet.is', 'internet.is'
    ];
=======
    protected static $freeEmailDomain = array(
        'gmail.com', 'yahoo.com', 'hotmail.com', 'visir.is', 'simnet.is', 'internet.is'
    );
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

    /**
     * @var array Some TLD.
     */
<<<<<<< HEAD
    protected static $tld = [
        'com', 'com', 'com', 'net', 'is', 'is', 'is',
    ];
=======
    protected static $tld = array(
        'com', 'com', 'com', 'net', 'is', 'is', 'is',
    );
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
}

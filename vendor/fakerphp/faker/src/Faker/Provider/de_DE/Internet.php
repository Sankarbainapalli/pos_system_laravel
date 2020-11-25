<?php

namespace Faker\Provider\de_DE;

class Internet extends \Faker\Provider\Internet
{
    /**
     * @link https://www.statista.com/statistics/446418/most-popular-e-mail-providers-germany/
     * @link http://blog.shuttlecloud.com/the-10-most-popular-email-providers-in-germany
     */
<<<<<<< HEAD
    protected static $freeEmailDomain = [
=======
    protected static $freeEmailDomain = array(
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
        'web.de',
        'gmail.com',
        'hotmail.de',
        'yahoo.de',
        'googlemail.com',
        'aol.de',
        'gmx.de',
        'freenet.de',
        'posteo.de',
        'mail.de',
        'live.de',
        't-online.de'
<<<<<<< HEAD
    ];
    protected static $tld = ['com', 'com', 'com', 'net', 'org', 'de', 'de', 'de'];
=======
    );
    protected static $tld = array('com', 'com', 'com', 'net', 'org', 'de', 'de', 'de');
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
}

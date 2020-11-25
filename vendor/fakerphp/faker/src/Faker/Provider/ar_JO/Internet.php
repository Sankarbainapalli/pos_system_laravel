<?php

namespace Faker\Provider\ar_JO;

class Internet extends \Faker\Provider\Internet
{
<<<<<<< HEAD
    protected static $userNameFormats = [
=======
    protected static $userNameFormats = array(
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
        '{{lastNameAscii}}.{{firstNameAscii}}',
        '{{firstNameAscii}}.{{lastNameAscii}}',
        '{{firstNameAscii}}##',
        '?{{lastNameAscii}}',
<<<<<<< HEAD
    ];
    protected static $safeEmailTld = [
        'com', 'jo', 'me', 'net', 'org',
    ];

    protected static $tld = [
        'biz', 'com', 'info', 'jo', 'net', 'org',
    ];

    protected static $lastNameAscii = [
        'abbad', 'abbadi', 'abbas', 'abulebbeh', 'flefel', 'hadi', 'hamad', 'hasan', 'jabri', 'kanaan', 'karam', 'maanee', 'melhem', 'nimry', 'obaisi', 'qasem', 'qawasmee', 'rabee', 'rashwani', 'shami', 'zaloum',
    ];
    protected static $firstNameAscii = [
        'abd', 'abdullah', 'ahmad', 'akram', 'amr', 'bashar', 'bilal', 'fadi', 'ibrahim', 'khaled', 'layth', 'mohammad', 'mutaz', 'omar', 'osama', 'rami', 'saleem', 'samer', 'sami', 'yazan',
    ];
=======
    );
    protected static $safeEmailTld = array(
        'com', 'jo', 'me', 'net', 'org',
    );

    protected static $tld = array(
        'biz', 'com', 'info', 'jo', 'net', 'org',
    );

    protected static $lastNameAscii = array(
        'abbad', 'abbadi', 'abbas', 'abulebbeh', 'flefel', 'hadi', 'hamad', 'hasan', 'jabri', 'kanaan', 'karam', 'maanee', 'melhem', 'nimry', 'obaisi', 'qasem', 'qawasmee', 'rabee', 'rashwani', 'shami', 'zaloum',
    );
    protected static $firstNameAscii = array(
        'abd', 'abdullah', 'ahmad', 'akram', 'amr', 'bashar', 'bilal', 'fadi', 'ibrahim', 'khaled', 'layth', 'mohammad', 'mutaz', 'omar', 'osama', 'rami', 'saleem', 'samer', 'sami', 'yazan',
    );
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

    public static function lastNameAscii()
    {
        return static::randomElement(static::$lastNameAscii);
    }

    public static function firstNameAscii()
    {
        return static::randomElement(static::$firstNameAscii);
    }

    /**
     * @example 'ahmad.abbadi'
     */
    public function userName()
    {
        $format = static::randomElement(static::$userNameFormats);

        return static::bothify($this->generator->parse($format));
    }

    /**
     * @example 'wewebit.jo'
     */
    public function domainName()
    {
        return static::randomElement(static::$lastNameAscii) . '.' . $this->tld();
    }
}

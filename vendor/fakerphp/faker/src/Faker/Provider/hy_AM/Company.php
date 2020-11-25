<?php

namespace Faker\Provider\hy_AM;

class Company extends \Faker\Provider\Company
{
<<<<<<< HEAD
    protected static $formats = [
=======
    protected static $formats = array(
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} եղբայրներ',
<<<<<<< HEAD
    ];

    protected static $catchPhraseWords = [

    ];

    protected static $bsWords = [

    ];

    protected static $companySuffix = ['ՍՊԸ','և որդիներ','ՓԲԸ','ԲԲԸ'];
=======
    );

    protected static $catchPhraseWords = array(

    );

    protected static $bsWords = array(

    );

    protected static $companySuffix = array('ՍՊԸ','և որդիներ','ՓԲԸ','ԲԲԸ');
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

    /**
     * @example 'Robust full-range hub'
     */
    public function catchPhrase()
    {
<<<<<<< HEAD
        $result = [];
=======
        $result = array();
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
        foreach (static::$catchPhraseWords as &$word) {
            $result[] = static::randomElement($word);
        }

<<<<<<< HEAD
        return implode(' ', $result);
=======
        return join(' ', $result);
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
    }

    /**
     * @example 'integrate extensible convergence'
     */
    public function bs()
    {
<<<<<<< HEAD
        $result = [];
=======
        $result = array();
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
        foreach (static::$bsWords as &$word) {
            $result[] = static::randomElement($word);
        }

<<<<<<< HEAD
        return implode(' ', $result);
=======
        return join(' ', $result);
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
    }
}

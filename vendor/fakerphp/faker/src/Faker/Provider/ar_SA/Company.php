<?php

namespace Faker\Provider\ar_SA;

use Faker\Calculator\Luhn;

class Company extends \Faker\Provider\Company
{
<<<<<<< HEAD
    protected static $formats = [
        '{{lastName}} {{companySuffix}}',
        '{{companyPrefix}} {{lastName}} {{companySuffix}}',
        '{{companyPrefix}} {{lastName}}',
    ];

    protected static $bsWords = [
        []
    ];

    protected static $catchPhraseWords = [
        ['الخدمات','الحلول','الانظمة'],
        [
            'الذهبية','الذكية','المتطورة','المتقدمة', 'الدولية', 'المتخصصه', 'السريعة',
            'المثلى', 'الابداعية', 'المتكاملة', 'المتغيرة', 'المثالية'
        ],
    ];

    protected static $companyPrefix = ['شركة', 'مؤسسة', 'مجموعة', 'مكتب', 'أكاديمية', 'معرض'];

    protected static $companySuffix = ['وأولاده', 'للمساهمة المحدودة', ' ذ.م.م', 'مساهمة عامة', 'وشركائه'];
=======
    protected static $formats = array(
        '{{lastName}} {{companySuffix}}',
        '{{companyPrefix}} {{lastName}} {{companySuffix}}',
        '{{companyPrefix}} {{lastName}}',
    );

    protected static $bsWords = array(
        array()
    );

    protected static $catchPhraseWords = array(
        array('الخدمات','الحلول','الانظمة'),
        array(
            'الذهبية','الذكية','المتطورة','المتقدمة', 'الدولية', 'المتخصصه', 'السريعة',
            'المثلى', 'الابداعية', 'المتكاملة', 'المتغيرة', 'المثالية'
            ),
    );

    protected static $companyPrefix = array('شركة', 'مؤسسة', 'مجموعة', 'مكتب', 'أكاديمية', 'معرض');

    protected static $companySuffix = array('وأولاده', 'للمساهمة المحدودة', ' ذ.م.م', 'مساهمة عامة', 'وشركائه');
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

    /**
     * @example 'مؤسسة'
     * @return string
     */
    public function companyPrefix()
    {
        return static::randomElement(self::$companyPrefix);
    }

    /**
     * @example 'الحلول المتقدمة'
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

    /**
     * example 7001010101
     **/
    public static function companyIdNumber()
    {
        $partialValue = static::numerify(700 . str_repeat('#', 6));
        return Luhn::generateLuhnNumber($partialValue);
    }
}

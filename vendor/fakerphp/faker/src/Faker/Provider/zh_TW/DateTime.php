<?php

namespace Faker\Provider\zh_TW;

class DateTime extends \Faker\Provider\DateTime
{
    public static function amPm($max = 'now')
    {
        return static::dateTime($max)->format('a') === 'am' ? '上午' : '下午';
    }

    public static function dayOfWeek($max = 'now')
    {
<<<<<<< HEAD
        $map = [
=======
        $map = array(
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
            'Sunday' => '星期日',
            'Monday' => '星期一',
            'Tuesday' => '星期二',
            'Wednesday' => '星期三',
            'Thursday' => '星期四',
            'Friday' => '星期五',
            'Saturday' => '星期六',
<<<<<<< HEAD
        ];
        $week = static::dateTime($max)->format('l');
        return $map[$week] ?? $week;
=======
        );
        $week = static::dateTime($max)->format('l');
        return isset($map[$week]) ? $map[$week] : $week;
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
    }

    public static function monthName($max = 'now')
    {
<<<<<<< HEAD
        $map = [
=======
        $map = array(
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
            'January' => '一月',
            'February' => '二月',
            'March' => '三月',
            'April' => '四月',
            'May' => '五月',
            'June' => '六月',
            'July' => '七月',
            'August' => '八月',
            'September' => '九月',
            'October' => '十月',
            'November' => '十一月',
            'December' => '十二月',
<<<<<<< HEAD
        ];
        $month = static::dateTime($max)->format('F');
        return $map[$month] ?? $month;
=======
        );
        $month = static::dateTime($max)->format('F');
        return isset($map[$month]) ? $map[$month] : $month;
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
    }
}

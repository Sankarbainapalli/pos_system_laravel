<?php

namespace Faker\Provider\ka_GE;

class DateTime extends \Faker\Provider\DateTime
{
    public static function dayOfWeek($max = 'now')
    {
<<<<<<< HEAD
        $map = [
=======
        $map = array(
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
            'Sunday' => 'კვირა',
            'Monday' => 'ორშაბათი',
            'Tuesday' => 'სამშაბათი',
            'Wednesday' => 'ოთხშაბათი',
            'Thursday' => 'ხუთშაბათი',
            'Friday' => 'პარასკევი',
            'Saturday' => 'შაბათი',
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
            'January' => 'იანვარი',
            'February' => 'თებერვალი',
            'March' => 'მარტი',
            'April' => 'აპრილი',
            'May' => 'მაისი',
            'June' => 'ივნისი',
            'July' => 'ივლისი',
            'August' => 'აგვისტო',
            'September' => 'სექტემბერი',
            'October' => 'ოქტომბერი',
            'November' => 'ნოემბერი',
            'December' => 'დეკემბერი',
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

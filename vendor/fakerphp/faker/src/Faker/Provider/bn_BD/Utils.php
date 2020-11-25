<?php

namespace Faker\Provider\bn_BD;

class Utils
{
    public static function getBanglaNumber($number)
    {
        $english = range(0, 10);
<<<<<<< HEAD
        $bangla = ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'];
=======
        $bangla = array('০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯');
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

        return str_replace($english, $bangla, $number);
    }
}

<?php

namespace Faker\Provider\lt_LT;

class Payment extends \Faker\Provider\Payment
{
    /**
     * International Bank Account Number (IBAN)
     * @link http://en.wikipedia.org/wiki/International_Bank_Account_Number
     * @param  string  $prefix      for generating bank account number of a specific bank
     * @param  string  $countryCode ISO 3166-1 alpha-2 country code
<<<<<<< HEAD
     * @param  int $length      total length without country code and 2 check digits
=======
     * @param  integer $length      total length without country code and 2 check digits
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
     * @return string
     */
    public static function bankAccountNumber($prefix = '', $countryCode = 'LT', $length = null)
    {
        return static::iban($countryCode, $prefix, $length);
    }
}
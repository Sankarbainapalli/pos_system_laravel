<?php

namespace Faker\Provider\de_DE;

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
    public static function bankAccountNumber($prefix = '', $countryCode = 'DE', $length = null)
    {
        return static::iban($countryCode, $prefix, $length);
    }

    /**
     * Sources:
     * The 19 largest German banks by total assets
     * @see https://de.wikipedia.org/wiki/Liste_der_größten_Banken_in_Deutschland
     * The 20 largest co-operative banks by branch count
     * @see https://de.wikipedia.org/wiki/Liste_der_Genossenschaftsbanken_in_Deutschland
     * The 20 largest public savings banks by branch count
     * @see https://de.wikipedia.org/wiki/Liste_der_Sparkassen_in_Deutschland
     */
<<<<<<< HEAD
    protected static $banks = [
=======
    protected static $banks = array(
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
        'Bank 1 Saar', 'Bayerische Landesbank', 'BBBank', 'Berliner Sparkasse', 'Berliner Volksbank', 'Braunschweigische Landessparkasse',
        'Commerzbank',
        'DekaBank Deutsche Girozentrale', 'Deutsche Apotheker- und Ärztebank', 'Deutsche Bank', 'Deutsche Kreditbank', 'Deutsche Pfandbriefbank', 'Dortmunder Volksbank', 'DZ Bank',
        'Erzgebirgssparkasse',
        'Frankfurter Sparkasse', 'Frankfurter Volksbank',
        'Hamburger Sparkasse', 'Hannoversche Volksbank', 'HSGV', 'HSH Nordbank',
        'ING-DiBa',
        'KfW', 'Kreissparkasse Esslingen-Nürtingen', 'Kreissparkasse Heilbronn', 'Kreissparkasse Köln', 'Kreissparkasse Ludwigsburg', 'Kreissparkasse München Starnberg Ebersberg',
        'L-Bank', 'Landesbank Baden-Württemberg', 'Landesbank Hessen-Thüringen', 'Landessparkasse zu Oldenburg', 'Landwirtschaftliche Rentenbank',
        'Mittelbrandenburgische Sparkasse in Potsdam',
        'Nassauische Sparkasse', 'Norddeutsche Landesbank', 'NRW.Bank',
        'Ostsächsische Sparkasse Dresden',
        'Postbank',
        'Sparkasse Hannover', 'Sparkasse KölnBonn', 'Sparkasse Mainfranken Würzburg', 'Sparkasse Nürnberg', 'Sparkasse Pforzheim Calw', 'Stadtsparkasse München',
        'Unicredit Bank',
        'Vereinigte Volksbank', 'Volksbank, Hildesheim-Lehrte-Pattensen', 'Volksbank Alzey-Worms', 'Volksbank Braunschweig Wolfsburg', 'Volksbank Darmstadt - Südhessen', 'Volksbank Hohenlohe', 'Volksbank Kraichgau Wiesloch-Sinsheim', 'Volksbank Lüneburger Heide', 'Volksbank Mittelhessen', 'Volksbank Paderborn-Höxter-Detmold', 'Volksbank Raiffeisenbank Rosenheim-Chiemsee', 'Volksbank Stuttgart', 'VR Bank Main-Kinzig-Büdingen',
        'WGZ Bank',
<<<<<<< HEAD
    ];
=======
    );
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

    /**
     * @example 'Volksbank Stuttgart'
     */
    public static function bank()
    {
        return static::randomElement(static::$banks);
    }
}

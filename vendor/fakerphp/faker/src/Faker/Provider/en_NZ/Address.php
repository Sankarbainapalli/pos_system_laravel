<?php

namespace Faker\Provider\en_NZ;

class Address extends \Faker\Provider\en_US\Address
{
    /**
     * An array of en_NZ (New Zealand) building number formats
     * @var array
     */
<<<<<<< HEAD
    protected static $buildingNumber = ['#', '##', '###'];
=======
    protected static $buildingNumber = array('#', '##', '###');
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

    /**
     * An array of en_NZ (New Zealand) street suffixes
     * @var array
     */
<<<<<<< HEAD
    protected static $streetSuffix = [
        'Avenue', 'Close', 'Court', 'Crescent', 'Drive', 'Esplanade', 'Grove', 'Heights', 'Highway', 'Hill', 'Lane', 'Line', 'Mall', 'Parade', 'Place', 'Quay', 'Rise', 'Road', 'Square', 'Street', 'Terrace', 'Way'
    ];
=======
    protected static $streetSuffix = array(
        'Avenue', 'Close', 'Court', 'Crescent', 'Drive', 'Esplanade', 'Grove', 'Heights', 'Highway', 'Hill', 'Lane', 'Line', 'Mall', 'Parade', 'Place', 'Quay', 'Rise', 'Road', 'Square', 'Street', 'Terrace', 'Way'
    );
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

    /**
     * City suffixes
     * @var array
     */
<<<<<<< HEAD
    protected static $citySuffix = ['ville', 'ston'];
=======
    protected static $citySuffix = array('ville', 'ston');
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

    /**
     * City formats
     * @var array
     */
<<<<<<< HEAD
    protected static $cityFormats = ['{{firstName}}{{citySuffix}}'];
=======
    protected static $cityFormats = array('{{firstName}}{{citySuffix}}');
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

    /**
     * An array of en_NZ (New Zealand) regions
     * @see http://en.wikipedia.org/wiki/Regions_of_New_Zealand
     * @var array
     */
<<<<<<< HEAD
    protected static $region = [
        'Auckland', 'Bay of Plenty', 'Canterbury', 'Gisborne', 'Hawkes Bay', 'Manawatu-Whanganui', 'Marlborough', 'Nelson', 'Northland', 'Otago', 'Southland', 'Taranaki', 'Tasman', 'Waikato', 'Wellington', 'West Coast'
    ];
=======
    protected static $region = array(
        'Auckland', 'Bay of Plenty', 'Canterbury', 'Gisborne', 'Hawkes Bay', 'Manawatu-Whanganui', 'Marlborough', 'Nelson', 'Northland', 'Otago', 'Southland', 'Taranaki', 'Tasman', 'Waikato', 'Wellington', 'West Coast'
    );
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

    /**
     * An array of en_NZ (New Zealand) poscode formats
     * @var array
     */
<<<<<<< HEAD
    protected static $postcode = ['####'];
=======
    protected static $postcode = array('####');
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

    /**
     * An array of en_NZ (New Zealand) address formats
     * @var array
     */
<<<<<<< HEAD
    protected static $addressFormats = ['{{buildingNumber}} {{streetName}}, {{city}}, {{region}}, {{postcode}}'];
=======
    protected static $addressFormats = array('{{buildingNumber}} {{streetName}}, {{city}}, {{region}}, {{postcode}}');
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

    /**
     * An array of en_NZ (New Zealand) street address formats
     * @var array
     */
<<<<<<< HEAD
    protected static $streetAddressFormats = ['{{buildingNumber}} {{streetName}}'];
=======
    protected static $streetAddressFormats = array('{{buildingNumber}} {{streetName}}');
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

    /**
     * Return a en_NZ (New Zealand) postcode
     * @return string
     */
    public static function postcode()
    {
        return static::numerify(static::randomElement(static::$postcode));
    }

    /**
     * Return a en_NZ (New Zealand) region
     * @return string
     */
    public static function region()
    {
        return static::randomElement(static::$region);
    }
}

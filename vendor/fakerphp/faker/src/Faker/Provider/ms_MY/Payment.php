<?php

namespace Faker\Provider\ms_MY;

class Payment extends \Faker\Provider\Payment
{
<<<<<<< HEAD
    protected static $bankFormats = [
        '{{localBank}}',
        '{{foreignBank}}',
        '{{governmentBank}}'
    ];
=======
    protected static $bankFormats = array(
        '{{localBank}}',
        '{{foreignBank}}',
        '{{governmentBank}}'
    );
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

    /**
     * @link http://www.muamalat.com.my/consumer-banking/internet-banking/popup-ibg.html
     */
<<<<<<< HEAD
    protected static $bankAccountNumberFormats = [
=======
    protected static $bankAccountNumberFormats = array(
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
        '##########',
        '###########',
        '############',
        '#############',
        '##############',
        '###############',
        '################',
<<<<<<< HEAD
    ];
=======
    );
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

    /**
     * @link https://en.wikipedia.org/wiki/List_of_banks_in_Malaysia
     */
<<<<<<< HEAD
    protected static $localBanks = [
=======
    protected static $localBanks = array(
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
        'Affin Bank',
        'Alliance Bank',
        'AmBank',
        'CIMB Bank',
        'Hong Leong Bank ',
        'Maybank',
        'Public Bank',
        'RHB Bank'
<<<<<<< HEAD
    ];
=======
    );
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

    /**
     * @link https://en.wikipedia.org/wiki/List_of_banks_in_Malaysia#List_of_foreign_banks_(commercial)
     */
<<<<<<< HEAD
    protected static $foreignBanks = [
=======
    protected static $foreignBanks = array(
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
        'Bangkok Bank Berhad',
        'Bank of America Malaysia Berhad',
        'Bank of China (Malaysia) Berhad',
        'Bank of Tokyo-Mitsubishi UFJ (Malaysia) Berhad',
        'BNP Paribas Malaysia Berhad',
        'China Construction Bank',
        'Citibank Berhad',
        'Deutsche Bank (Malaysia) Berhad',
        'HSBC Bank Malaysia Berhad',
        'India International Bank (Malaysia) Berhad',
        'Industrial and Commercial Bank of China (Malaysia) Berhad',
        'J.P. Morgan Chase Bank Berhad',
        'Mizuho Bank (Malaysia) Berhad',
        'National Bank of Abu Dhabi Malaysia Berhad',
        'OCBC Bank (Malaysia) Berhad',
        'Standard Chartered Bank Malaysia Berhad',
        'Sumitomo Mitsui Banking Corporation Malaysia Berhad',
        'The Bank of Nova Scotia Berhad',
        'United Overseas Bank (Malaysia) Bhd.'
<<<<<<< HEAD
    ];
=======
    );
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

    /**
     * @link https://en.wikipedia.org/wiki/List_of_banks_in_Malaysia#Development_Financial_Institutions_(Government-owned_banks)_(full_list)
     */
<<<<<<< HEAD
    protected static $governmentBanks = [
=======
    protected static $governmentBanks = array(
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
        'Agro Bank Malaysia',
        'Bank Pembangunan Malaysia Berhad (BPMB) (The development bank of Malaysia)',
        'Bank Rakyat',
        'Bank Simpanan Nasional',
        'Credit Guarantee Corporation Malaysia Berhad (CGC)',
        'Export-Import Bank of Malaysia Berhad (Exim Bank)',
        'Malaysia Debt Ventures Berhad',
        'Malaysian Industrial Development Finance Berhad (MIDF)',
        'SME Bank Berhad',
        'Sabah Development Bank Berhad (SDB)',
        'Sabah Credit Corporation (SCC)',
        'Tabung Haji',
<<<<<<< HEAD
    ];
=======
    );
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

    /**
     * @link https://en.wikipedia.org/wiki/List_of_banks_in_Malaysia#Investment-Link_Funds_(Insurance_Companies_-_Takaful_included)
     */
<<<<<<< HEAD
    protected static $insuranceCompanies = [
=======
    protected static $insuranceCompanies = array(
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
        'AIA Malaysia',
        'AIG Malaysia',
        'Allianz Malaysia',
        'AXA AFFIN Life Insurance',
        'Berjaya General Insurance',
        'Etiqa Insurance',
        'Great Eastern Insurance',
        'Hong Leong Assurance',
        'Kurnia Insurans Malaysia',
        'Manulife Malaysia Insurance',
        'MSIG Malaysia',
        'Prudential Malaysia',
        'Tokio Marine Life Malaysia Insurance',
        'UNI.ASIA General Insurance',
        'Zurich Insurance Malaysia',
<<<<<<< HEAD
    ];
=======
    );
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

    /**
     * @link http://www.bankswiftcode.org/malaysia/
     */
<<<<<<< HEAD
    protected static $swiftCodes = [
=======
    protected static $swiftCodes = array(
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
        'ABNAMY2AXXX','ABNAMYKLPNG','ABNAMYKLXXX','AFBQMYKLXXX','AIBBMYKLXXX',
        'AISLMYKLXXX','AMMBMYKLXXX','ARBKMYKLXXX',
        'BIMBMYKLXXX','BISLMYKAXXX','BKCHMYKLXXX','BKKBMYKLXXX','BMMBMYKLXXX',
        'BNMAMYKLXXX','BNPAMYKAXXX','BOFAMY2XLBN','BOFAMY2XXXX','BOTKMYKAXXX',
        'BOTKMYKXXXX',
        'CHASMYKXKEY','CHASMYKXXXX','CIBBMYKAXXX','CIBBMYKLXXX','CITIMYKLJOD',
        'CITIMYKLLAB','CITIMYKLPEN','CITIMYKLXXX','COIMMYKLXXX','CTBBMYKLXXX',
        'DABEMYKLXXX','DBSSMY2AXXX','DEUTMYKLBLB','DEUTMYKLGMO','DEUTMYKLISB',
        'DEUTMYKLXXX',
        'EIBBMYKLXXX','EOBBMYKLXXX','EXMBMYKLXXX',
        'FEEBMYKAXXX',
        'HBMBMYKLXXX','HDSBMY2PSEL','HDSBMY2PXXX','HLBBMYKLIBU','HLBBMYKLJBU',
        'HLBBMYKLKCH','HLBBMYKLPNG','HLBBMYKLXXX','HLIBMYKLXXX','HMABMYKLXXX',
        'HSBCMYKAXXX','HSTMMYKLGWS','HSTMMYKLXXX',
        'KAFBMYKLXXX','KFHOMYKLXXX',
        'MBBEMYKAXXX','MBBEMYKLBAN','MBBEMYKLBBG','MBBEMYKLBWC','MBBEMYKLCSD',
        'MBBEMYKLIPH','MBBEMYKLJOB','MBBEMYKLKEP','MBBEMYKLKIN','MBBEMYKLKLC',
        'MBBEMYKLMAL','MBBEMYKLPEN','MBBEMYKLPGC','MBBEMYKLPJC','MBBEMYKLPJY',
        'MBBEMYKLPKG','MBBEMYKLPSG','MBBEMYKLPUD','MBBEMYKLSAC','MBBEMYKLSBN',
        'MBBEMYKLSHA','MBBEMYKLSUB','MBBEMYKLWSD','MBBEMYKLXXX','MBBEMYKLYSL',
        'MFBBMYKLXXX','MHCBMYKAXXX',
        'NOSCMY2LXXX','NOSCMYKLXXX',
        'OABBMYKLXXX','OCBCMYKLXXX','OSKIMYKLXXX',
        'PBBEMYKLXXX','PBLLMYKAXXX','PCGLMYKLXXX','PERMMYKLXXX','PHBMMYKLXXX',
        'PTRDMYKLXXX','PTROMYKLFSD','PTROMYKLXXX',
        'RHBAMYKLXXX','RHBBMYKAXXX','RHBBMYKLXXX','RJHIMYKLXXX',
        'SCBLMYKXLAB','SCBLMYKXXXX','SMBCMYKAXXX',
        'UIIBMYKLXXX','UOVBMYKLCND','UOVBMYKLXXX',
<<<<<<< HEAD
    ];
=======
    );
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

    /**
     * @link https://en.wikipedia.org/wiki/Malaysian_ringgit
     */
<<<<<<< HEAD
    protected static $currencySymbol = [
        'RM'
    ];
=======
    protected static $currencySymbol = array(
        'RM'
    );
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

    /**
     * Return a Malaysian Bank
     *
     * @example 'Maybank'
     *
<<<<<<< HEAD
     * @return string
=======
     * @return @string
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
     */
    public function bank()
    {
        $formats = static::randomElement(static::$bankFormats);

        return $this->generator->parse($formats);
    }

    /**
     * Return a Malaysian Bank account number
     *
     * @example '1234567890123456'
     *
<<<<<<< HEAD
     * @return string
=======
     * @return @string
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
     */
    public function bankAccountNumber()
    {
        $formats = static::randomElement(static::$bankAccountNumberFormats);

        return static::numerify($formats);
    }

    /**
     * Return a Malaysian Local Bank
     *
     * @example 'Public Bank'
     *
<<<<<<< HEAD
     * @return string
=======
     * @return @string
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
     */
    public static function localBank()
    {
        return static::randomElement(static::$localBanks);
    }

    /**
     * Return a Malaysian Foreign Bank
     *
     * @example 'Citibank Berhad'
     *
<<<<<<< HEAD
     * @return string
=======
     * @return @string
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
     */
    public static function foreignBank()
    {
        return static::randomElement(static::$foreignBanks);
    }

    /**
     * Return a Malaysian Government Bank
     *
     * @example 'Bank Simpanan Nasional'
     *
<<<<<<< HEAD
     * @return string
=======
     * @return @string
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
     */
    public static function governmentBank()
    {
        return static::randomElement(static::$governmentBanks);
    }

    /**
     * Return a Malaysian insurance company
     *
     * @example 'AIA Malaysia'
     *
<<<<<<< HEAD
     * @return string
=======
     * @return @string
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
     */
    public static function insurance()
    {
        return static::randomElement(static::$insuranceCompanies);
    }

    /**
     * Return a Malaysian Bank SWIFT Code
     *
     * @example 'MBBEMYKLXXX'
     *
<<<<<<< HEAD
     * @return string
=======
     * @return @string
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
     */
    public static function swiftCode()
    {
        return static::toUpper(static::lexify(static::randomElement(static::$swiftCodes)));
    }

    /**
     * Return the Malaysian currency symbol
     *
     * @example 'RM'
     *
<<<<<<< HEAD
     * @return string
=======
     * @return @string
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
     */
    public static function currencySymbol()
    {
        return static::randomElement(static::$currencySymbol);
    }
}

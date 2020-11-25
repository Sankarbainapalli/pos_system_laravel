<?php

namespace Faker\Provider\hu_HU;

class Person extends \Faker\Provider\Person
{
<<<<<<< HEAD
    protected static $maleNameFormats = [
=======
    protected static $maleNameFormats = array(
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
        '{{lastName}} {{firstNameMale}}',
        '{{title}} {{lastName}} {{firstNameMale}}',
        '{{lastName}} {{firstNameMale}} {{suffix}}',
        '{{title}} {{lastName}} {{firstNameMale}} {{suffix}}',
<<<<<<< HEAD
    ];

    protected static $femaleNameFormats = [
=======
    );

    protected static $femaleNameFormats = array(
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
        '{{lastName}} {{firstNameFemale}}',
        '{{title}} {{lastName}} {{firstNameFemale}}',
        '{{lastName}} {{firstNameFemale}} {{suffix}}',
        '{{title}} {{lastName}} {{firstNameFemale}} {{suffix}}',
        /* ..né*/
        '{{lastName}} {{firstNameMaleNe}}',
        '{{title}} {{lastName}} {{firstNameMaleNe}}',
<<<<<<< HEAD
    ];

    protected static $firstNameMale = [
=======
    );

    protected static $firstNameMale = array(
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
        'Albert', 'Attila', 'Balázs', 'Bence', 'Botond', 'Dorián', 'Endre', 'Ernő', 'Gábor', 'Géza', 'Imre', 'István',
        'Kevin', 'Kornél', 'Kristóf', 'László', 'Milán', 'Noel', 'Olivér', 'Ottó', 'Patrik', 'Péter', 'Richárd', 'Rudolf',
        'Sándor', 'Vilmos', 'Vince', 'Zoltán', 'Zsolt', 'Ádám', 'Ármin', 'Áron', 'Antal', 'Barna', 'Barnabás', 'Bendegúz',
        'Benedek', 'Hunor', 'Jenő', 'János', 'Mihály', 'Mátyás', 'Szervác', 'Zsombor', 'Zétény', 'Árpád',
<<<<<<< HEAD
    ];

    protected static $firstNameMaleNe = [
=======
    );

    protected static $firstNameMaleNe = array(
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
        'Albertné', 'Attiláné', 'Balázsné', 'Bencéné', 'Botondné', 'Doriánné', 'Endrené', 'Ernőné', 'Gáborné', 'Gézané', 'Imréné', 'Istvánné',
        'Kevinné', 'Kornélné', 'Kristófné', 'Lászlóné', 'Milánné', 'Noelné', 'Olivérné', 'Ottóné', 'Patrikné', 'Péterné', 'Richárdné', 'Rudolfné',
        'Sándorné', 'Vilmosné', 'Vincéné', 'Zoltánné', 'Zsoltné', 'Ádámné', 'Árminné', 'Áronné', 'Antalné', 'Barnáné', 'Barnabásné', 'Bendegúz',
        'Benedekné', 'Hunorné', 'Jenőné', 'Jánosné', 'Mihályné', 'Mátyásné', 'Szervácné', 'Zsomborné', 'Zétényné', 'Árpádné',
<<<<<<< HEAD
    ];

    protected static $firstNameFemale = [
=======
    );

    protected static $firstNameFemale = array(
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
        'Adél', 'Alexa', 'Andrea', 'Angéla', 'Anikó', 'Beatrix', 'Bettina', 'Dalma', 'Dorina', 'Dorottya', 'Evelin', 'Fanni', 'Flóra', 'Gabriella',
        'Georgina', 'Gitta', 'Gizella', 'Gréta', 'Henrietta', 'Izabella', 'Johanna', 'Judit', 'Julianna', 'Jázmin', 'Kata', 'Katalin',
        'Katinka', 'Klaudia', 'Kíra', 'Liliána', 'Linda', 'Liza', 'Léna', 'Lívia', 'Maja', 'Marianna', 'Marietta', 'Martina',
        'Mia', 'Milla', 'Mirella', 'Mária', 'Márton', 'Míra', 'Nikoletta', 'Olívia', 'Patrícia', 'Ramóna', 'Rebeka', 'Soma',
        'Szandra', 'Sára', 'Valéria', 'Zita', 'Aranka', 'Boróka', 'Boglárka', 'Csenge', 'Emőke', 'Erzsébet', 'Hanga', 'Henriett',
        'Kincső', 'Panna', 'Szabina', 'Szonja', 'Virág', 'Zsóka',
<<<<<<< HEAD
    ];

    protected static $lastName = [
        'Antal', 'Bakos', 'Balla', 'Balog', 'Balogh', 'Balázs', 'Barna', 'Barta', 'Biró', 'Bodnár', 'Bogdán', 'Bognár', 'Borbély', 'Boros', 'Budai', 'Bálint', 'Csonka', 'Deák', 'Dobos', 'Dudás', 'Faragó', 'Farkas', 'Fazekas', 'Fehér', 'Fekete', 'Fodor', 'Fábián', 'Fülöp', 'Gulyás', 'Gál', 'Gáspár', 'Hajdu', 'Halász', 'Hegedüs', 'Hegedűs', 'Horváth', 'Illés', 'Jakab', 'Juhász', 'Jónás', 'Katona', 'Kelemen', 'Kerekes', 'Király', 'Kis', 'Kiss', 'Kocsis', 'Kovács', 'Kozma', 'Lakatos', 'Lengyel', 'Lukács', 'László', 'Magyar', 'Major', 'Molnár', 'Máté', 'Mészáros', 'Nagy', 'Nemes', 'Novák', 'Németh', 'Oláh', 'Orbán', 'Orosz', 'Orsós', 'Pap', 'Papp', 'Pataki', 'Pintér', 'Pál', 'Pásztor', 'Péter', 'Rácz', 'Simon', 'Sipos', 'Somogyi', 'Soós', 'Szabó', 'Szalai', 'Szekeres', 'Szilágyi', 'Székely', 'Szücs', 'Szőke', 'Szűcs', 'Sándor', 'Takács', 'Tamás', 'Tóth', 'Török', 'Varga', 'Vass', 'Veres', 'Vincze', 'Virág', 'Váradi', 'Végh', 'Vörös'
    ];

    protected static $title = ['Dr.', 'Prof.', 'id.', 'ifj.'];

    private static $suffix = ['PhD'];
=======
    );

    protected static $lastName = array(
        'Antal', 'Bakos', 'Balla', 'Balog', 'Balogh', 'Balázs', 'Barna', 'Barta', 'Biró', 'Bodnár', 'Bogdán', 'Bognár', 'Borbély', 'Boros', 'Budai', 'Bálint', 'Csonka', 'Deák', 'Dobos', 'Dudás', 'Faragó', 'Farkas', 'Fazekas', 'Fehér', 'Fekete', 'Fodor', 'Fábián', 'Fülöp', 'Gulyás', 'Gál', 'Gáspár', 'Hajdu', 'Halász', 'Hegedüs', 'Hegedűs', 'Horváth', 'Illés', 'Jakab', 'Juhász', 'Jónás', 'Katona', 'Kelemen', 'Kerekes', 'Király', 'Kis', 'Kiss', 'Kocsis', 'Kovács', 'Kozma', 'Lakatos', 'Lengyel', 'Lukács', 'László', 'Magyar', 'Major', 'Molnár', 'Máté', 'Mészáros', 'Nagy', 'Nemes', 'Novák', 'Németh', 'Oláh', 'Orbán', 'Orosz', 'Orsós', 'Pap', 'Papp', 'Pataki', 'Pintér', 'Pál', 'Pásztor', 'Péter', 'Rácz', 'Simon', 'Sipos', 'Somogyi', 'Soós', 'Szabó', 'Szalai', 'Szekeres', 'Szilágyi', 'Székely', 'Szücs', 'Szőke', 'Szűcs', 'Sándor', 'Takács', 'Tamás', 'Tóth', 'Török', 'Varga', 'Vass', 'Veres', 'Vincze', 'Virág', 'Váradi', 'Végh', 'Vörös'
    );

    protected static $title = array('Dr.', 'Prof.', 'id.', 'ifj.');

    private static $suffix = array('PhD');
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

    public function title($gender = null)
    {
        return static::titleMale();
    }

    /**
     * replaced by specific unisex hungarian title
     */
    public static function titleMale()
    {
        return static::randomElement(static::$title);
    }

    /**
     * specific Hungarian name format for females after marriage
     */
    public static function firstNameMaleNe()
    {
        return static::randomElement(static::$firstNameMaleNe);
    }

    /**
     * replaced by specific unisex hungarian title
     */
    public static function titleFemale()
    {
        return static::titleMale();
    }

    /**
     * @example 'PhD'
     */
    public static function suffix()
    {
        return static::randomElement(static::$suffix);
    }
}

<?php

namespace Faker\Provider\nl_BE;

use Faker\Provider\DateTime;

class Person extends \Faker\Provider\Person
{
<<<<<<< HEAD
    protected static $firstNameMale = [
=======
    protected static $firstNameMale = array(
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
        'Aaron', 'Adam', 'Adrien', 'Alessio', 'Alexander', 'Alexandre', 'Alexis',
        'Antoine', 'Arne', 'Arthur', 'Axel', 'Ayoub', 'Baptiste', 'Benjamin',
        'Clément', 'Daan', 'David', 'Diego', 'Dylan', 'Elias', 'Emiel', 'Emile',
        'Enzo', 'Ethan', 'Ferre', 'Finn', 'Florian', 'Gabriel', 'Gilles', 'Guillaume',
        'Hamza', 'Hugo', 'Ilias', 'Janne', 'Jarne', 'Jasper', 'Jelle', 'Jonas',
        'Jules', 'Julien', 'Kato', 'Kobe', 'Lander', 'Lars', 'Leon', 'Liam', 'Linde',
        'Loïc', 'Louis', 'Lowie', 'Luca', 'Lucas', 'Lukas', 'Martin', 'Mathéo',
        'Mathias', 'Mathis', 'Mathys', 'Mats', 'Matteo', 'Mauro', 'Maxim', 'Maxime',
        'Mehdi', 'Milan', 'Mohamed', 'Mohammed', 'Nathan', 'Nicolas', 'Niels',
        'Noah', 'Noé', 'Nolan', 'Nore', 'Quinten', 'Raphaël', 'Rayan', 'Robbe',
        'Robin', 'Romain', 'Ruben', 'Rune', 'Sacha', 'Sam', 'Samuel', 'Sander',
        'Seppe', 'Simon', 'Stan', 'Théo', 'Thomas', 'Tibo', 'Tom', 'Tristan', 'Tuur',
        'Vic', 'Victor', 'Vince', 'Warre', 'Xander', 'Yanis'
<<<<<<< HEAD
    ];

    protected static $firstNameFemale = [
=======
    );

    protected static $firstNameFemale = array(
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
        'Alexia', 'Alice', 'Alicia', 'Alyssa', 'Amber', 'Amélie', 'Amy', 'Anaïs',
        'Anna', 'Anouk', 'Axelle', 'Aya', 'Bo', 'Camille', 'Célia', 'Charlotte',
        'Chiara', 'Chloé', 'Clara', 'Clémence', 'Elena', 'Elias', 'Eline', 'Elisa',
        'Elise', 'Ella', 'Eloïse', 'Emilie', 'Emma', 'Estelle', 'Eva', 'Febe',
        'Femke', 'Fien', 'Fleur', 'Giulia', 'Hajar', 'Hanne', 'Helena', 'Ines',
        'Inès', 'Jade', 'Jana', 'Jeanne', 'Julia', 'Julie', 'Juliette', 'Kaat',
        'Lana', 'Lara', 'Laura', 'Laure', 'Léa', 'Lena', 'Lien', 'Lilou', 'Lily',
        'Lina', 'Lisa', 'Lise', 'Lola', 'Lore', 'Lotte', 'Louise', 'Luna', 'Maëlle',
        'Malak', 'Manon', 'Margaux', 'Margot', 'Marie', 'Marion', 'Maya', 'Merel',
        'Mila', 'Nina', 'Noa', 'Noémie', 'Noor', 'Nora', 'Océane', 'Olivia', 'Pauline',
        'Rania', 'Robin', 'Romane', 'Roos', 'Salma', 'Sara', 'Sarah', 'Senne',
        'Siebe', 'Sofia','Tess', 'Victoria', 'Wout', 'Yana', 'Yasmine', 'Zoé', 'Zoë'
<<<<<<< HEAD
    ];

    protected static $lastName = [
=======
    );

    protected static $lastName = array(
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
        'Adam', 'Aerts', 'Amrani', 'André', 'Antoine', 'Baert', 'Bah', 'Barry',
        'Bastin', 'Bauwens', 'Benali', 'Bernard', 'Bertrand', 'Bodart', 'Bogaert',
        'Bogaerts', 'Borremans', 'Bosmans', 'Boulanger', 'Bourgeois', 'Brasseur',
        'Carlier', 'Celik', 'Ceulemans', 'Charlier', 'Christiaens', 'Claes',
        'Claessens', 'Claeys', 'Collard', 'Collignon', 'Collin', 'Cools', 'Coppens',
        'Cornelis', 'Cornet', 'Cuvelier', 'Daems', 'De Backer', 'De Clercq', 'De Cock',
        'De Coninck', 'De Coster', 'De Greef', 'De Groote', 'De Meyer', 'De Pauw',
        'De Ridder', 'De Smedt', 'De Smet', 'De Vos', 'De Wilde', 'De Winter',
        'Declercq', 'Delfosse', 'Delhaye', 'Delvaux', 'Demir', 'Denis', 'Deprez',
        'Descamps', 'Desmedt', 'Desmet', 'Dethier', 'Devos', 'Diallo', 'Dierckx',
        'Dogan', 'Dubois', 'Dumont', 'Dupont', 'El Amrani', 'Etienne', 'Evrard',
        'Fontaine', 'François', 'Geerts', 'Georges', 'Gérard', 'Gielen', 'Gilles',
        'Gillet', 'Gilson', 'Goethals', 'Goffin', 'Goossens', 'Grégoire', 'Guillaume',
        'Hajji', 'Hardy', 'Hendrickx', 'Henry', 'Herman', 'Hermans', 'Heylen',
        'Heymans', 'Hubert', 'Jacob', 'Jacobs', 'Jacques', 'Jacquet', 'Jansen',
        'Janssen', 'Janssens', 'Kaya', 'Lacroix', 'Lambert', 'Lambrechts', 'Laurent',
        'Lauwers', 'Lebrun', 'Leclercq', 'Lecocq', 'Lecomte', 'Lefebvre', 'Lefèvre',
        'Legrand', 'Lejeune', 'Lemaire', 'Lemmens', 'Lenaerts', 'Léonard', 'Leroy',
        'Libert', 'Lievens', 'Louis', 'Luyten', 'Maes', 'Mahieu', 'Marchal', 'Maréchal',
        'Martens', 'Martin', 'Massart', 'Masson', 'Mathieu', 'Meert', 'Mertens',
        'Messaoudi', 'Meunier', 'Michaux', 'Michel', 'Michiels', 'Moens', 'Moreau',
        'Nguyen', 'Nicolas', 'Nijs', 'Noël', 'Parmentier', 'Pauwels', 'Peeters',
        'Petit', 'Pierre', 'Pieters', 'Piette', 'Piron', 'Pirotte', 'Poncelet',
        'Raes', 'Remy', 'Renard', 'Robert', 'Roels', 'Roland', 'Rousseau', 'Sahin',
        'Saidi', 'Schmitz', 'Segers', 'Servais', 'Simon', 'Simons', 'Smet', 'Smets',
        'Somers', 'Stevens', 'Thijs', 'Thiry', 'Thomas', 'Thys', 'Timmermans',
        'Toussaint', 'Tran', 'Urbain', 'Van Acker', 'Van Damme', 'Van de Velde',
        'Van den Bossche', 'Van den Broeck', 'Van Dyck', 'Van Hecke', 'Van Hoof',
        'Vandamme', 'Vandenberghe', 'Verbeeck', 'Verbeke', 'Verbruggen', 'Vercammen',
        'Verhaegen', 'Verhaeghe', 'Verhelst', 'Verheyen', 'Verhoeven', 'Verlinden',
        'Vermeersch', 'Vermeiren', 'Vermeulen', 'Verschueren', 'Verstraete', 'Verstraeten',
        'Vervoort', 'Wauters', 'Willems', 'Wouters', 'Wuyts', 'Yildirim', 'Yilmaz'
<<<<<<< HEAD
    ];
=======
    );
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

    /**
     *  Belgian Rijksregister numbers are used to identify each citizen,
     *  it consists of three parts, the person's day of birth, in the
     *  format 'ymd', followed by a number between 1 and 997, odd for
     *  males, even for females. The last part is used to check if it's
     *  a valid number.
     *
     *  @link https://nl.wikipedia.org/wiki/Rijksregisternummer
     *
     *  @param string|null $gender 'male', 'female' or null for any
     *  @return string
     */
    public static function rrn($gender = null)
    {
        $middle = self::numberBetween(1, 997);
        if ($gender === static::GENDER_MALE) {
<<<<<<< HEAD
            $middle = $middle % 2 === 1 ? $middle : $middle + 1;
        } elseif ($gender === static::GENDER_FEMALE) {
            $middle = $middle % 2 === 0 ? $middle : $middle + 1;
=======
            $middle = $middle %2 === 1 ? $middle : $middle+1;
        } elseif ($gender === static::GENDER_FEMALE) {
            $middle = $middle %2 === 0 ? $middle : $middle+1;
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
        }
        $middle = sprintf('%03d', $middle);

        $date = DateTime::dateTimeThisCentury();
        $dob = sprintf('%06d', $date->format('ymd'));
        $help = $date->format('Y') >= 2000 ? 2 : null;

        $check = intval($help . $dob . $middle);
        $rest = sprintf('%02d', 97 - ($check % 97));

        return $dob . $middle . $rest;
    }
}

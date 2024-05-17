<?php

use App\DTO\Persona as PersonaDto;
use App\Enums\Genre;
use App\Exceptions\PersonaNotDanceThisType;
use App\Services\Person\Person;
use App\Services\Person\PersonManager;

require_once ('../vendor/autoload.php');

$music = Genre::ELECTRO_HOUSE;

$names = ['Иван', 'Анастасия', 'Александр'];

$persons = [
    PersonManager::data(new PersonaDto('Иван', Genre::RNB)),
    PersonManager::data(new PersonaDto('Анастасия', Genre::ELECTRO_HOUSE)),
    PersonManager::data(new PersonaDto('Александр', Genre::POP)),
];

foreach ($persons as $person) {
    /** @var Person $person */
    try {
        echo "{$person->getName()} танцует {$music->name()}:{$person->dance($music)} \n";
    } catch (PersonaNotDanceThisType) {
        echo "{$person->getName()} пьет водку в баре\n";
    }
}
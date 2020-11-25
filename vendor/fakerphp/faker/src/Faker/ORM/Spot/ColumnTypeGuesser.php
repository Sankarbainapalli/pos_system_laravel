<?php

namespace Faker\ORM\Spot;

use Faker\Generator;

class ColumnTypeGuesser
{
    protected $generator;


    /**
     * ColumnTypeGuesser constructor.
     * @param Generator $generator
     */
    public function __construct(Generator $generator)
    {
        $this->generator = $generator;
    }

    /**
     * @param array $field
     * @return \Closure|null
     */
    public function guessFormat(array $field)
    {
        $generator = $this->generator;
        $type = $field['type'];
        switch ($type) {
            case 'boolean':
                return function () use ($generator) {
                    return $generator->boolean;
                };
            case 'decimal':
<<<<<<< HEAD
                $size = $field['precision'] ?? 2;
=======
                $size = isset($field['precision']) ? $field['precision'] : 2;
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

                return function () use ($generator, $size) {
                    return $generator->randomNumber($size + 2) / 100;
                };
            case 'smallint':
                return function () use ($generator) {
                    return $generator->numberBetween(0, 65535);
                };
            case 'integer':
                return function () use ($generator) {
                    return $generator->numberBetween(0, intval('2147483647'));
                };
            case 'bigint':
                return function () use ($generator) {
                    return $generator->numberBetween(0, intval('18446744073709551615'));
                };
            case 'float':
                return function () use ($generator) {
                    return $generator->randomFloat(null, 0, intval('4294967295'));
                };
            case 'string':
<<<<<<< HEAD
                $size = $field['length'] ?? 255;
=======
                $size = isset($field['length']) ? $field['length'] : 255;
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

                return function () use ($generator, $size) {
                    return $generator->text($size);
                };
            case 'text':
                return function () use ($generator) {
                    return $generator->text;
                };
            case 'datetime':
            case 'date':
            case 'time':
                return function () use ($generator) {
                    return $generator->datetime;
                };
            default:
                // no smart way to guess what the user expects here
                return null;
        }
    }
}

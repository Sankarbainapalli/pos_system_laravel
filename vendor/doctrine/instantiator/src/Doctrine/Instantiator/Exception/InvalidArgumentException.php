<?php

namespace Doctrine\Instantiator\Exception;

use InvalidArgumentException as BaseInvalidArgumentException;
use ReflectionClass;
<<<<<<< HEAD

=======
use const PHP_VERSION_ID;
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
use function interface_exists;
use function sprintf;
use function trait_exists;

/**
 * Exception for invalid arguments provided to the instantiator
 */
class InvalidArgumentException extends BaseInvalidArgumentException implements ExceptionInterface
{
<<<<<<< HEAD
    public static function fromNonExistingClass(string $className): self
=======
    public static function fromNonExistingClass(string $className) : self
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
    {
        if (interface_exists($className)) {
            return new self(sprintf('The provided type "%s" is an interface, and can not be instantiated', $className));
        }

<<<<<<< HEAD
        if (trait_exists($className)) {
=======
        if (PHP_VERSION_ID >= 50400 && trait_exists($className)) {
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
            return new self(sprintf('The provided type "%s" is a trait, and can not be instantiated', $className));
        }

        return new self(sprintf('The provided class "%s" does not exist', $className));
    }

<<<<<<< HEAD
    /**
     * @template T of object
     * @phpstan-param ReflectionClass<T> $reflectionClass
     */
    public static function fromAbstractClass(ReflectionClass $reflectionClass): self
=======
    public static function fromAbstractClass(ReflectionClass $reflectionClass) : self
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
    {
        return new self(sprintf(
            'The provided class "%s" is abstract, and can not be instantiated',
            $reflectionClass->getName()
        ));
    }
}

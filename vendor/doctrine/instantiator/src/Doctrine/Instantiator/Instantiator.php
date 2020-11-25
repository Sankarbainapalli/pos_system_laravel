<?php

namespace Doctrine\Instantiator;

use ArrayIterator;
use Doctrine\Instantiator\Exception\InvalidArgumentException;
use Doctrine\Instantiator\Exception\UnexpectedValueException;
use Exception;
use ReflectionClass;
use ReflectionException;
use Serializable;
<<<<<<< HEAD

=======
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
use function class_exists;
use function is_subclass_of;
use function restore_error_handler;
use function set_error_handler;
use function sprintf;
use function strlen;
use function unserialize;

<<<<<<< HEAD
=======
/**
 * {@inheritDoc}
 */
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
final class Instantiator implements InstantiatorInterface
{
    /**
     * Markers used internally by PHP to define whether {@see \unserialize} should invoke
     * the method {@see \Serializable::unserialize()} when dealing with classes implementing
     * the {@see \Serializable} interface.
     */
    public const SERIALIZATION_FORMAT_USE_UNSERIALIZER   = 'C';
    public const SERIALIZATION_FORMAT_AVOID_UNSERIALIZER = 'O';

    /**
     * Used to instantiate specific classes, indexed by class name.
     *
     * @var callable[]
     */
    private static $cachedInstantiators = [];

    /**
     * Array of objects that can directly be cloned, indexed by class name.
     *
     * @var object[]
     */
    private static $cachedCloneables = [];

    /**
     * {@inheritDoc}
     */
    public function instantiate($className)
    {
        if (isset(self::$cachedCloneables[$className])) {
            return clone self::$cachedCloneables[$className];
        }

        if (isset(self::$cachedInstantiators[$className])) {
            $factory = self::$cachedInstantiators[$className];

            return $factory();
        }

        return $this->buildAndCacheFromFactory($className);
    }

    /**
     * Builds the requested object and caches it in static properties for performance
     *
     * @return object
<<<<<<< HEAD
     *
     * @template T of object
     * @phpstan-param class-string<T> $className
     *
     * @phpstan-return T
=======
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
     */
    private function buildAndCacheFromFactory(string $className)
    {
        $factory  = self::$cachedInstantiators[$className] = $this->buildFactory($className);
        $instance = $factory();

        if ($this->isSafeToClone(new ReflectionClass($instance))) {
            self::$cachedCloneables[$className] = clone $instance;
        }

        return $instance;
    }

    /**
     * Builds a callable capable of instantiating the given $className without
     * invoking its constructor.
     *
     * @throws InvalidArgumentException
     * @throws UnexpectedValueException
     * @throws ReflectionException
<<<<<<< HEAD
     *
     * @template T of object
     * @phpstan-param class-string<T> $className
     *
     * @phpstan-return callable(): T
     */
    private function buildFactory(string $className): callable
=======
     */
    private function buildFactory(string $className) : callable
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
    {
        $reflectionClass = $this->getReflectionClass($className);

        if ($this->isInstantiableViaReflection($reflectionClass)) {
            return [$reflectionClass, 'newInstanceWithoutConstructor'];
        }

        $serializedString = sprintf(
            '%s:%d:"%s":0:{}',
            is_subclass_of($className, Serializable::class) ? self::SERIALIZATION_FORMAT_USE_UNSERIALIZER : self::SERIALIZATION_FORMAT_AVOID_UNSERIALIZER,
            strlen($className),
            $className
        );

        $this->checkIfUnSerializationIsSupported($reflectionClass, $serializedString);

        return static function () use ($serializedString) {
            return unserialize($serializedString);
        };
    }

    /**
     * @throws InvalidArgumentException
     * @throws ReflectionException
<<<<<<< HEAD
     *
     * @template T of object
     * @phpstan-param class-string<T> $className
     *
     * @phpstan-return ReflectionClass<T>
     */
    private function getReflectionClass(string $className): ReflectionClass
=======
     */
    private function getReflectionClass(string $className) : ReflectionClass
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
    {
        if (! class_exists($className)) {
            throw InvalidArgumentException::fromNonExistingClass($className);
        }

        $reflection = new ReflectionClass($className);

        if ($reflection->isAbstract()) {
            throw InvalidArgumentException::fromAbstractClass($reflection);
        }

        return $reflection;
    }

    /**
     * @throws UnexpectedValueException
<<<<<<< HEAD
     *
     * @template T of object
     * @phpstan-param ReflectionClass<T> $reflectionClass
     */
    private function checkIfUnSerializationIsSupported(ReflectionClass $reflectionClass, string $serializedString): void
    {
        set_error_handler(static function (int $code, string $message, string $file, int $line) use ($reflectionClass, &$error): bool {
=======
     */
    private function checkIfUnSerializationIsSupported(ReflectionClass $reflectionClass, string $serializedString) : void
    {
        set_error_handler(static function (int $code, string $message, string $file, int $line) use ($reflectionClass, &$error) : bool {
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
            $error = UnexpectedValueException::fromUncleanUnSerialization(
                $reflectionClass,
                $message,
                $code,
                $file,
                $line
            );

            return true;
        });

        try {
            $this->attemptInstantiationViaUnSerialization($reflectionClass, $serializedString);
        } finally {
            restore_error_handler();
        }

        if ($error) {
            throw $error;
        }
    }

    /**
     * @throws UnexpectedValueException
<<<<<<< HEAD
     *
     * @template T of object
     * @phpstan-param ReflectionClass<T> $reflectionClass
     */
    private function attemptInstantiationViaUnSerialization(ReflectionClass $reflectionClass, string $serializedString): void
=======
     */
    private function attemptInstantiationViaUnSerialization(ReflectionClass $reflectionClass, string $serializedString) : void
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
    {
        try {
            unserialize($serializedString);
        } catch (Exception $exception) {
            throw UnexpectedValueException::fromSerializationTriggeredException($reflectionClass, $exception);
        }
    }

<<<<<<< HEAD
    /**
     * @template T of object
     * @phpstan-param ReflectionClass<T> $reflectionClass
     */
    private function isInstantiableViaReflection(ReflectionClass $reflectionClass): bool
=======
    private function isInstantiableViaReflection(ReflectionClass $reflectionClass) : bool
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
    {
        return ! ($this->hasInternalAncestors($reflectionClass) && $reflectionClass->isFinal());
    }

    /**
     * Verifies whether the given class is to be considered internal
<<<<<<< HEAD
     *
     * @template T of object
     * @phpstan-param ReflectionClass<T> $reflectionClass
     */
    private function hasInternalAncestors(ReflectionClass $reflectionClass): bool
=======
     */
    private function hasInternalAncestors(ReflectionClass $reflectionClass) : bool
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
    {
        do {
            if ($reflectionClass->isInternal()) {
                return true;
            }

            $reflectionClass = $reflectionClass->getParentClass();
        } while ($reflectionClass);

        return false;
    }

    /**
     * Checks if a class is cloneable
     *
     * Classes implementing `__clone` cannot be safely cloned, as that may cause side-effects.
<<<<<<< HEAD
     *
     * @template T of object
     * @phpstan-param ReflectionClass<T> $reflectionClass
     */
    private function isSafeToClone(ReflectionClass $reflectionClass): bool
    {
        return $reflectionClass->isCloneable()
            && ! $reflectionClass->hasMethod('__clone')
            && ! $reflectionClass->isSubclassOf(ArrayIterator::class);
=======
     */
    private function isSafeToClone(ReflectionClass $reflection) : bool
    {
        return $reflection->isCloneable()
            && ! $reflection->hasMethod('__clone')
            && ! $reflection->isSubclassOf(ArrayIterator::class);
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
    }
}
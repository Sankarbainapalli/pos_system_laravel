<?php

namespace Doctrine\Instantiator;

use Doctrine\Instantiator\Exception\ExceptionInterface;

/**
 * Instantiator provides utility methods to build objects without invoking their constructors
 */
interface InstantiatorInterface
{
    /**
     * @param string $className
     *
     * @return object
     *
     * @throws ExceptionInterface
<<<<<<< HEAD
     *
     * @template T of object
     * @phpstan-param class-string<T> $className
=======
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
     */
    public function instantiate($className);
}

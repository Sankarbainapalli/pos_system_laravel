<?php

namespace Faker;

class Documentor
{
    protected $generator;

    /**
     * @param Generator $generator
     */
    public function __construct(Generator $generator)
    {
        $this->generator = $generator;
    }

    /**
     * @return array
     */
    public function getFormatters()
    {
<<<<<<< HEAD
        $formatters = [];
=======
        $formatters = array();
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
        $providers = array_reverse($this->generator->getProviders());
        $providers[]= new Provider\Base($this->generator);
        foreach ($providers as $provider) {
            $providerClass = get_class($provider);
<<<<<<< HEAD
            $formatters[$providerClass] = [];
=======
            $formatters[$providerClass] = array();
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
            $refl = new \ReflectionObject($provider);
            foreach ($refl->getMethods(\ReflectionMethod::IS_PUBLIC) as $reflmethod) {
                if ($reflmethod->getDeclaringClass()->getName() == 'Faker\Provider\Base' && $providerClass != 'Faker\Provider\Base') {
                    continue;
                }
                $methodName = $reflmethod->name;
                if ($reflmethod->isConstructor()) {
                    continue;
                }
<<<<<<< HEAD
                $parameters = [];
=======
                $parameters = array();
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
                foreach ($reflmethod->getParameters() as $reflparameter) {
                    $parameter = '$' . $reflparameter->getName();
                    if ($reflparameter->isDefaultValueAvailable()) {
                        $parameter .= ' = ' . var_export($reflparameter->getDefaultValue(), true);
                    }
                    $parameters []= $parameter;
                }
<<<<<<< HEAD
                $parameters = $parameters ? '(' . implode(', ', $parameters) . ')' : '';
=======
                $parameters = $parameters ? '(' . join(', ', $parameters) . ')' : '';
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
                try {
                    $example = $this->generator->format($methodName);
                } catch (\InvalidArgumentException $e) {
                    $example = '';
                }
                if (is_array($example)) {
<<<<<<< HEAD
                    $example = "array('" . implode("', '", $example) . "')";
=======
                    $example = "array('" . join("', '", $example) . "')";
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
                } elseif ($example instanceof \DateTime) {
                    $example = "DateTime('" . $example->format('Y-m-d H:i:s') . "')";
                } elseif ($example instanceof Generator || $example instanceof UniqueGenerator) { // modifier
                    $example = '';
                } else {
                    $example = var_export($example, true);
                }
                $formatters[$providerClass][$methodName . $parameters] = $example;
            }
        }

        return $formatters;
    }
}

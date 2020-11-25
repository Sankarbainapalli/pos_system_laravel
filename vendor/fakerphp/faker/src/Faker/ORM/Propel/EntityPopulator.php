<?php

namespace Faker\ORM\Propel;

<<<<<<< HEAD
use ColumnMap;
use Faker\Provider\Base;
=======
use Faker\Provider\Base;
use ColumnMap;
>>>>>>> ab78874abac341c06d6224c7b68289052444df61

/**
 * Service class for populating a table through a Propel ActiveRecord class.
 */
class EntityPopulator
{
    protected $class;
<<<<<<< HEAD
    protected $columnFormatters = [];
    protected $modifiers = [];

    /**
=======
    protected $columnFormatters = array();
    protected $modifiers = array();

    /**
     * Class constructor.
     *
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
     * @param string $class A Propel ActiveRecord classname
     */
    public function __construct($class)
    {
        $this->class = $class;
    }

    /**
     * @return string
     */
    public function getClass()
    {
        return $this->class;
    }

    public function setColumnFormatters($columnFormatters)
    {
        $this->columnFormatters = $columnFormatters;
    }

    /**
     * @return array
     */
    public function getColumnFormatters()
    {
        return $this->columnFormatters;
    }

    public function mergeColumnFormattersWith($columnFormatters)
    {
        $this->columnFormatters = array_merge($this->columnFormatters, $columnFormatters);
    }

    /**
     * @param \Faker\Generator $generator
     * @return array
     */
    public function guessColumnFormatters(\Faker\Generator $generator)
    {
<<<<<<< HEAD
        $formatters = [];
=======
        $formatters = array();
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
        $class = $this->class;
        $peerClass = $class::PEER;
        $tableMap = $peerClass::getTableMap();
        $nameGuesser = new \Faker\Guesser\Name($generator);
        $columnTypeGuesser = new \Faker\ORM\Propel\ColumnTypeGuesser($generator);
        foreach ($tableMap->getColumns() as $columnMap) {
            // skip behavior columns, handled by modifiers
            if ($this->isColumnBehavior($columnMap)) {
                continue;
            }
            if ($columnMap->isForeignKey()) {
                $relatedClass = $columnMap->getRelation()->getForeignTable()->getClassname();
                $formatters[$columnMap->getPhpName()] = function ($inserted) use ($relatedClass) {
                    return isset($inserted[$relatedClass]) ? $inserted[$relatedClass][mt_rand(0, count($inserted[$relatedClass]) - 1)] : null;
                };
                continue;
            }
            if ($columnMap->isPrimaryKey()) {
                continue;
            }
            if ($formatter = $nameGuesser->guessFormat($columnMap->getPhpName(), $columnMap->getSize())) {
                $formatters[$columnMap->getPhpName()] = $formatter;
                continue;
            }
            if ($formatter = $columnTypeGuesser->guessFormat($columnMap)) {
                $formatters[$columnMap->getPhpName()] = $formatter;
                continue;
            }
        }

        return $formatters;
    }

    /**
     * @param ColumnMap $columnMap
     * @return bool
     */
    protected function isColumnBehavior(ColumnMap $columnMap)
    {
        foreach ($columnMap->getTable()->getBehaviors() as $name => $params) {
            $columnName = Base::toLower($columnMap->getName());
            switch ($name) {
                case 'nested_set':
<<<<<<< HEAD
                    $columnNames = [$params['left_column'], $params['right_column'], $params['level_column']];
=======
                    $columnNames = array($params['left_column'], $params['right_column'], $params['level_column']);
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
                    if (in_array($columnName, $columnNames)) {
                        return true;
                    }
                    break;
                case 'timestampable':
<<<<<<< HEAD
                    $columnNames = [$params['create_column'], $params['update_column']];
=======
                    $columnNames = array($params['create_column'], $params['update_column']);
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
                    if (in_array($columnName, $columnNames)) {
                        return true;
                    }
                    break;
            }
        }

        return false;
    }

    public function setModifiers($modifiers)
    {
        $this->modifiers = $modifiers;
    }

    /**
     * @return array
     */
    public function getModifiers()
    {
        return $this->modifiers;
    }

    public function mergeModifiersWith($modifiers)
    {
        $this->modifiers = array_merge($this->modifiers, $modifiers);
    }

    /**
     * @param \Faker\Generator $generator
     * @return array
     */
    public function guessModifiers(\Faker\Generator $generator)
    {
<<<<<<< HEAD
        $modifiers = [];
=======
        $modifiers = array();
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
        $class = $this->class;
        $peerClass = $class::PEER;
        $tableMap = $peerClass::getTableMap();
        foreach ($tableMap->getBehaviors() as $name => $params) {
            switch ($name) {
                case 'nested_set':
                    $modifiers['nested_set'] = function ($obj, $inserted) use ($class, $generator) {
                        if (isset($inserted[$class])) {
                            $queryClass = $class . 'Query';
                            $parent = $queryClass::create()->findPk($generator->randomElement($inserted[$class]));
                            $obj->insertAsLastChildOf($parent);
                        } else {
                            $obj->makeRoot();
                        }
                    };
                    break;
                case 'sortable':
                    $modifiers['sortable'] = function ($obj, $inserted) use ($class) {
                        $maxRank = isset($inserted[$class]) ? count($inserted[$class]) : 0;
                        $obj->insertAtRank(mt_rand(1, $maxRank + 1));
                    };
                    break;
            }
        }

        return $modifiers;
    }

    /**
     * Insert one new record using the Entity class.
     */
    public function execute($con, $insertedEntities)
    {
        $obj = new $this->class();
        foreach ($this->getColumnFormatters() as $column => $format) {
            if (null !== $format) {
                $obj->setByName($column, is_callable($format) ? $format($insertedEntities, $obj) : $format);
            }
        }
        foreach ($this->getModifiers() as $modifier) {
            $modifier($obj, $insertedEntities);
        }
        $obj->save($con);

        return $obj->getPrimaryKey();
    }
}
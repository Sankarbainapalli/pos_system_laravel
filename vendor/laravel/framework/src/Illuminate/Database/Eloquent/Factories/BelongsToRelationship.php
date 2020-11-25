<?php

namespace Illuminate\Database\Eloquent\Factories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class BelongsToRelationship
{
    /**
     * The related factory instance.
     *
     * @var \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected $factory;

    /**
     * The relationship name.
     *
     * @var string
     */
    protected $relationship;

    /**
     * The cached, resolved parent instance ID.
     *
     * @var mixed
     */
    protected $resolved;

    /**
     * Create a new "belongs to" relationship definition.
     *
     * @param  \Illuminate\Database\Eloquent\Factories\Factory  $factory
     * @param  string  $relationship
     * @return void
     */
    public function __construct(Factory $factory, $relationship)
    {
        $this->factory = $factory;
        $this->relationship = $relationship;
    }

    /**
     * Get the parent model attributes and resolvers for the given child model.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @return array
     */
    public function attributesFor(Model $model)
    {
        $relationship = $model->{$this->relationship}();

        return $relationship instanceof MorphTo ? [
            $relationship->getMorphType() => $this->factory->newModel()->getMorphClass(),
<<<<<<< HEAD
            $relationship->getForeignKeyName() => $this->resolver($relationship->getOwnerKeyName()),
        ] : [
            $relationship->getForeignKeyName() => $this->resolver($relationship->getOwnerKeyName()),
=======
            $relationship->getForeignKeyName() => $this->resolver(),
        ] : [
            $relationship->getForeignKeyName() => $this->resolver(),
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
        ];
    }

    /**
     * Get the deferred resolver for this relationship's parent ID.
     *
<<<<<<< HEAD
     * @param  string|null  $key
     * @return \Closure
     */
    protected function resolver($key)
    {
        return function () use ($key) {
            if (! $this->resolved) {
                $instance = $this->factory->create();

                return $this->resolved = $key ? $instance->{$key} : $instance->getKey();
=======
     * @return \Closure
     */
    protected function resolver()
    {
        return function () {
            if (! $this->resolved) {
                return $this->resolved = $this->factory->create()->getKey();
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
            }

            return $this->resolved;
        };
    }
}

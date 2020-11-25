<?php

namespace Illuminate\View;

class AppendableAttributeValue
{
    /**
     * The attribute value.
     *
     * @var mixed
     */
    public $value;

    /**
     * Create a new appendable attribute value.
     *
     * @param  mixed  $value
     * @return void
     */
    public function __construct($value)
    {
        $this->value = $value;
    }
<<<<<<< HEAD

    /**
     * Get the string value.
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->value;
    }
=======
>>>>>>> ab78874abac341c06d6224c7b68289052444df61
}

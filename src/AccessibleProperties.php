<?php

namespace App;

trait AccessibleProperties
{
    /**
     * @param  string  $property
     * @return boolean
     */
    public function __isset(string $property)
    {
        return property_exists($this, $property);
    }

    /**
     * @param  string $property
     * @return mixed
     */
    public function __get(string $property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }
}
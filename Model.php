<?php

class Model

{
	// Array to store our key/value attributes
	private $attributes = [];

    // Magic setter to populate $attributes array
    public function __set($name, $value)
    {
        // Set the $name key to hold $value in $attributes
        $this->attributes[$name] = $value;
    }

    // Magic getter to retrieve values from $attributes
    public function __get($name)
    {
        // Check for existence of array key $name
        if (array_key_exists($name, $this->attributes)) {
            return $this->attributes[$name];
        }

        return null;
    }

}

?>
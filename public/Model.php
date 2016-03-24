<?php 

	class Model

{
    protected static $dbc;
    protected static $table = '';
    protected $attributes = [];

    // Magic setter to populate $attributes array
    public function __set($key, $value)
    {
        // Set the $key key to hold $value in $attributes
        $this->attributes[$key] = $value;
    }

    // Magic getter to retrieve values from $attributes
    public function __get($key)
    {
        // Check for existence of array $key
        if (array_key_exists($key, $this->attributes)) {
            return $this->attributes[$key];
        }

        return null;
    }

    public static function getTableName()
    {
        return static::$table;
    }

}

 ?>
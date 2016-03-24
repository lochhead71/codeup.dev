<?php

class Input
{
    /**
     * Check if a given value was passed in the request
     *
     * @param string $key index to look for in request
     * @return boolean whether value exists in $_POST or $_GET
     */
    public static function has($key)
    {
        // TODO: Fill in this function
        return isset($_REQUEST[$key]);
    }

    /**
     * Get a requested value from either $_POST or $_GET
     *
     * @param string $key index to look for in index
     * @param mixed $default default value to return if key not found
     * @return mixed value passed in request
     */
    public static function get($key, $default = null)
    {
        // TODO: Fill in this function
        $result = self::has($key) ? $_REQUEST[$key] : $default;
        return $result;    
    }

    public static function getString($key)
    {
        $value = self::get($key);
        if (is_bool($value) || is_numeric($value) || is_resource($value) || is_array($value) || is_object($value))
        {
            throw new Exception('The input is not a string or is null.');
        }
        return $value;
    }

    public static function getNumber($key)
    {
        $value = self::get($key);
        if (! is_numeric($value) || $value == null)
        {
           throw new Exception('This value is not a number or is null.');
        }
        return (float) $value;
    }

    public static function getDate($key)
    {
        $value = self::get($key);
        $validDate = date_create($value);

        if ($validDate)
        {
            return $value;
        };
        throw new Exception('The input provided is not a valid date format.');
    }

    ///////////////////////////////////////////////////////////////////////////
    //                      DO NOT EDIT ANYTHING BELOW!!                     //
    // The Input class should not ever be instantiated, so we prevent the    //
    // constructor method from being called. We will be covering private     //
    // later in the curriculum.                                              //
    ///////////////////////////////////////////////////////////////////////////
    private function __construct() {}
}

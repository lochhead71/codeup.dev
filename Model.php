<?php

abstract class Model
{
    /** @var PDO|null Connection to the database */
    protected static $dbc = null;

    protected static $table = '';

    protected static $columns = [];

    /** @var array Database values for a single record. Array keys should be column names in the DB */
    protected $attributes = array();

    /**
     * Constructor
     *
     * An instance of a class derived from Model represents a single record in the database.
     *
     * $param array $attributes Optional array of database values to initialize the model record with
     */
    public function __construct(array $attributes = array('id' = null))
    {
        self::dbConnect();

        $this->attributes = $attributes;
    }

    /**
     * Connect to the DB
     *
     * This method should be called at the beginning of any function that needs to communicate with the database
     */
    protected static function dbConnect()
    {
        if (!self::$dbc) {
            self::$dbc = new PDO('mysql:host=127.0.0.1;dbname=codeup_test_db','vagrant','vagrant');
        }
    }

    /**
     * Get a value from attributes based on its name
     *
     * @param string $name key for attributes array
     *
     * @return mixed|null value from the attributes array or null if it is undefined
     */
    public function __get($name)
    {
        // @TODO: Return the value from attributes for $name if it exists, else return null
        return isset($this->attributes[$name]) ? $this->attributes[$name] : null;
    }

    /**
     * Set a new value for a key in attributes
     *
     * @param string $name  key for attributes array
     * @param mixed  $value value to be saved in attributes array
     */
    public function __set($name, $value)
    {
        $this->attributes[$name] = $value;
    }

    /** Store the object in the database */
    public function save()
    {
        // @TODO: Ensure there are values in the attributes array before attempting to save
        // if (count($this->attributes) != 0) {
        $keyDiff = array_diff(array_keys($this->attributes), $this->columns);

        if (count($this->attributes) < count($this->columns))
        {
            $missKey = (array_diff($this->columns, array_keys($this->attributes)))
            throw new InvalidArgumentException(
                "The following missing keys were found: " . implode(', ', $missKey)
                );
        }

        if (!empty($keyDiff))
        {
            throw new InvalidArgumentException(
                "The following missing keys were found: " . implode(', ', $keyDiff)
                );
        }

        // @TODO: Call the proper database method: if the `id` is set this is an update, else it is a insert

            if(!is_null($this->attributes['id']))
            {
                $this->update();
            } 
            else
            {
                $this->insert();
            }
        }
    }

    // Delete a record from the database
    public function delete($id)
    {
        $query = 'DELETE FROM ' . static::table . 'WHERE id = ' . $id;
        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }

    /**
     * Insert new entry into database
     *
     * NOTE: Because this method is abstract, any child class MUST have it defined.
     */
    protected abstract function insert();

    /**
     * Update existing entry in database
     *
     * NOTE: Because this method is abstract, any child class MUST have it defined.
     */
    protected abstract function update();
}

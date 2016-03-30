<?php

// __DIR__ is a *magic constant* with the directory path containing this file.
// This allows us to correctly require_once Model.php, no matter where this file is being required from.
require_once __DIR__ . '/Model.php';

class User extends Model
{

    protected static $table = 'users';

    protected static $columns = ['first_name', 'last_name', 'email_address', 'password'];

    /** Insert a new entry into the database */
    protected function insert()
    {
        // @TODO: Use prepared statements to ensure data security
        $insert = 'INSERT INTO users (first_name, last_name, email_address, password) VALUES (:first_name, :last_name, :email_address, :password)';
        $stmt = self::$dbc->prepare($insert);

        // @TODO: You will need to iterate through all the attributes to build the prepared query
        $stmt->bindValue(':first_name', $this->attributes['first_name'], PDO::PARAM_STR);
        $stmt->bindValue(':last_name', $this->attributes['last_name'], PDO::PARAM_STR);
        $stmt->bindValue(':email_address',  $this->attributes['email_address'],  PDO::PARAM_STR);
        $stmt->bindValue(':password',  $this->attributes['password'], PDO::PARAM_STR);
        $stmt->execute();

        // @TODO: After the insert, add the id back to the attributes array
        //        so the object properly represents a DB record
        $insertedId = self::$dbc->lastInsertId();
        $this->attributes['id'] = $insertedId;

        // $stmt = self::$dbc->prepare('SELECT * FROM users WHERE id = ?');
        // $stmt->execute([$insertedId]);
    }

    /** Update existing entry in the database */
    protected function update()
    {
        $update = 'UPDATE users SET first_name=:first_name, last_name=:last_name, email_address=:email_address, password=:password WHERE id=:id';
        $stmt = self::$dbc->prepare($update);

        // @TODO: You will need to iterate through all the attributes to build the prepared query
        $stmt->bindValue(':id', $this->attributes['id'], PDO::PARAM_INT);
        $stmt->bindValue(':first_name', $this->attributes['first_name'], PDO::PARAM_STR);
        $stmt->bindValue(':last_name', $this->attributes['last_name'], PDO::PARAM_STR);
        $stmt->bindValue(':email_address',  $this->attributes['email_address'],  PDO::PARAM_STR);
        $stmt->bindValue(':password',  $this->attributes['password'], PDO::PARAM_STR);
        $stmt->execute();        
    }

    /**
     * Find a single record in the DB based on its id
     *
     * @param int $id id of the user entry in the database
     *
     * @return User An instance of the User class with attributes array set to values from the database
     */
    public static function find($id)
    {
        // Get connection to the database
        self::dbConnect();

        // @TODO: Create select statement using prepared statements

        $query = "SELECT * FROM " . static::$table . " WHERE id = :id";
        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        // @TODO: Store the result in a variable named $result
        $result = $stmt->fetch();

        // The following code will set the attributes on the calling object based on the result variable's contents
        $instance = null;
        if ($result) {
            $instance = new static($result);
        }
        return $instance;
    }

    /**
     * Find all records in a table
     *
     * @return User[] Array of instances of the User class with attributes set to values from database
     */
    public static function all()
    {
        self::dbConnect();

        // @TODO: Learning from the find method, return all the matching records
        $stmt = self::$dbc->query("SELECT * FROM " . static::$table);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
}

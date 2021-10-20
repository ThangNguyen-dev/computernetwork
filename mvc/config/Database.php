<?php

class Database
{
    private $DBHOST = 'localhost';
    private $DBNAME = 'forum';
    private $DBUSERNAME = 'root';
    private $DBPASSWORD = '';
    protected $conn;
    private $columns;
    private $values;

    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->DBHOST;dbname=$this->DBNAME", $this->DBUSERNAME, $this->DBPASSWORD);
        } catch (PDOException $pe) {
            die("Could not connect to the database $this->DBNAME :" . $pe->getMessage());
        }
    }

    /**
     * @return string class name
     */
    public static function class(): string
    {
        return static::class;
    }

    public function all($table = "posts")
    {
        return $this->conn->query("SELECT * FROM `$table`");
    }

    public function update($sql)
    {
        return $this->conn->query("");
    }

    public function delete($id)
    {
        $result = $this->conn->query("DELETE FROM `posts` WHERE id = {$id}");
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
}

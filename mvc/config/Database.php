<?php

namespace config;

use PDO;
use PDOException;

class Database
{
    private $DBHOST = 'https://databases-auth.000webhost.com/';
    private $DBNAME = 'id11979942_wp_3bc4eb59029a83cab6502315a4039979';
    private $DBUSERNAME = 'id11979942_wp_3bc4eb59029a83cab6502315a4039979';
    private $DBPASSWORD = '{}c([IvVWePYc0MJ';
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

    public static function getClass()
    {
        return explode('\\', static::class)[count(explode('\\', static::class)) - 1];
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

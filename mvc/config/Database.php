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

    /**
     * get all data from database
     */
    public function where($id)
    {
        return $this->conn->query("SELECT * FROM `posts` WHERE id={{$id}}");
    }

    public function all($table = "posts")
    {
        return $this->conn->query("SELECT * FROM `{{$table}}`");
    }

    public function store($data)
    {
        $columns = "";
        $values = "";
        if (!is_array($data)) {
            return [
                'mess' => 'Data must is array',
            ];
        }
        foreach ($data as $key => $value) {
            if ($key == count($data)) {
                $columns .= '\'' . $key . '\'';
                $values .= '\'' . $values . '\'';
            }
            $columns .= '\'' . $key . ',';
            $values .= '\'' . $values . '\',';
        }
        $this->conn->query("INSERT INTO `{{$this::class()}}`({{$columns}}) VALUES ({{$values}})");
    }

    public function update($sql)
    {
        return $this->conn->query("");
    }

    public function delete($id)
    {
        $result = $this->conn->query("DELETE FROM `posts` WHERE id = {{$id}}");
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }

}

$Database = new Database();
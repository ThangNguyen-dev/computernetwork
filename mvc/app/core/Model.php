<?php
require_once "./mvc/config/Database.php";

class Model extends Database
{
    private $keys = "";
    private $values = "";

    public static function query($sql)
    {
        $database = new Database();
        $results = [];
        $result = $database->conn->query($sql);
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            array_push($results, $row);
        };
        return $results;
    }

    public static function where($data)
    {
        if (empty($data)) {
            return header('Location: http://computernetworknotes.test/' . self::class());
        }
        $database = new Database();
        if ($data['type'] == 'users') {
            $result = $database->conn->query("SELECT * FROM `" . strtolower(self::class()) . "s` WHERE `{$data['key']}`='{$data['value']}'");
        } else {
            $result = $database->conn->query("SELECT * FROM `" . strtolower(self::class()) . "s` WHERE {$data['key']}='{$data['value']}' AND `type` = '" . $data['type'] . "'");
        }
        if (empty($result)) {
            return false;
        }
        $results = array();
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            array_push($results, $row);
        };
        return $results;
    }

    public static function store($table, $data)
    {
        $columns = "";
        $values = "";
        if (!is_array($data)) {
            return [
                'mess' => 'Data must is array',
            ];
        }
        foreach ($data as $key => $value) {
            if ($value == end($data)) {
                $columns .= '`' . $key . '`';
                $values .= '"' . $value . '"';
            } else {
                $columns .= '`' . $key . '`,';
                $values .= '"' . $value . '",';
            }
        }
        $database = new Database();
        $database->conn->query("INSERT INTO `" . self::class() . "s`({$columns}) VALUES ({$values})");
        $database->conn->lastInsertId();
        return $database->conn->lastInsertId();;
    }

}
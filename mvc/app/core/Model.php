<?php

namespace app\core;

use config\Database;
use PDO;

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
            return header('Location: " . Asset::url() . "/' . self::getClass());
        }

        $database = new Database();

        if ($data['type'] == 'users') {
            $result = $database->conn->query("SELECT * FROM `" . strtolower(self::getClass()) . "s` WHERE `{$data['key']}`='{$data['value']}'");
        } else {
            $result = $database->conn->query("SELECT * FROM `" . strtolower(self::getClass()) . "s` WHERE {$data['key']}='{$data['value']}' AND `type` = '" . $data['type'] . "'");
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
        $results = $database->conn->query("INSERT INTO `" . self::getClass() . "s`({$columns}) VALUES ({$values})");
        return $database->conn->lastInsertId();;
    }
}

<?php

namespace app\models;

use app\core\Model;

class User extends Model
{
    public static function id()
    {
        $user = $_SESSION['user'];
        return $user['id'];
    }
}

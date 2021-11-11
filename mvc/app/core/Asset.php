<?php

namespace app\core;

class Asset
{
    public static function asset($fileName)
    {
        return Asset::url() . "/mvc/public/" . $fileName;
    }
    public static function generateRandomString($length = 25)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public static function url()
    {
        return "https://" .$_SERVER['SERVER_NAME'];
    }
}

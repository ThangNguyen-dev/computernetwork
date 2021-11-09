<?php

namespace app\core;
class Controller
{
    public function model($model)
    {
        require_once "mvc/app/models/" . $model . ".php";
        return new $model;
    }

    public function view($view, $data = [])
    {
        require_once "mvc/views/" . $view . ".php";
    }

    public function middleWare($data = [])
    {
        if (!is_array($data)) {
            return "Data is a array";
        };

        if ((empty($_SESSION['user']) && !isset($data['auth']))) {
            return header("Location: http://computernetworknotes.test/authentication/login");
        };
    }
}
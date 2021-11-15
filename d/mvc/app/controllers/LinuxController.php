<?php
//require_once 'mvc/app/core/Controller.php';

namespace app\controllers;

use app\core\Controller;
use app\models\Post;
use app\core\Asset;

class LinuxController extends Controller
{
    public function index()
    {
        $currentPge = 1;
        if (empty(explode('?', $_SERVER['REQUEST_URI'])[1])) {
            $currentPge = 1;
        } else {
            // get page form url
            $currentPge = (explode('=', explode('?', $_SERVER['REQUEST_URI'])[1])[1]);
        }

        $maxPage = Post::query('SELECT COUNT(*) FROM `posts`WHERE type = "linux"');
        $maxPage = ceil(($maxPage[0]['COUNT(*)']) / 10);
        $start = ($currentPge - 1) * 10;
        $result = Post::query("SELECT * FROM `posts` WHERE `type` = 'linux' ORDER BY `created_at` DESC LIMIT {$start},10");
        return $this->view('layouts/app', ['page' => 'linux/index', 'linux' => $result, 'maxpage' => $maxPage, 'currentpage' => $currentPge]);
    }

    public function create()
    {
        return $this->view('layouts/app', ['page' => 'linux/create']);
    }

    public function store()
    {
    }

    public function show($data)
    {
        if (empty($data)) {
            return header("Location: " . Asset::url() . "/linux");
        }
        $linux = Post::where(['key' => 'id', 'value' => $data, 'type' => 'linux']);
        return $this->view('layouts/app', ['page' => 'linux/detail', 'linux' => $linux]);
    }

    public function edit()
    {
    }

    public function update()
    {
    }

    public function destroy()
    {
    }
}

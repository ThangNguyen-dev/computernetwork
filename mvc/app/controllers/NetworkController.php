<?php
require_once 'mvc/app/core/Controller.php';

class NetworkController extends Controller
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

        $maxPage = Post::query('SELECT COUNT(*) FROM `posts`WHERE type = "network"');
        $maxPage = ceil(($maxPage[0]['COUNT(*)']) / 10);
        $start = ($currentPge - 1) * 10;
        $result = Post::query("SELECT * FROM `posts` WHERE `type` = 'network' LIMIT {$start},10");

        return $this->view('layouts/app', ['page' => 'network/index', 'network' => $result, 'maxpage' => $maxPage, 'currentpage' => $currentPge]);
    }

    public function create()
    {
    }

    public function store()
    {
    }

    public function show($data)
    {
        if (empty($data)) {
            return header('Location: http://computernetworknotes.test/network');
        }

        $network = Post::where(['key' => 'id', 'value' => $data, 'type' => 'network']);
        return $this->view('layouts/app', ['page' => 'network/detail', 'network' => $network]);
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

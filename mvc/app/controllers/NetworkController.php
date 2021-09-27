<?php
require_once 'mvc/app/core/Controller.php';

class NetworkController extends Controller
{
    public function index()
    {
        $currentPge = 1;

        if (isset($_REQUEST['page']) && isset($_REQUEST['page']) != 1) {
            $currentPge = $_REQUEST['page'];
        }

        $maxPage = Post::query('SELECT COUNT(*) FROM `posts`WHERE type = "network"');

        $start = ($currentPge - 1) * 10;
        $result = Post::query("SELECT * FROM `posts` WHERE `type` = 'network' LIMIT {$start},10");

        return $this->view('layouts/app', ['page' => 'network/index', 'network' => $result]);
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
            return header('Location: /LTWeb/network');
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
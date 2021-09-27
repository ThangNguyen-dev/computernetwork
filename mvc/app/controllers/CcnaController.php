<?php

class CcnaController extends Controller
{
    public function index()
    {
        $currentPge = 1;

        if (isset($_REQUEST['page']) && isset($_REQUEST['page']) != 1) {
            $currentPge = $_REQUEST['page'];
        }
        $maxPage = Post::query('SELECT COUNT(*) FROM `posts`WHERE type = "ccna"');
        $start = ($currentPge - 1) * 10;
        $result = Post::query("SELECT * FROM `posts` WHERE `type` = 'ccna' LIMIT {$start},10");

        return $this->view('layouts/app', ['page' => 'ccna/index', 'ccna' => $result]);
    }

    public function create()
    {
        return $this->view('layouts/app', ['page' => 'ccna/create']);
    }

    public function store()
    {
    }

    public function show($data)
    {

        if (empty($data)) {
            return header('Location: /LTWeb/ccna');
        }
        $ccna = Post::where(['key' => 'id', 'value' => $data, 'type' => 'ccna']);
        return $this->view('layouts/app', ['page' => 'ccna/detail', 'ccna' => $ccna]);
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
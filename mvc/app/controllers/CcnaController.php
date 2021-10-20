<?php

class CcnaController extends Controller
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

        $maxPage = Post::query('SELECT COUNT(*) FROM `posts`WHERE type = "ccna"');
        $maxPage = ceil(($maxPage[0]['COUNT(*)']) / 10);
        $start = ($currentPge - 1) * 10;
        $result = Post::query("SELECT * FROM `posts` WHERE `type` = 'ccna' ORDER BY `created_at` DESC LIMIT {$start},10");

        return $this->view('layouts/app', ['page' => 'ccna/index', 'ccna' => $result, 'maxpage' => $maxPage, 'currentpage' => $currentPge]);
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
            return header('Location: http://computernetworknotes.test/ccna');
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

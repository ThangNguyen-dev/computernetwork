<?php
//require_once 'mvc/app/core/Controller.php';

class LinuxController extends Controller
{
    public function __construct()
    {
//        $this->middleWare(['auth']);
    }

    public function index()
    {
        $currentPge = 1;

        if (isset($_REQUEST['page']) && isset($_REQUEST['page']) != 1) {
            $currentPge = $_REQUEST['page'];
        }

        $maxPage = Post::query('SELECT COUNT(*) FROM `posts`WHERE type = "linux"');

        $start = ($currentPge - 1) * 10;
        $result = Post::query("SELECT * FROM `posts` WHERE `type` = 'linux' LIMIT {$start},10");
        return $this->view('layouts/app', ['page' => 'linux/index', 'linux' => $result]);
    }

    public function create()
    {
        return $this->view('layouts/app', ['page' => 'linux/create']);
    }

    public function store($data)
    {

    }

    public function show($data)
    {
        if (empty($data)) {
            return header('Location: /LTWeb/linux');
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
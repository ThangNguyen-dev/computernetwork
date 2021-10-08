<?php

class HomeController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $post = new Post();
        $posts = $post->all();
        $networks = Post::query("SELECT * FROM `posts` WHERE `type` = 'network' LIMIT 1,10");
        $ccna = Post::query("SELECT * FROM `posts` WHERE `type` = 'ccna' LIMIT 1,10");
        $linux = Post::query("SELECT * FROM `posts` WHERE `type` = 'linux' LIMIT 1,10");
        return $this->view('layouts/app', ['page' => 'home', 'network' => $networks, 'ccna' => $ccna, 'linux' => $linux]);
    }

    public function create()
    {

    }

    public function store()
    {
    }

    public function show()
    {
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
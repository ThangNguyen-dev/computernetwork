<?php

class PostController extends Controller
{
    public function index()
    {
    }

    public function create()
    {
        $this->middleWare(['auth']);
        return $this->view('layouts/app', ['page' => 'layouts/create']);
    }

    public function store()
    {
        $this->middleWare(['auth']);
        if (empty($_POST['content']) || empty($_FILES["img"]) || empty($_POST['title'])) {
            return header("Location: " . $_SERVER['HTTP_REFERER']);
        }
        $thumbnail_img_url = '';
        $date = new DateTime();
        $timestamp = $date->getTimestamp();
        $target_dir = $_SERVER['CONTEXT_DOCUMENT_ROOT'] . 'http://computernetworknotes.test/mvc/public/uploads/img/';

        $target_file = $target_dir . $timestamp . '.' . pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION);
        if (move_uploaded_file($_FILES['img']['tmp_name'], $target_file)) {
            $thumbnail_img_url = '/uploads/img/' . $timestamp . '.' . pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION);
        };;
        $content = addslashes(str_replace('data-src', 'src', $_POST['content']));

        $id = Post::store(self::class, [
            'user_id' => $_SESSION['user']['id'],
            'type' => $_POST['type'],
            'title' => $_POST['title'],
            'content' => $content,
            'view' => '0',
            'thumbnail_img_url' => $thumbnail_img_url,
        ]);
        $type = $_POST['type'];

        return header("Location: http://computernetworknotes.test/{$type}/show/{$id}");

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
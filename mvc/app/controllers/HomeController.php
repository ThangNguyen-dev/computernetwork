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
        $networks = [
            [
                'title' => 'Computer Peripheral Devices and Their Functions',
                'content' => 'This tutorial explains computer peripheral devices and their functions. Learn what a peripheral device is and how many types of peripheral devices are'
            ],
            [
                'title' => 'Computer Peripheral Devices and Their Functions',
                'content' => 'This tutorial explains computer peripheral devices and their functions. Learn what a peripheral device is and how many types of peripheral devices are'
            ],
            [
                'title' => 'Computer Peripheral Devices and Their Functions',
                'content' => 'This tutorial explains computer peripheral devices and their functions. Learn what a peripheral device is and how many types of peripheral devices are'
            ],
            [
                'title' => 'Computer Peripheral Devices and Their Functions',
                'content' => 'This tutorial explains computer peripheral devices and their functions. Learn what a peripheral device is and how many types of peripheral devices are'
            ],
            [
                'title' => 'Computer Peripheral Devices and Their Functions',
                'content' => 'This tutorial explains computer peripheral devices and their functions. Learn what a peripheral device is and how many types of peripheral devices are'
            ],
            [
                'title' => 'Computer Peripheral Devices and Their Functions',
                'content' => 'This tutorial explains computer peripheral devices and their functions. Learn what a peripheral device is and how many types of peripheral devices are'
            ],
        ];
        $ccna = [
            [
                'title' => 'Computer Peripheral Devices and Their Functions',
                'content' => 'This tutorial explains computer peripheral devices and their functions. Learn what a peripheral device is and how many types of peripheral devices are'
            ],
            [
                'title' => 'Computer Peripheral Devices and Their Functions',
                'content' => 'This tutorial explains computer peripheral devices and their functions. Learn what a peripheral device is and how many types of peripheral devices are'
            ],
            [
                'title' => 'Computer Peripheral Devices and Their Functions',
                'content' => 'This tutorial explains computer peripheral devices and their functions. Learn what a peripheral device is and how many types of peripheral devices are'
            ],
            [
                'title' => 'Computer Peripheral Devices and Their Functions',
                'content' => 'This tutorial explains computer peripheral devices and their functions. Learn what a peripheral device is and how many types of peripheral devices are'
            ],
            [
                'title' => 'Computer Peripheral Devices and Their Functions',
                'content' => 'This tutorial explains computer peripheral devices and their functions. Learn what a peripheral device is and how many types of peripheral devices are'
            ],
            [
                'title' => 'Computer Peripheral Devices and Their Functions',
                'content' => 'This tutorial explains computer peripheral devices and their functions. Learn what a peripheral device is and how many types of peripheral devices are'
            ],
        ];
        $linux = [
            [
                'title' => 'Computer Peripheral Devices and Their Functions',
                'content' => 'This tutorial explains computer peripheral devices and their functions. Learn what a peripheral device is and how many types of peripheral devices are'
            ],
            [
                'title' => 'Computer Peripheral Devices and Their Functions',
                'content' => 'This tutorial explains computer peripheral devices and their functions. Learn what a peripheral device is and how many types of peripheral devices are'
            ],
            [
                'title' => 'Computer Peripheral Devices and Their Functions',
                'content' => 'This tutorial explains computer peripheral devices and their functions. Learn what a peripheral device is and how many types of peripheral devices are'
            ],
            [
                'title' => 'Computer Peripheral Devices and Their Functions',
                'content' => 'This tutorial explains computer peripheral devices and their functions. Learn what a peripheral device is and how many types of peripheral devices are'
            ],
            [
                'title' => 'Computer Peripheral Devices and Their Functions',
                'content' => 'This tutorial explains computer peripheral devices and their functions. Learn what a peripheral device is and how many types of peripheral devices are'
            ],
            [
                'title' => 'Computer Peripheral Devices and Their Functions',
                'content' => 'This tutorial explains computer peripheral devices and their functions. Learn what a peripheral device is and how many types of peripheral devices are'
            ],
        ];

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
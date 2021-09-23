<?php
//require_once 'mvc/app/core/Controller.php';

class LinuxController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
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

        return $this->view('layouts/app', ['page' => 'linux/index', 'linux' => $linux]);
    }

    public function create()
    {

    }

    public function store($data)
    {

    }

    public function show($data)
    {
        return $this->view('layouts/app', ['page' => 'detail', 'linux' => $data]);
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
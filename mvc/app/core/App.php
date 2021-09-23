<?php
session_start();

class App
{
    protected $controller;
    protected $params = [];
    protected $action;

    public function __construct()
    {
        $array = $this->urlProcess();

        // get controller and check Controller exists
        if ($array && isset($array[0]) && file_exists('./mvc/app/controllers/' . ucfirst($array[0]) . 'Controller.php')) {
            $this->controller = $this->setController(ucfirst($array[0]) . 'Controller');
            unset($array[0]);
        } else {
            $this->controller = $this->setController('HomeController');
        }

        if (!empty($array)) {
            $this->action = $this->setAction($array[1]);
            unset($array[1]);
        } else {
            $this->action = $this->setAction('index');
        }

        $array ? $this->params = array_values($array) : [];
        if (method_exists($this->controller, $this->action)) {
            call_user_func_array([$this->controller, $this->action], $this->params);
        }
    }

    public function setController($controller)
    {
        $this->controller = ucfirst($controller);
        require_once("mvc/app/controllers/" . ucfirst($controller) . ".php");
        return new $controller;
    }

    public function setAction($action)
    {
        return $this->action = strtolower($action);
    }

    /*
     *  get controller, action, params from url
     * @return string
     */
    protected function urlProcess()
    {
        $url = array();
        if (isset($_GET['url'])) {
            $u = $_GET['url'];
            return $url = explode('/', trim($u));
        } else {
            return [0 => $this->controller, 1 => $this->action];
        }
    }
}

;
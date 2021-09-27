<?php

require_once('mvc/config/Database.php');

class AuthenticationController extends Controller
{
    public static function attemp($data = [])
    {
        if (!isset($data['email']) && isset($data['password'])) {
            return false;
        }
        $user = User::query("SELECT `email`, `password` FROM `users` WHERE email = '{$data['email']}'");

        if (!isset($user['email'])) {
            return false;
        }
        $isPassword = password_verify($data['password'], $user['password']);

        if (!$isPassword) {
            return false;
        }

        return $user;
    }

    public function login()
    {
        if (isset($_SESSION['user'])) {
            return header("Location: /LTWeb/");
        }
        return require_once "mvc/views/auth/login.php";
    }

    public function registry()
    {
        return require_once "mvc/views/auth/registry.php";
    }

    public function store()
    {
        if (!isset($_REQUEST['email']) || !isset($_REQUEST['password'])) {
            $_SESSION['create'] = "User name and password is required";
            return header("Location: LTWeb/authentication/registry");
        };
        $isUsedEmail = User::where('users', ['key' => 'email', 'value' => $_REQUEST['email']]);
        var_dump($isUsedEmail);
        $isUsedUsername = User::where('users', ['key' => 'username', 'value' => "{$_REQUEST['username']}"]);
        var_dump($isUsedUsername);
        if ($isUsedEmail['email']) {
            $_SESSION['create'] = "Email is used";
            return header("Location: /LTWeb/authentication/registry");
        };
        if ($isUsedUsername['username']) {
            $_SESSION['create'] = "User name is used";
            return header("Location: /LTWeb/authentication/registry");
        };
        $data = [
            'username' => $_REQUEST['username'],
            'password' => password_hash($_REQUEST['password'], PASSWORD_BCRYPT),
            'email' => $_REQUEST['email'],
        ];
        User::store('users', $data);
        $_SESSION['user'] = $data;
        var_dump($data);
        return header("Location: /LTWeb/home");
    }

    public function checkLogin()
    {
        if (!isset($_REQUEST['email']) || !isset($_REQUEST['password'])) {
            return header("Location: /LTWeb/authentication/login");
        };
        $user = User::where(['key' => 'email', 'value' => $_REQUEST['email'], 'type' => 'users']);
        if (!isset($user[0]['email']) && !isset($user[0]['password'])) {
            unset($_SESSION['user']);
            $_SESSION['loginFailed'] = "Email and password not isset";
            return header("Location: /LTWeb/authentication/login");
        }

        if (password_verify($_REQUEST['password'], $user[0]['password'])) {
            unset($_SESSION['loginFailed']);
            $_SESSION['user'] = $user[0];
            return header('Location: /LTWeb');
        } else {
            return header("Location: /LTWeb/authentication/login");
        }


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

    public function logout()
    {
        session_destroy();
        return header("Location: /LTWeb/authentication/login");
    }
}
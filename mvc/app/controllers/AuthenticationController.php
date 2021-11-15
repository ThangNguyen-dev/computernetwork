<?php

namespace app\controllers;

use app\core\Controller;
use app\models\User;
use app\core\Asset;
use app\models\Post;


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

    public function profile()
    {
        $this->middleWare(['auth']);
        $post = new Post();
        $posts = $post->query("SELECT * FROM `posts` WHERE `user_id` = {$_SESSION['user']['id']} ORDER BY `created_at` DESC LIMIT 0, 1000");

        return $this->view('layouts/app', ['page' => 'auth/profile', 'post' => $posts]);
    }

    public function login()
    {
        if (isset($_SESSION['user'])) {
            return header("Location: ");
        }
        return require_once "mvc/views/auth/login.php";
    }

    public function registry()
    {
        return require_once "mvc/views/auth/registry.php";
    }

    public function store()
    {
        if (empty($_REQUEST['email']) || empty($_REQUEST['password'])) {
            $_SESSION['create'] = "User name and password is required";
            return header("Location: " . Asset::url() . "/authentication/registry");
        };
        $isUsedEmail = User::where(['key' => 'email', 'value' => $_REQUEST['email'], 'type' => 'users']);
        $isUsedUsername = User::where(['key' => 'username', 'value' => "{$_REQUEST['username']}", 'type' => 'users']);
        if ($isUsedEmail['email']) {
            $_SESSION['create'] = "Email is used";
            return header("Location: " . Asset::url() . "/authentication/registry");
        };
        if ($isUsedUsername['username']) {
            $_SESSION['create'] = "User name is used";
            return header("Location: " . Asset::url() . "/authentication/registry");
        };
        $data = [
            'username' => $_REQUEST['username'],
            'password' => password_hash($_REQUEST['password'], PASSWORD_BCRYPT),
            'email' => $_REQUEST['email'],
        ];
        $id = User::store('users', $data);
        $_SESSION['user'] = $data;
        $_SESSION['user']['id'] = $id;
        return header("Location: " . Asset::url() . "/home");
    }

    public function checkLogin()
    {
        if (empty($_REQUEST['email']) || empty($_REQUEST['password'])) {
            $_SESSION['create'] = "Email and password is required";
            return header("Location: " . Asset::url() . "/authentication/login");
        };

        $user = User::where(['key' => 'email', 'value' => $_REQUEST['email'], 'type' => 'users']);

        if (!isset($user[0]['email']) && !isset($user[0]['password'])) {
            unset($_SESSION['user']);
            $_SESSION['create'] = "Email and password not correct";
            return header("Location: " . Asset::url() . "/authentication/login");
        }

        if (password_verify($_REQUEST['password'], $user[0]['password'])) {
            unset($_SESSION['loginFailed']);
            $_SESSION['user'] = $user[0];
            return header("Location: " . Asset::url() . "");
        } else {
            return header("Location: " . Asset::url() . "/authentication/login");
        }
    }

    public function forgot()
    {
        return require_once "mvc/views/auth/forgot.php";
    }

    public function resetPassword()
    {
        if (empty($_REQUEST['email'])) {
            $_SESSION['create'] = "Email is required";
            return header("Location: " . Asset::url() . "/authentication/forgot");
        }

        $user = User::where(['key' => 'email', 'value' => $_REQUEST['email'], 'type' => 'users']);
        if (!$user) {
            $_SESSION['create'] = "Email not isset";
            return header("Location: " . Asset::url() . "/authentication/forgot");
        };

        $token = Asset::generateRandomString();
        User::query("UPDATE `users` SET `token`='" . $token . "' WHERE email = '" . $user[0]['email'] . "'");

        $urlResetPassword = "" . Asset::url() . "/authentication/setNewPassword?email=" . $_REQUEST['email'] . "&token=" . $token;
        $_SESSION['create'] = "<a href='" . $urlResetPassword . "'>Click to reset password</a>";
        return header("Location: " . Asset::url() . "/authentication/login");
    }

    public function setNewPassword()
    {
        /**
         * get from global variable _SERVER
         * explode to get parameter
         */
        $url = explode('&', explode('?', $_SERVER['REQUEST_URI'])[1]);
        $email = explode('=', $url[0])[1];
        $token = explode('=', $url[1])[1];
        $user = User::query("SELECT `id`, `username`, `email`, `password`, `token` FROM `users` WHERE token = '" . $token . "' AND email = '" . $email . "'");
        if (empty($user)) {
            return header("Location: " . Asset::url() . "/authentication/login");
        };
        $_SESSION['user'] = $user = $user[0];
        return require_once "mvc/views/auth/setpass.php";
    }

    public function updatepassword()
    {
        if (empty($_REQUEST['password']) || empty($_REQUEST['re_password'])) {
            $_SESSION['create'] = "Passwords do not match";
            return require_once "mvc/views/auth/setpass.php";
        }

        User::query("UPDATE `users` SET `password`='" . password_hash($_REQUEST['password'], PASSWORD_BCRYPT) . "',`token`='' WHERE id = '" . $_SESSION['user']['id'] . "'");
        return header("Location: " . Asset::url() . "/authentication/login");
    }

    public function logout()
    {
        session_destroy();
        return header("Location: " . Asset::url() . "/authentication/login");
    }
}

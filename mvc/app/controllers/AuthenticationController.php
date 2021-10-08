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
            return header("Location: http://computernetworknotes.test/");
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
            return header("Location: http://computernetworknotes.test/authentication/registry");
        };
        $isUsedEmail = User::where(['key' => 'email', 'value' => $_REQUEST['email'], 'type' => 'users']);
        $isUsedUsername = User::where(['key' => 'username', 'value' => "{$_REQUEST['username']}", 'type' => 'users']);
        if ($isUsedEmail['email']) {
            $_SESSION['create'] = "Email is used";
            return header("Location: http://computernetworknotes.test/authentication/registry");
        };
        if ($isUsedUsername['username']) {
            $_SESSION['create'] = "User name is used";
            return header("Location: http://computernetworknotes.test/authentication/registry");
        };
        $data = [
            'username' => $_REQUEST['username'],
            'password' => password_hash($_REQUEST['password'], PASSWORD_BCRYPT),
            'email' => $_REQUEST['email'],
        ];
        User::store('users', $data);
        $_SESSION['user'] = $data;
        return header("Location: http://computernetworknotes.test/home");
    }

    public function checkLogin()
    {
        if (empty($_REQUEST['email']) || empty($_REQUEST['password'])) {
            $_SESSION['create'] = "Email and password is required";
            return header("Location: http://computernetworknotes.test/authentication/login");
        };
        $user = User::where(['key' => 'email', 'value' => $_REQUEST['email'], 'type' => 'users']);
        if (!isset($user[0]['email']) && !isset($user[0]['password'])) {
            unset($_SESSION['user']);
            $_SESSION['create'] = "Email and password not isset";
            return header("Location: http://computernetworknotes.test/authentication/login");
        }
        if (password_verify($_REQUEST['password'], $user[0]['password'])) {
            unset($_SESSION['loginFailed']);
            $_SESSION['user'] = $user[0];
            return header('Location: http://computernetworknotes.test');
        } else {
            // return header("Location: http://computernetworknotes.test/authentication/login");
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
            return header("Location: http://computernetworknotes.test/authentication/forgot");
        }

        $user = User::where(['key' => 'email', 'value' => $_REQUEST['email'], 'type' => 'users']);
        if (!$user) {
            $_SESSION['create'] = "Email not isset";
            return header("Location: http://computernetworknotes.test/authentication/forgot");
        };

        $token = generateRandomString();
        User::query("UPDATE `users` SET `token`='" . $token . "' WHERE email = '" . $user[0]['email'] . "'");

        $urlResetPassword = "http://computernetworknotes.test/authentication/setNewPassword?email=" . $_REQUEST['email'] . "&token=" . $token;
        $_SESSION['create'] = "<a href='" . $urlResetPassword . "'>Click to reset password</a>";
        return header("Location: http://computernetworknotes.test/authentication/login");
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
            return header("Location: http://computernetworknotes.test/authentication/login");
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
        return header("Location: http://computernetworknotes.test/authentication/login");
    }

    public function logout()
    {
        session_destroy();
        return header("Location: http://computernetworknotes.test/authentication/login");
    }
}
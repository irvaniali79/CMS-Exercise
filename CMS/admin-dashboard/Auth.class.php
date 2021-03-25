<?php

namespace AdminDashboard;

require_once(realpath(dirname(__FILE__) . "/DataBase.php"));

use DataBase\DataBase;

class Auth
{
    protected function redirect($url)
    {
        $protocol = stripos($_SERVER['SERVER_PROTOCOL'], 'https') === true ? "https://" : "http://";
        header("Location:" . $protocol . $_SERVER['HTTP_HOST'] . "/www/CMS/" . $url);
    }
    protected function redirectback()
    {
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }
    public function login()
    {
        require_once(realpath(dirname(__FILE__) . "/../template/auth/login.php"));
    }
    public function register()
    {
        require_once(realpath(dirname(__FILE__) . "/../template/auth/register.php"));
    }
    public function checklogin($request)
    {
        if (empty($request['email']) || empty($request['password'])) {
            $this->redirectback();
        } else {
            $db = new DataBase();
            $user = $db->select("SELECT * FROM `users` WHERE `email`=? ;", [$request['email']])->fetch();
            if ($user != null && password_verify($user['password'], $request['password'])) {
                $_SESSION['user'] = $user['id'];
                $this->redirect('admin');
            } else {
                $this->redirectback();
            }
        }
    }
    public function store($request)
    {
        if (empty($request['email']) || empty($request['password'])) {
            $this->redirectback();
        } else if (strlen($request['password']) < 8) {
            $this->redirectback();
        } else if (!filter_var($request['email'], FILTER_VALIDATE_EMAIL)) {
            $this->redirectback();
        } else {
            $db = new DataBase();
            $request['password'] = hash($request['password']);
            $db->insert('users', array_keys($request), $request);
            $this->redirect('login');
        }
    }
    public function logout()
    {
        if (isset($_SESSION['user'])) {
            unset($_SESSION['user']);
            session_destroy();
        }
        $this->redirectback();
    }
    public function checkadmin()
    {
        if (isset($_SESSION['id'])) {
            $db = new DataBase();
            $user = $db->select("SELECT * FROM `users` WHERE `id` = ? ; ")->fetch();
            if ($user != null) {
                if ($user['permission'] != 'admin') {
                    $this->redirect('home');
                }
            } else {
                $this->redirect('home');
            }
        } else {
            $this->redirect('home');
        }
    }
}

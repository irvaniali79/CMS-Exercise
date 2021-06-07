<?php

namespace AdminDashboard;

require_once("Admin.class.php");
require_once(realpath(dirname(__FILE__) . "/../vendor/database/DataBase.php"));

use DataBase\DataBase;

class Article extends Admin
{

    public function index()
    {
        $db = new Database();
        $articles = $db->select("SELECT * FROM `articles` ORDER BY `id` DESC;");
        require_once(realpath(dirname(__FILE__) . "/../view/admin/articles/index.php"));
    }
    public function show($id)
    {
        $db = new Database();
        $article = $db->select("SELECT * FROM `articles` WHERE (`id` = ?);", [$id])->fetch();
        require_once(realpath(dirname(__FILE__) . "/../view/admin/articles/show.php"));
    }

    public function create()
    {
        $db = new Database();
        $categories = $db->select("SELECT * FROM `categories` ORDER BY `id` DESC;");
        require_once(realpath(dirname(__FILE__) . "/../view/admin/articles/create.php"));
    }
    public function store($request)
    {
        $db = new DataBase();
        if ($request['cat_id'] != null) {
            $request['image'] = $this->saveimage($request['image'], 'article-image');
            if ($request['image']) {
                $request = array_merge($request, array('user_id' => $_SESSION['user']));
                $db->insert('articles', array_keys($request), array_values($request));
                $this->redirect('article');
            } else $this->redirectback();
        } else {
            $this->redirectback();
        }


        $this->redirect('article');
    }
    public function edit($id)
    {
        $db = new Database();
        $article = $db->select("SELECT * FROM `articles` WHERE `id` = ?;", [$id])->fetch();
        $categories = $db->select("SELECT * FROM `categories` ORDER BY `id` DESC;");
        require_once(realpath(dirname(__FILE__) . "/../view/admin/articles/edit.php"));
    }
    public function update($request, $id)
    {
        $db = new DataBase();
        if ($request['cat_id'] != null) {
            if ($request['image']['tmp_name'] != null) {
                $article = $db->select("SELECT * FROM `articles` WHERE `id` = ?;", [$id])->fetch();
                $this->removeimage($article['image']);
                $request['image'] = $this->saveimage($request['image'], 'article-image');
            } else {
                unset($request['image']);
            }
            $request = array_merge($request, array('user_id' => $_SESSION['user']));
            $db->update('articles', $id, array_keys($request), $request);
            $this->redirect('article');
        } else {
            $this->redirectback();
        }
    }
    public function delete($id)
    {
        $db = new Database();
        $article = $db->select("SELECT * FROM `articles` WHERE `id` = ? ;", [$id])->fetch();
        $this->removeimage($article['image']);
        $db->delete('articles', $id);
        $this->redirectback();
    }
}

<?php
namespace AdminDashboard;
require_once ("Admin.class.php");
require_once(realpath(dirname(__FILE__) . "/../vendor/database/DataBase.php"));

use DataBase\DataBase;


class Home{
    public function index(){
        $db=new DataBase();
        $articles=$db->select("SELECT *,(SELECT COUNT(*) FROM comments WHERE article_id = articles.id) as comments_count,
        (SELECT username FROM users WHERE id=articles.user_id) AS username FROM articles ORDER BY created_at DESC LIMIT 0,6;")->fetchAll();


        $popularAriticles = $db->select("SELECT *,(SELECT COUNT(*) FROM comments WHERE article_id =articles.id) AS comments_count,(SELECT username FROM users WHERE id = articles.user_id) AS username FROM articles ORDER BY view DESC LIMIT 0,4;")->fetchAll();

        $sidebarPopularArticles =$popularAriticles;

        $categories =$db->select("SELECT * FROM categories ORDER BY id DESC ;");

        $menus= $db->select("SELECT menus.* ,(SELECT COUNT(*) FROM menus AS submenus WHERE parent_id = menus.id) AS submenus_count FROM menus WHERE parent_id IS NULL; ")->fetchAll();

        $subMenus= $db->select("SELECT * FROM menus WHERE parent_id IS NOT NULL ;")->fetchAll();

        $setting=$db->select("SELECT * FROM `websetting` ;")->fetch();
        
        require_once (realpath(dirname(__FILE__)."/../view/app/index.php"));
    }
    public function show($id)
    {
        $db = new DataBase();
        $article= $db->select("SELECT * FROM `articles` WHERE `id` =? ;",[$id])->fetch();
        $username = $db->select("SELECT * FROM `users` WHERE `id` = ? ;",[$article['user_id']])->fetch();
        $commentscount=$db->select("SELECT COUNT(*) `comments` WHERE `article_id`= ? ;",[$id])->fetch();
        $comments=$db->select("SELECT *,(SELECT COUNT(*) FROM `users` WHERE `id` = `comments`.`user_id`) AS `username` FROM `comments` WHERE `article_id`= ?  AND `status` = `approved` ORDER BY `created_at` DESC ;",[$id])->fetchAll();
        $db->update('articles',$id,['view'],[$article['view']+1]);

        $popularAriticles = $db->select("SELECT *,(SELECT COUNT(*) FROM comments WHERE article_id =articles.id) AS comments_count,(SELECT username FROM users WHERE id = articles.user_id) AS username FROM articles ORDER BY view DESC LIMIT 0,4;")->fetchAll();

        $sidebarPopularArticles =$popularAriticles;

        $categories =$db->select("SELECT * FROM categories ORDER BY id DESC ;");

        $menus= $db->select("SELECT menus.* ,(SELECT COUNT(*) FROM menus AS submenus WHERE parent_id = menus.id) AS submenus_count FROM menus WHERE parent_id IS NULL; ")->fetchAll();

        $subMenus= $db->select("SELECT * FROM menus WHERE parent_id IS NOT NULL ;")->fetchAll();

        $setting=$db->select("SELECT * FROM `websetting` ;")->fetch();
         

        require_once (realpath(dirname(__FILE__)."/../view/app/show-article.php"));


    }
    
    public function commentstore($request)
    {
        if(isset($_SESSION['user']) && $_SESSION['user']!=null ){
            $db=new DataBase();
            $db->insert('comments',['user_id','article_id','comment'],[$_SESSION['user'],$request['article'],$request['comment']]);
            $this->redirectback();
        }
        else{
            $this->redirectback();
        }
    }
    public function redirectback()      
    {
        header("Location: ".$_SERVER['HTTP_REFERER']);
    }


}

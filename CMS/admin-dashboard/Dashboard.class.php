<?php 
namespace AdminDashboard;
require_once ("Admin.class.php");
require_once (realpath(dirname(__FILE__)."/DataBase.php"));
use DataBase\DataBase;


class Dashboard extends Admin{
    public function index()
    {

        $db=new DataBase;
        $articleCount=$db->select('SELECT COUNT(*) FROM `articles` ;')->fetch();
        $articleView=$db->select('SELECT SUM(view) FROM `articles` ;')->fetch();
        $commentsCount=$db->select('SELECT COUNT(*) FROM `comments` ;')->fetch();
        $commentsApproveCount=$db->select('SELECT COUNT(*) FROM `comments` WHERE `status`=`unseen`  ;')->fetch();
        $userCount=$db->select('SELECT COUNT(*) FROM `users` WHERE `premission` = `user` ;')->fetch();
        $adminCount=$db->select('SELECT COUNT(*) FROM `users` WHERE `premission` = `admin` ;')->fetch();
        $categoryCount=$db->select('SELECT * FROM `categories` ;');
        $articleWithView=$db->select('SELECT COUNT(*) FROM `articles` ORDER BY `view` DESC LIMIT 0,5')->fetch();
        $articlesComments=$db->select("SELECT `articles`.`id` ,`articles`.`title`,COUNT(`comments`.`article_id`) AS `comment_count` FROM `articles` LEFT JOIN `comments` ON `articles`.`id` = `comments`.`article_id` GROUP BY `articles`.`id` ORDER BY `comment_count` DESC LIMIT 0,5;")->fetch();
        $lastComments=$db->select("SELECT `comments`.`id`,`comments`.`comment`,`comments`.`status`,`comments`.`article_id`,`users`.`username` FROM comments,users WHERE `comments`.`user_id`=`user`.`id` ORDER BY `comments`.`created_at` DESC LIMIT 0,5;")->fetch();
        
        

        require_once (realpath(dirname(__FILE__)."/../CMS/template/admin/dashboard/index.php"));
    }
   
}
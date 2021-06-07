<?php
namespace AdminDashboard;
require_once ("Admin.class.php");
require_once(realpath(dirname(__FILE__) . "/../vendor/database/DataBase.php"));

use DataBase\DataBase;




class Comment extends Admin{
    public function index()
    {
        $db = new Database();
        $comments= $db->select("SELECT * FROM `comments` ORDER BY `id` DESC;");

        foreach($comments as $comment){
            if($comment['status']=='unseen'){
                $db->update('comments',$comment['id'],['status'],['seen']);
            }
        }
        $comments= $db->select("SELECT * FROM `comments` ORDER BY `id` DESC;");

        require_once (realpath(dirname(__FILE__)."/../template/admin/comments/index.php"));
    }
    
    public function show($id)
    {   
        $db = new Database();
        $comment= $db->select("SELECT * FROM `comments` WHERE  `id`=?;",[$id]);
        require_once (realpath(dirname(__FILE__)."/../template/admin/comments/show.php"));
    }
    public function approve($id)
    {   
        $db = new Database();
        $comment= $db->select("SELECT * FROM `comments` WHERE  `id`=?;",[$id]);
        
        if($comment['status']!='approve'){
            $db->update('comments',$id,['status'],['approve']);
        }
        else{
            $db->update('comments',$id,['status'],['seen']);
        }
        $this->redirectback();
    }
}

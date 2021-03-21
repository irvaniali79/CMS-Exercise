<?php
namespace AdminDashboard;
require_once ("Admin.class.php");
require_once (realpath(dirname(__FILE__)."/DataBase.php"));

use DataBase\DataBase;

class Article extends Admin{

    public function index(){
        $db = new Database();
        $articles= $db->select("SELECT * FROM `articles` ORDER BY `id` DESC;");
        require_once (realpath(dirname(__FILE__)."/../template/admin/articles/index.php"));
        
    }
    public function show($id){
        $db = new Database();
        $article= $db->select("SELECT * FROM `articles` WHERE (`id` = ?);",[$id])->fetch();
        require_once (realpath(dirname(__FILE__)."/../template/admin/articles/show.php"));
        

    }

    public function create(){
        $db =new Database();
        $categories= $db->select("SELECT * FROM `categories` ORDER BY `id` DESC;");
        require_once (realpath(dirname(__FILE__)."/../template/admin/articles/create.php"));   
    }
    public function store($request)
    {
        $db = new DataBase();
        if($request['cat_id']!=null){
            $request['image']=$this->saveimage($request['image'],'article-image');
            if($request['image']){
                $request=array_merge($request,array('user_id'=>1));
                $db->insert('articles',array_keys($request),array_values($request));
                $this->redirect('article');
            }
            else $this->redirectback();
        }
        else{
            $this->redirectback();
        }

        
        $this->redirect('article');
    } 
    public function edit($id){
        $db = new Database();
        $article= $db->select("SELECT * FROM `articles` WHERE `id` = ?;",[$id])->fetch();
        require_once (realpath(dirname(__FILE__)."/../template/admin/articles/edit.php"));

    } 
    public function update($request,$id){
        $db = new Database();
        $db->update('articles',$id,array_keys($request),$request);
        $this->redirect('article');
    }
    public function delete($id){
        $db = new Database();
        $db->delete('articles',$id);
        $this->redirectback();
    }

}
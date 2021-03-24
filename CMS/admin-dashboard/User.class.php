<?php
namespace AdminDashboard;
require_once ("Admin.class.php");
require_once (realpath(dirname(__FILE__)."/DataBase.php"));
use DataBase\DataBase;

class User extends Admin{
    public function index(){
        $db = new Database();
        $users= $db->select("SELECT * FROM `users` ORDER BY `id` DESC;");
        require_once (realpath(dirname(__FILE__)."/../template/admin/users/index.php"));
        
    }
    public function permission($id){
        $db = new Database();
        $user= $db->select("SELECT * FROM `users` WHERE  `id`= ? ;",[$id])->fetch();
        if($user['permission']=='admin'){
            $db->update("users",$id,['permission'],['user']);
        }
        else{
            $db->update("users",$id,['permission'],['admin']);
        }
        $this->redirectback();

    }
    public function edit($id){
        $db = new Database();
        $user= $db->select("SELECT * FROM `users` WHERE `id` = ?;",[$id])->fetch();
        require_once (realpath(dirname(__FILE__)."/../template/admin/users/edit.php"));
    }
    public function update($request,$id){
        $db = new Database();
        $db->update('users',$id,array_keys($request),$request);
        $this->redirect('user');
    }
    
    public function delete($id){
        $db = new Database();
        $db->delete('users',$id);
        $this->redirectback();
    }
}
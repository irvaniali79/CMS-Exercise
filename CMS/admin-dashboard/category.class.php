<?php
namespace AdminDashboard;

require_once("Admin.class.php");
require_once(realpath(dirname(__FILE__)."/DataBase.php"));
use DataBase\DataBase;

class Category extends Admin{
    public function index(){
        $db = new Database();
        $category= $db->select("SELECT * FROM `categories` ORDER BY `id` DESC;");

    }
    public function show($id){
        $db = new Database();
        $category= $db->select("SELECT * FROM `categories` WHERE (`id` = ?);",[$id])->fetch();
        

    }

    public function create(){
        
    }
    public function store($request)
    {
        $db = new DataBase();
        $db->insert('categories',array_keys($request),array_values($request));

    } 
    public function edit($id){
        $db = new Database();
        $category= $db->select("SELECT * FROM `categories` WHERE (`id` = ?);",[$id])->fetch();

    } 
    public function update($request,$id){
        $db = new Database();
        $db->update('categories',$id,array_keys($request),$request); 
    }
    public function delete($id){
        $db = new Database();
        $db->delete('categories',$id);

    }
    


}
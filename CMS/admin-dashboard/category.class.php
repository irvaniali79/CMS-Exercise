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
        
    }

    public function create(){

    }
    public function store($request)
    {

    } 
    public function edit($id){

    } 
    public function update($id){

    }
    public function delete(){

    }
    


}
<?php
namespace AdminDashboard;
require_once ("Admin.class.php");
require_once (realpath(dirname(__FILE__)."/DataBase.php"));

use DataBase\DataBase;

class Menu extends Admin
{
    public function index(){
        $db = new Database();
        $menus= $db->select("SELECT * FROM `menus` ORDER BY `id` DESC;");
        require_once (realpath(dirname(__FILE__)."/../template/admin/menus/index.php"));
        
    }
    public function show($id){
        $db = new Database();
        $menu= $db->select("SELECT * FROM `menus` WHERE (`id` = ?);",[$id])->fetch();
        require_once (realpath(dirname(__FILE__)."/../template/admin/menus/show.php"));
        

    }

    public function create(){
        $db =new Database();
        $menus= $db->select("SELECT * FROM `menus` WHERE `parent_id` IS NULL;")->fetchAll();
        require_once (realpath(dirname(__FILE__)."/../template/admin/menus/create.php"));   
    }
    public function store($request)
    {
        $db = new DataBase();
        $db->insert('menus',array_keys(array_filter($request)),array_filter(array_values($request)));
        $this->redirect('menu');
    } 
    public function edit($id){
        $db =new Database();
        $menus= $db->select("SELECT * FROM `menus` WHERE `parent_id` IS NULL;")->fetchAll();
        $menu= $db->select("SELECT * FROM `menus` WHERE (`id` = ?);",[$id])->fetch();
        require_once (realpath(dirname(__FILE__)."/../template/admin/menus/edit.php"));   
        
    } 
    public function update($request,$id){
        $db = new Database();
        $db->update('menus',$id,array_keys($request),$request);
        $this->redirect('menu');
    }
    public function delete($id){
        $db = new Database();
        $menu=$db->select("SELECT * FROM `menus` WHERE `id` = ? ;",[$id])->fetch();
        $this->removeimage($menu['image']);
        $db->delete('menus',$id);
        $this->redirectback();
    }
}
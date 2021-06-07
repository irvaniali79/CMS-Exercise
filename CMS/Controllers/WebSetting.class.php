<?php
namespace AdminDashboard;
require_once ("Admin.class.php");
require_once (realpath(dirname(__FILE__)."/DataBase.php"));
use DataBase\DataBase;
class WebSetting extends Admin {
    public function index(){
        $db=new DataBase();
        $setting=$db->select("SELECT * FROM `websetting` ;")->fetch();
        require_once (realpath(dirname(__FILE__)."/../template/admin/web-setting/index.php"));
    }
    public function set(){
        $db=new DataBase();
        $setting=$db->select("SELECT * FROM `websetting` ;")->fetch();
        require_once (realpath(dirname(__FILE__)."/../template/admin/web-setting/set.php"));
    }
    public function store($request){
        $db=new DataBase();
        $setting=$db->select("SELECT * FROM `websetting` ;")->fetch();
        if($request['logo']['tmp_name']!=""){
            $request['logo'] = $this->saveImage($request['logo'],"setting" ,"logo");
            
        }
        else 
        {
            unset($request['logo']);
        }
        if($request['icon']['tmp_name']!=""){
            $request['icon'] = $this->saveImage($request['icon'],"setting" ,"icon");
        }
        else
        {
            unset($request['icon']);
        }
        if($setting!=null){
            $db->update('websetting',$setting['id'],array_keys($request),$request);
        }
        else{
            $db->insert('websetting',array_keys($request),$request);
        }
        $this->redirect('web-setting');

    }
}
<?php
require_once ("admin-dashboard/category.class.php");
require_once ("admin-dashboard/CreateDB.php");
require_once ("admin-dashboard/Article.class.php");
require_once ("admin-dashboard/Menu.class.php");
require_once ("admin-dashboard/WebSetting.class.php");
require_once ("admin-dashboard/User.class.php");
require_once ("admin-dashboard/Auth.class.php");


use AdminDashboard\Category;
use AdminDashboard\Article;
use AdminDashboard\WebSetting;
use AdminDashboard\User;
use AdminDashboard\Menu;
use AdminDashboard\Auth;
use DataBase\CreateDB;



// $createDB= new CreateDB();
// $createDB->run();


function uri($uri,$class,$method,$requestMethod='GET')
{
    $values=array();
    $subUris=explode('/',$uri);
    $request_Uri=array_slice(explode('/',$_SERVER['REQUEST_URI']),3);
    if($request_Uri[0]=='' or $request_Uri=='/'){
        $request_Uri[0]='home';
    }
    $break=false;
    if(sizeof($request_Uri)==sizeof($subUris) and $_SERVER['REQUEST_METHOD']==$requestMethod){
        foreach(array_combine($subUris,$request_Uri) as $subUri=>$request){
            if($subUri[0]=="{" and $subUri[strlen($subUri)-1]=="}"){
                array_push($values,$request);
            }
            else if ($subUri!=$request){
                $break=true;
                break;
            }
        }
    }
    else $break=true;

    if(!$break)
    {
        $class="AdminDashboard\\".$class;
        $object = new $class;
        if(sizeof([$values])>0){
            if($requestMethod=="POST" ){
                if( isset($_FILES)){
                    $request=array_merge($_POST,$_FILES);
                    $object->$method($request,implode(',',$values));

                }
                else
                {
                    $object->$method($_POST,implode(',',$values));

                }  
            }
            else{
               
                $object->$method(implode(',' , $values));
            }   

        }
        else{
            if($requestMethod=="POST" ){
                if(isset($_FILES)){
                    $request=array_merge($_POST,$_FILES);
                    $object->$method($request);

                }
                else{
                    $object->$method($_POST);
                }  
            }   
            else{
                $object->$method();
            }   
        }

    }
    else{

    }
}

//category Route

uri('category','Category','index');
uri('category/show/{id}','Category','show');
uri('category/edit/{id}','Category','edit');
uri('category/delete/{id}','Category','delete');
uri('category/update/{id}','Category','update','POST');
uri('category/store','Category','store','POST');
uri('category/create','Category','create');


//Article Route

uri('article','Article','index');
uri('article/show/{id}','Article','show');
uri('article/edit/{id}','Article','edit');
uri('article/delete/{id}','Article','delete');
uri('article/update/{id}','Article','update','POST');
uri('article/store','Article','store','POST');
uri('article/create','Article','create');

//Menu Route


uri('menu','Menu','index');
uri('menu/show/{id}','Menu','show');
uri('menu/edit/{id}','Menu','edit');
uri('menu/delete/{id}','Menu','delete');
uri('menu/update/{id}','Menu','update','POST');
uri('menu/store','Menu','store','POST');
uri('menu/create','Menu','create');

//WebSetting Route


uri('web-setting','WebSetting','index');
uri('web-setting/store','WebSetting','store','POST');
uri('web-setting/set','WebSetting','set');

//Users Route

uri('user','User','index');
uri('user/edit/{id}','User','edit');
uri('user/update/{id}','User','update','POST');
uri('user/delete/{id}','User','delete');
uri('user/permission/{id}','User','permission');

//Authtenthication Route

uri('login','Auth','login');
uri('check-login','Auth','checklogin','POST');
uri('register','Auth','register');
uri('register-store','Auth',"store",'POST');
uri('logout','Auth','logout');
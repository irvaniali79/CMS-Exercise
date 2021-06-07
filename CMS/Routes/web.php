<?php

require_once ("admin-dashboard/category.class.php");
require_once ("admin-dashboard/CreateDB.php");
require_once ("admin-dashboard/Article.class.php");
require_once ("admin-dashboard/Menu.class.php");
require_once ("admin-dashboard/WebSetting.class.php");
require_once ("admin-dashboard/User.class.php");
require_once ("admin-dashboard/Auth.class.php");
require_once ("admin-dashboard/Home.class.php");
require_once ("admin-dashboard/Comment.class.php");
require_once ("admin-dashboard/Dashboard.class.php");


use AdminDashboard\Category;
use AdminDashboard\Comment;
use AdminDashboard\Dashboard;
use AdminDashboard\Article;
use AdminDashboard\WebSetting;
use AdminDashboard\User;
use AdminDashboard\Menu;
use AdminDashboard\Auth;
use AdminDashboard\Home;
use DataBase\CreateDB;

//category Route
require("../vendor/fecade/uri.php");

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
uri('register/store','Auth',"store",'POST');
uri('logout','Auth','logout');

//Comments Route


uri('comment','Comment','index');
uri('comment/{id}','Comment','show');
uri('comment/approve/{id}','Comment','approve');

//Dashboard Route

uri('admin','Dashboard','index');

//Home Route

uri('home','Home','index');
uri('show-article/{id}','Home','show');
uri('show-category/{id}','Home','category');
uri('comment-store','Home',"commentstore",'POST');


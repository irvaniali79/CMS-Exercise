<?php
require_once ("admin-dashboard/category.class.php");
require_once ("admin-dashboard/CreateDB.php");
use AdminDashboard\Category;
use DataBase\CreateDB;

// $createDB= new CreateDB();
// $createDB->run();

//category Route

uri('category','Category','index');
uri('category/show/{id}','Category','show');
uri('category/edit/{id}','Category','edit');
uri('category/delete','Category','delete');
uri('category/update/{id}','Category','update');
uri('category/store','Category','store','POST');
uri('category/create','Category','create');





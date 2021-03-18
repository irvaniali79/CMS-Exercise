<?php
namespace AdminDashboard;
class Admin{
    protected function redirect($url)
    {
        $protocol=stripos( $_SERVER['SERVER_PROTOCOL'],'https')===true ? "https://":"http://";
        header("Location:".$protocol.$_SERVER['HTTP_HOST']."/www/CMS/".$url);


    }
    protected function redirectback(){
        header("Location: ".$_SERVER['HTTP_REFERER']);
    }

}
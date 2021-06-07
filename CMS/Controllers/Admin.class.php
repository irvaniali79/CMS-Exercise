<?php
namespace AdminDashboard;
class Admin{
    public function __construct()
    {   
        $auth = new Auth();
        $auth->checkadmin();
        
    }
    protected function redirect($url)
    {
        $protocol=stripos( $_SERVER['SERVER_PROTOCOL'],'https')===true ? "https://":"http://";
        header("Location:".$protocol.$_SERVER['HTTP_HOST']."/www/CMS/".$url);


    }
    protected function redirectback(){
        header("Location: ".$_SERVER['HTTP_REFERER']);
    }

    protected function saveimage($image ,$imagePath ,$imageName=NULL){
        if($imageName){
            $imageName =$imageName .".".substr($image['type'],6,strlen($image["type"]));

        }
        else{
            $imageName=date('Y-m-d-H-i-s').".".substr($image['type'],6,strlen($image['type']));
        }
        $imageTemp=$image['tmp_name'];
        $imagePath="public/".$imagePath."/";
        if(is_uploaded_file($imageTemp)){
            if(move_uploaded_file($imageTemp,$imagePath.$imageName)){
                return $imagePath.$imageName;
            }
            else{
                return false;
            }

        }
        else {
            return false;
        }

    } 
    protected function removeimage($path){
        $Path = $_SERVER['DOCUMENT_ROOT']."www/CMS/".$path;
        unlink($path);
    }
}
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php $setting['title']?></title>


    <link href="http://localhost/www/CMS/public/css/app/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

</head>
<body>
<section class="app">
    <header>
        <nav class="header">
            <img class="header-logo" src="http://localhost/www/CMS/public/setting/logo.png" alt="">
            <button class="header-menu-burger" onclick="showMenu()" type="button"><i class="fas fa-bars"></i></button>
            <ul class="header-menu" id="menu">
                <?php foreach($menus as $menu){?>
                    <li class="header-menu-item">
                    <?php if( $menu['parent_id']==null){ ?> 
                    <a class="header-menu-item-link"  href="<?php echo $menu['url'] ?>"><?php echo $menu['name']?></a>
                    <?php }?>
                    <?php if($menu['submenus_count']>0){?>
                        <span>
                            <?php foreach($subMenus as $submenu){?>
                                <?php if($submenu['parent_id']==$menu['id']){?>
                                    <a href="<?php echo $submenu['url']?>"><?php echo $submenu['name']?></a>
                                <?php }
                            } ?>
                        </span>
                    <?php }?>
                    </li>

                <?php 
                }?>
                    
            </ul>
            <section class="clear-fix"></section>
        </nav><!--end of navbar-->
    </header><!--end of header-->
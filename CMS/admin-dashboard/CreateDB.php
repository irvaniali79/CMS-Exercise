<?php
namespace DataBase;
require_once(realpath(dirname(__FILE__)."/DataBase.php"));


class CreateDB extends Database
{
    private $createTableQueries=array(
        "CREATE TABLE `categories` (
            `id` int(11) NOT NULL AUTO_INCRIMENT,
            `name` varchar(200) COLLATE utf8_persian_ci NOT NULL,
            `create_at` datetime NOT NULL,
            `update_at` datetime DEFAULT,
            PRIMARY KEY (`id`)
        )ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;",
        
        "CREATE TABLE `users` (
            `id` int(11) NOT NULL AUTO_INCRIMENT,
            `username` varchar(100) NOT NULL COLLATE utf8_persian_ci NOT NULL,
            `email` varchar(100) NOT NULL COLLATE utf8_persian_ci NOT NULL,
            `password` varchar(100) NOT NULL COLLATE utf8_persian_ci NOT NULL,
            `permission` enum('user','admin') COLLATE utf8_persian_ci NOT NULL DEFAULT 'user',
            `create_at` datetime NOT NULL,
            `update_at` datetime DEFAULT,
            PRIMARY KEY (`id`),
            UNIQUE KEY email (`email`)
        )ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;",

        "CREATE TABLE `articels` (
            `id` int(11) NOT NULL AUTO_INCRIMENT,
            `title` varchar(200) COLLATE utf8_persian_ci NOT NULL,
            `summary` text COLLATE utf8_persian_ci NOT NULL,
            `body` text COLLATE utf8_persian_ci NOT NULL,
            `view` int (11) NOT NULL DEFAULT '0',
            `user_id` int(11) NOT NULL ,
            `cat_id` int(11) NOT NULL ,
            `image` varchar(200) COLLATE utf8_persian_ci NOT NULL,
            `status` enum('disable','enable') COLLATE utf8_persian_ci NOT NULL DEFAULT 'disable',
            `create_at` datetime NOT NULL,
            `update_at` datetime DEFAULT,
            PRIMARY KEY (`id`),
            FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`)  ON DELETE CASCADE ON UPDATE CASCADE,
            FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)  ON DELETE CASCADE ON UPDATE CASCADE

        )ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;",

        "CREATE TABLE `comments` (
            `id` int(11) NOT NULL AUTO_INCRIMENT,
            `user_id` int(11) NOT NULL ,
            `comment` text COLLATE utf8_persian_ci NOT NULL,
            `article_id` int(11) NOT NULL ,
            `status` enum('disable','enable') COLLATE utf8_persian_ci NOT NULL DEFAULT 'disable',
            `create_at` datetime NOT NULL,
            `update_at` datetime DEFAULT,
            FOREIGN KEY (`article_id`) REFERENCES `articels` (`id`)  ON DELETE CASCADE ON UPDATE CASCADE,
            FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)  ON DELETE CASCADE ON UPDATE CASCADE
        )ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;",

        "CREATE TABLE `menus` (
            `id` int(11) DEFAULT NULL AUTO_INCRIMENT,
            `name` varchar(200) COLLATE utf8_persian_ci NOT NULL,
            `url` varchar(300) COLLATE utf8_persian_ci NOT NULL,
            `parent_id` int(11) NOT NULL ,
            `create_at` datetime DEFAULT NULL,
            `update_at` datetime DEFAULT,
            PRIMARY KEY (`id`),
            FOREIGN KEY (`parent_id`) REFERENCES `menus` (`id`)  ON DELETE CASCADE ON UPDATE CASCADE

        )ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;",

        "CREATE TABLE `websetting` (
            `id` int(11) DEFAULT NULL AUTO_INCRIMENT,
            `title` text COLLATE utf8_persian_ci DEFAULT NULL,
            `description` text COLLATE utf8_persian_ci DEFAULT NULL,
            `keywords` text COLLATE utf8_persian_ci DEFAULT NULL,
            `logo` text COLLATE utf8_persian_ci DEFAULT NULL,
            `icon` text COLLATE utf8_persian_ci DEFAULT NULL,
            `create_at` datetime DEFAULT NULL,
            `update_at` datetime DEFAULT,
            PRIMARY KEY (`id`)
        )ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;",

        );

    private $tableInitializes = array(
        ['table'=>'users','fields'=>['username','email','password','permission'],
        'value'=>['okabe','irvaniali79@gmail.com','12345678','admin']]
    );
    public function run()
    {
        foreach($this->createTableQueries as $createTableQueries)
        {
            $this->createTable($createTableQueries);
        }
        foreach($this->tableInitializes as $tableInitialize)
    }

}
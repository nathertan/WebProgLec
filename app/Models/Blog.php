<?php

namespace App\Models;


class Blog {
    private static $data = [
        [
            "title" => "Web Programming",
            "author" => "By: Nathanael Dihyan",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas fugiat esse recusandae. Praesentium quos consequatur repellat, atque, laborum sequi officiis a maxime ipsam distinctio tenetur fuga. Molestias ex at fugiat",
            "slug" => "title-1"
        ],
        [
            "title" => "Laravel",
            "author" => "Cyanta",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas fugiat esse recusandae. Praesentium quos consequatur repellat, atque, laborum sequi officiis a maxime ipsam distinctio tenetur fuga. Molestias ex at fugiat",
            "slug" => "title-2"
        ]
    ];

    public static function all(){
        return collect(self::$data);
    }

    public static function traverse($slug){
        $content = self::$data;
        $arr = [];
        foreach($content as $show){
            if($slug === $show["slug"]){
                $arr = $show;
            }
        }
        return $arr;
    } 
}


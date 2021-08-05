<?php
namespace real_blog\Searcher;
session_start();
class page
{
    public static function Head()
    {
        return ["Assets/include/head.php"];
    }
    public static function HeaderLink()
    {
    }
    public static function include()
    {
            return [
                "views/searcher.php",
                "Assets/include/scripts.php"
            ];
    }
    public static function FooterLink()
    {
            return ["./Assets/js/main.js",
                    "./Assets/js/Searcher.js"
        ];
    }
}
include './back-end/pageCreator/searcher.php';
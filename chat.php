<?php
namespace real_blog\index;


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
                "views/chat.php",
                "Assets/include/scripts.php"
            ];
    }
    public static function FooterLink()
    {
            return ["./Assets/js/main.js"];
    }
}
include './back-end/pageCreator/IndexPage.php';


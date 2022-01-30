<?php
namespace Classes;



//Req - Requvest rövidités, oldal kéréseket kezeli.
class Req{
    //Get eljárás name adatagot tisztitott(SQL injectiontől véd) formában adja vissza ha nem üres.
    public static function Get($name){
        if( isset($_GET[$name])){
         return htmlspecialchars($_GET[$name]);
        }
        return null;
    }

    public static function GetPage(){
        $page = self::Get("page");
        if (!$page) $page = "home";
        return $page;
    }
}
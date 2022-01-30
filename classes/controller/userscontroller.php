<?php
namespace Classes\Controller;

use Classes\Module;
use Classes\View\UsersView;

class UsersController{
    //Main fügvény meghívja a View fügvényét és kellő értékeket továbbitsa megjelenítésvéget(adatbázis lekérés)
    public static function Main(){
        UsersView::ShUsers(Module\Db::Select('users', 'users.id, users.name'));
    }
}
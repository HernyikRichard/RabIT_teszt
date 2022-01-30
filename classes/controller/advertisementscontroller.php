<?php
namespace Classes\Controller;

use Classes\Module;
use Classes\View\AdvertisementsView;

class AdvertisementsController{
    //Main fügvény meghívja a View fügvényét és kellő értékeket továbbitsa megjelenítésvéget(adatbázis lekérés)
    public static function Main(){
        AdvertisementsView::ShAdvertisements(Module\Db::Select(
            'advertisements, users',
            'advertisements.id AS id, users.name AS name, advertisements.title AS title',
            'users.id = advertisements.userid'));
    }
}
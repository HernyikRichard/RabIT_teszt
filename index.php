<?php

require_once 'classes/autoload.php';

//névtér használata Page, Controller és Request.
use Classes\Page;
use Classes\Req;
use Classes\Controller;

$page = Req::GetPage();

//oldal felső részének a betőltése, külön kezelt $page adat tag tárólja az oldal Title értékét.
Page::ShowBegin(ucfirst($page));

//oldal routing kidolgozása, 3 oldal home-> ez az index, useres -> ez az users listázó oldal és
// advertisements itt található a hírdetések, illetve egy nyelő ami a nem létező hreferenciákat kezeli
switch ($page){
    case "home":
        Controller\PageController::Main();
        break;
    case "users":
        Controller\UsersController::Main();
        break;
    case "advertisements":
        Controller\AdvertisementsController::Main();
        break;
    default:
        Controller\PageController::Main($page);
}

//oldal alsó részének a betőltése.
Page::ShowEnd();
?>
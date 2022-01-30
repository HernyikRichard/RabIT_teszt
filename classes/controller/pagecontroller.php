<?php
namespace Classes\Controller;

class PageController{

    //Oldalon megjelitő adatok kiírása, illetve rossz oldal esetén "hiba szöveg" megjelenítése.
    public static function Main($page=null){
        if ($page) echo '<div class="box">ez az oldal nem elérhető</div>';
        else echo '<div class="box">Készítette Hernyik Richárd 2022 </div>';
    }
}
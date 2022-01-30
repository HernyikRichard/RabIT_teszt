<?php
namespace Classes;
//Html oldal "törzs" részét reprezentálja
class Page{
    //oldal felső részét reprezentálja, title adattag beállitja az oldal ttilejet
    public static function ShowBegin($title){
        echo '
        <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <title>'.$title.'</title>
                <link rel="stylesheet" href="res/style.css">
            </head>
            <body>
            <ul>
                <li><a href="?page=home">Home</a></li>
                <li><a href="?page=users">Users</a></li>
                <li><a href="?page=advertisements">Advertisements</a></li>
            </ul>
            
            <main>
        ';

    }
    //oldal alsó részét reperzentálja
    public static function ShowEnd(){
        echo '
            </main>
            </body>
            </html>
        ';
    }
}

<?php
namespace Classes\View;

//Advertisemen oldalnak a nézetét, lényegi oldalát reprezentáló kódrész(HTML).
class AdvertisementsView{
    public static function ShAdvertisements($elem){
        echo '
    <div class="box">
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Title</th>
            </tr>
';
        //Controllerből kapot adat sorokat iterálja végig.
        foreach ($elem as $ad){
            echo '
            <tr>
                <td>'.$ad['id'].'</td>
                <td>'.$ad['name'].'</td>
                <td>'.$ad['title'].'</td>
            </tr>';
        }
        echo '</table></div>';
    }
}
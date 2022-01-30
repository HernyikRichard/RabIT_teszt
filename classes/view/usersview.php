<?php
namespace Classes\View;

//user oldalnak a nézetét, lényegi oldalát reprezentáló kódrész(HTML).
class UsersView{
    public static function ShUsers($elem){
        echo '
    <div class="box">
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
';
        //Controllerből kapot adat sorokat iterálja végig.
        foreach ($elem as $user){
            echo '
            <tr>
                <td>'.$user['id'].'</td>
                <td>'.$user['name'].'</td>
            </tr>';
        }

        echo '</table></div>';

    }
}
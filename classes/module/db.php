<?php
namespace Classes\Module;
//Adatbázis reprezentáló osztály.
class Db{
    private static $pdo = null;
    // Adatbázis kapcsolatott létrehozó fügvény ami paraméterből kapot sql utasítást végrehajtja és kapot sorokat vissza adja.
    public static function Query($sql, $params = [])
    {
        if (!self::$pdo)
        {
            self::$pdo = new \PDO("mysql:host=localhost;dbname=db; charset=utf8mb4","Rihard","valami");
        }
        $query = self::$pdo -> prepare($sql);
        $query->execute($params);

        return $query;
    }
    //szelektáló fügvény adatbázis lekérést készít elő és adja vissza Query meghívásával.
    public static function Select($table, $tag=null, $where = null){
        $sql = "SELECT ";

        if ($tag) $sql.=($tag." FROM ".$table); else $sql.="* FROM ".$table;
        if ($where) $sql.= (" WHERE ". $where);

        $querry = self::Query($sql);
        return $querry->fetchAll(\PDO::FETCH_ASSOC);
    }

}
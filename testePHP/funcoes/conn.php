<?php

class DB {
    static $conn;

    static function getInstance () {
        if (DB::$conn) return DB::$conn;

        DB::$conn = new PDO("mysql:host=localhost;dbname=dados", "root", "");

        return DB::$conn;
    }
}
?>
<?php
class DB{
    static $db = null;
    static function getDB(){
        if(!self::$db){
            $conn = new PDO("mysql:host=localhost;dbname=asdasdasd;charset=utf8mb4", "root", "", [19 => 5, 3 => 2]);
            self::$db = $conn;
        }
        return self::$db;
    }
    static function exec($query, $params = []){
        $stmt = self::getDB()->prepare($query);
        $stmt->execute($params);
        return true;
    }
    static function fetch($query, $params = []){
        $stmt = self::getDB()->prepare($query);
        $stmt->execute($params);
        return $stmt->fetch(PDO::FETCH_ASSOC); // 결과를 연관 배열로 반환
    }
    
    static function fetchAll($query, $params = []){
        $stmt = self::getDB()->prepare($query);
        $stmt->execute($params);
        return $stmt -> fetchAll();
    }
    static function getUser($userid) {
        $query = "SELECT * FROM member WHERE id = ?";
        $result = self::fetch($query, [$userid]);
        return $result;
    }
}
?>
<?php
include_once '../config/db.php';
class Database {
    function getAssocResult($sql){
        $db = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASS, DB_NAME);
        $result = mysqli_query($db, $sql);
        $array_result = array();
        while($row = mysqli_fetch_assoc($result))
            $array_result[] = $row;

        mysqli_close($db);
        return $array_result;
    }

    function executeQuery($sql){
        $db = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASS, DB_NAME);
        $result = mysqli_query($db, $sql);
        mysqli_close($db);
        return $result;
    }
    function getGalleryElementBy($element = 'id', $var) {
        $result = '';
        switch ($element) {
            case 'id':
                $result = $this->getAssocResult("SELECT * FROM gallery WHERE gallery_id = $var");
                break;
            case 'title':
                $result = $this->getAssocResult("SELECT * FROM gallery WHERE gallery_title = $var");
                break;
        }
        return $result;
    }
    function getGalleryElements() {
        $result = $this->getAssocResult("SELECT * FROM gallery");
        return $result;
    }
    function getProducts($num = 1) {
        $result = $this->getAssocResult("SELECT * FROM product LIMIT $num");
        return $result;
    }
    function getProductsFromTo($from = 1, $to = 3) {
        $sql = "SELECT * FROM product  ORDER BY id ASC LIMIT {$from}, {$to}";
        $result = $this->getAssocResult($sql);
        return $result;
    }
}

$db = new Database();

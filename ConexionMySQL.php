<?php

class ConexionMySQL {

    public static function open() {
        date_default_timezone_set("America/Managua");
        $conn = new mysqli("localhost", "root", "", "books");
        if ($conn->connect_error) {
            echo "No se pudo conectar al servidor: ", $conn->connect_error;
        } else {
            $conn->set_charset("utf8");
            return $conn;
        }
    }

//    public static function close() {
//        $conn->close;
//    }
}

<?php
session_name(md5("newsesh();"));
session_start();
class db{
    const servername = "localhost"; 
    const username = "root";
    const password = "";
    const dbname = "dropshipp";
    // Create a connection
    static function conn(){
        $rr= new mysqli(self::servername, self::username, self::password, self::dbname);
        if($rr->connect_error){
            die("Connection err: ");
        }else{return $rr;}
    }
    static function stmt($stm){
        return mysqli_query(self::conn(), $stm);
    }
}
include_once('static/art/_functionItJe.php');
?>
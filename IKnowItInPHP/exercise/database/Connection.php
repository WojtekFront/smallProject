<?php

class Connection
{

    public static function makeConnection(){

        try {
            return new PDO('mysql:host=127.0.0.1;dbname=trening','root', '');
        } catch (PDOException $e){
            die($e->getMessage());
        }
    }
}


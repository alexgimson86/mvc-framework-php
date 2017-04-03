<?php

class Connection{

    public static function make(){
        try{
            return new PDO('mysql:host=localhost;dbname=todo', 'root','');
        }
        catch(PDOException $e){
            die($e->message());
        }
    }
}

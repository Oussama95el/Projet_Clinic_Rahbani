<?php
    class DB{
        static public function connect(){
            $db = new PDO("mysql:host=localhost;dbname=rahbani_clinic",
                          "root",
                          "");
            $db->exec("set names utf8");
            $db->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
            return $db;
        }
    }

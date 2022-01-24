<?php
    class Admin{

            static public function getAdmin($data){
                $username = $data['username'];
                try{
                    $db = DB::connect()->prepare('SELECT * FROM admin WHERE username = :username');
                    $db->execute(array(":username" => $username));
                    return $db->fetch(PDO::FETCH_OBJ);


                }catch(PDOException $ex){
                    return 'error ' . $ex->getMessage();
                }

            }
//            static public function createUser($data){
//                $db = DB::connect()->prepare('INSERT INTO admin (username ,password)
//                VALUES (:username , :password)');
//                $db->bindParam(':username',$data['username']);
//                $db->bindParam(':password',$data['password']);
//
//
//                if($db->execute()){
//                    return 'ok';
//                }else
//                    return 'error';
//            }

    }
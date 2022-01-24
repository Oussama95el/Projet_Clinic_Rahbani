<?php
    class Contact{
        static public function add($data){
            $db = DB::connect()->prepare('INSERT INTO contact (name ,type, message, email)
             VALUES (:name , :type, :message, :email)');
            $db->bindParam(':name',$data['name']);
            $db->bindParam(':type',$data['type']);
            $db->bindParam(':message',$data['message']);
            $db->bindParam(':email',$data['email']);

            if($db->execute()){
                return 'ok';
            }else
                return 'error';
        }
    }
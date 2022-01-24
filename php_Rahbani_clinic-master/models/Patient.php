<?php
    class Patient{
        static public function getAllPatients(){
            $db = DB::connect()->prepare('SELECT person_id, firstname ,lastname, birthday, email, phone FROM person WHERE type = "P"');
            $db->execute();
            $patients = $db->fetchAll();
            $db = null;
            return $patients;
        }
        static public function getOnePatient($data){
            try {
                $db = DB::connect()->prepare('SELECT person_id, firstname ,lastname, birthday, email, phone FROM person WHERE person_id = :person_id');
                $db->execute(array(":person_id" => $data['person_id']));
                $patient = $db->fetch(PDO::FETCH_OBJ);
                $db = null;
                return $patient;
            }catch (PDOException $ex){
                return $ex->getMessage();
            }



        }
        
         static public function add($data){
             $db = DB::connect()->prepare('INSERT INTO person (firstname ,lastname, birthday, email, phone, type) 
             VALUES (:firstname , :lastname, :birthday, :email, :phone, "P")');
             $db->bindParam(':firstname',$data['firstname']);
             $db->bindParam(':lastname',$data['lastname']);
             $db->bindParam(':birthday',$data['birthday']);
             $db->bindParam(':phone',$data['phone']);
             $db->bindParam(':email',$data['email']);

             if($db->execute()){
                 return 'ok';
             }else
                 return 'error';

         }

        static public function update($data){
            $db = DB::connect()->prepare('UPDATE person SET firstname = :firstname ,lastname = :lastname, birthday = :birthday, email = :email, phone =:phone 
            WHERE person_id = :person_id');
            //die(print_r($data));
            $db->bindParam(':firstname',$data['firstname']);
            $db->bindParam(':person_id',$data['person_id']);
            $db->bindParam(':lastname',$data['lastname']);
            $db->bindParam(':birthday',$data['birthday']);
            $db->bindParam(':phone',$data['phone']);
            $db->bindParam(':email',$data['email']);
//            die(print_r($db->execute()));
            if($db->execute()){
                return 'ok';
            }else
                return 'error';

        }

        static public function delete($data){
            $db = DB::connect()->prepare('DELETE FROM person 
            WHERE person_id = :person_id');
            $db->execute(array('person_id' => $data['person_id']));
            if($db->execute()){
                return 'ok';
            }else
                return 'error';
        }
    }


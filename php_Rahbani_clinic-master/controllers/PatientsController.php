<?php


    class PatientsController{
        public function getAllPatients(){
            return Patient::getAllPatients();
        }

        public function getOnePatient(){
                $data = array(
                    'person_id' => $_POST['person_id']
                );
                return Patient::getOnePatient($data);
        }

        public function addPatient(){
            if(isset($_POST['submit'])){
                $data = array(
                    'firstname' => $_POST['firstname'],
                    'lastname' => $_POST['lastname'],
                    'email' => $_POST['email'],
                    'phone' => $_POST['phone'],
                    'birthday' => $_POST['birthday']
                );
                $result = Patient::add($data);
                if($result !== 'ok'){
                    echo $result;
                } else{
                    Redirect::to('patient_dashboard');
                }
            }


        }

        public function updatePatient(){
            if(isset($_POST['submit'])){

                $data = array(
                    'person_id' => $_POST['person_id'],
                    'firstname' => $_POST['firstname'],
                    'lastname' => $_POST['lastname'],
                    'email' => $_POST['email'],
                    'phone' => $_POST['phone'],
                    'birthday' => $_POST['birthday']
                );
//                die(print_r($data));
                $result = Patient::update($data);
                if($result !== 'ok'){
                    echo $result;
                } else{
                    Redirect::to('patient_dashboard');
                }
            }
        }

        public function deletePatient(){
            if(isset($_POST['person_id'])){

                $data = array(
                    'person_id' => $_POST['person_id']
                );
//                die(print_r($data));
                $result = Patient::delete($data);
                if($result !== 'ok'){
                    echo $result;
                } else{
                    Redirect::to('patient_dashboard');
                }
            }
        }
    }
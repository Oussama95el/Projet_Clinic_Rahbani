<?php
    class ContactController{
        public function addMessage(){
            if(isset($_POST['submit'])){
                $data = array(
                  'email' => $_POST['email'],
                  'message' => $_POST['message'],
                  'type' => $_POST['type'],
                  'name' => $_POST['name'],
                );
                $result = Contact::add($data);
                if($result !== 'ok'){
                    echo $result;
                } else{
                    Redirect::to('home');
                }
            }
        }
}
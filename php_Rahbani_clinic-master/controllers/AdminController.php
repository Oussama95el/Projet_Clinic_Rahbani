<?php
    class AdminController{

//        public function register(){
//            if(isset($_POST['submit'])){
//                $options = [
//                  'cost' => 12
//                ];
//                $password =password_hash($_POST['username'],PASSWORD_BCRYPT,$options);
//                $data = array(
//                    'username' => $_POST['username'],
//                    'password' => $password
//                );
//                $result = Admin::createUser($data);
//                if($result !== 'ok'){
//                    echo $result;
//                } else{
//                    header('location:'.BASE_URL.'dashboard');
//                }
//            }
//        }

        public function auth(){
            if(isset($_POST['submit'])){
                $data['username'] = $_POST['username'];
                $result = Admin::getAdmin($data);

                if($result->username === $_POST['username'] && sha1($_POST['password'])===$result->admin_password){

                    $_SESSION['username'] = $result->username;
                    Redirect::to('patient_dashboard');

                }else{
                    Redirect::to('login');
                }
            }
        }

}
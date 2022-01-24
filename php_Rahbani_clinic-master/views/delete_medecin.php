<?php

if(isset($_SESSION['username']) === false){
    Redirect::to('login');
}

if (isset($_POST['person_id'])) {
    $data = new MedecinsController();
    $data->deleteMed();
}

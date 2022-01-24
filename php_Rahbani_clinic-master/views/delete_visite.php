<?php

if(isset($_SESSION['username']) === false){
    Redirect::to('login');
}
if(isset($_POST['visite_id'])){
    $data=new VisitesController();
    $data->deletevisite();
}

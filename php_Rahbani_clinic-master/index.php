<?php
//    require_once('./views/includes/header.php');
    require_once('./autoload.php');
    require_once('./controllers/HomeController.php');

    $home = new HomeController();
    $pages = [
        'home',
        'login',
        'logout',
        'contact',
        'patient_dashboard',
        'add_patient',
        'update_patient',
        'delete_patient',
        'medecin_dashboard',
        'add_medecin',
        'update_medecin',
        'delete_medecin',
        'visite_dashboard',
        'add_visite',
        'update_visite',
        'delete_visite'
    ];

    if(isset($_GET['page'])){
        if(in_array($_GET['page'], $pages)){
            $page = $_GET['page'];
            $home->index($_GET['page']);
        }else{
            include('views/includes/404.php');
        }
    }else
        $home->index('home');

?>

<?php 
//    require_once('./views/includes/footer.php');

?>


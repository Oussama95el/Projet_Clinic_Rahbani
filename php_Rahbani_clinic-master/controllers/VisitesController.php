<?php
class VisitesController{
    public function getAllVisits(){
        return Visite::getAllVisits();
    }
    public function addVisite(){
        if (isset($_POST['submit'])){
            $data =array(
                'visite_date' => $_POST['visite_date'],
                'facture' => $_POST['facture'],
                'maladie' => $_POST['maladie'],
                'patient' => $_POST['patient'],
                'medecin' => $_POST['medecin']
            );
            $result = Visite::add($data);
            if($result !== 'ok'){
                echo $result;
            } else{
                Redirect::to('visite_dashboard');
            }
        }
    }
    public function getOneVisite(){
        $data = array(
            'visite_id'=>$_POST['visite_id']
        );
        return Visite::getOneVisite($data);
    }
    public function updateVisite(){
        if(isset($_POST['submit']))
        {
            $data =array(
                'visite_id'=>$_POST['visite_id'],
                'visite_date' => $_POST['visite_date'],
                'facture' => $_POST['facture'],
                'maladie' => $_POST['maladie'],
                'patient' => $_POST['patient'],
                'medecin' => $_POST['medecin']
            );
            $result = Visite::updateVisite($data);
            if($result !== 'ok'){
                echo $result;
            } else{
                Redirect::to('visite_dashboard');
            }
        }
    }
    public function deletevisite(){
        if(isset($_POST['visite_id']))
        {
            $data = array(
                'visite_id'=>$_POST['visite_id']
            );
            $result = Visite::deleteVisite($data);
            if($result !== 'ok'){
                echo $result;
            } else{
                Redirect::to('visite_dashboard');
            }
        }
    }
}






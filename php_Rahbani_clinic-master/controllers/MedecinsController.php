<?php

class MedecinsController
{
    public function getMedecins()
    {
        return medecin::getAllMedecin();
    }
    public function getOneMedecin()
    {
        $data = array(
            'person_id' => $_POST['person_id']
        );
        return Medecin::getOneMedecin($data);
    }
    public function addMedecin()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'birthday' => $_POST['birthday'],
                'firstname' => $_POST['firstname'],
                'lastname' => $_POST['lastname'],
                'specialite' => $_POST['specialite']
            );
            $result = medecin::addMedecin($data);
            if ($result !== 'ok') {
                echo $result;
            } else {
                Redirect::to('medecin_dashboard');
            }
        }
    }
    public function updateMedecin()
    {
        if (isset($_POST['submit'])) {

            $data = array(
                'person_id' => $_POST['person_id'],
                'firstname' => $_POST['firstname'],
                'lastname' => $_POST['lastname'],
                'specialite' => $_POST['specialite'],
                'birthday' => $_POST['birthday']
            );
            $result = medecin::update($data);
            if ($result !== 'ok') {
                echo $result;
            } else {
                Redirect::to('medecin_dashboard');
            }
        }
    }
    public function deleteMed()
    {
        if (isset($_POST['person_id'])) {
            $data = array(
                'person_id' => $_POST['person_id']

            );
            $result = medecin::deleteMedecin($data);
            if ($result !== 'ok') {
                echo $result;
            } else {
                Redirect::to('medecin_dashboard');
            }
        }
    }
}

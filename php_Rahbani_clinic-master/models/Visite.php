<?php
class Visite{
    static public function getAllVisits(){
        $db= DB::connect()->prepare('SELECT
        v.visite_id,
        v.visite_date,
        p1.firstname AS patient,
        p2.firstname as medecin,
        v.maladie,
        v.facture
        FROM person p1
        JOIN visite v ON v.patient = p1.person_id
        JOIN person p2 ON v.medecin = p2.person_id;
');
        $db->execute();
        $Visits=$db->fetchAll();
        $db= null;
        return $Visits;
    }
    static public function getOneVisite($data){
        try{
            $db=DB::connect()->prepare('SELECT * FROM visite WHERE visite_id=:visite_id');
            $db->execute(array(":visite_id" =>$data["visite_id"]));
            $Visite=$db->fetch(PDO::FETCH_OBJ);
            $db=null;
            return $Visite;
        }
        catch (PDOException $ex){
            return $ex->getMessage();
        }
    }
    static public function add($data){
        $db=DB::connect()->prepare('INSERT INTO visite (visite_date ,facture ,maladie ,patient ,medecin ) 
         VALUES (:visite_date,:facture,:maladie,:patient,:medecin)' );
        $db->bindParam(':visite_date',$data['visite_date']);
        $db->bindParam(':facture',$data['facture']);
        $db->bindParam(':maladie',$data['maladie']);
        $db->bindParam(':patient',$data['patient']);
        $db->bindParam(':medecin',$data['medecin']);
        if($db->execute()){
            return 'ok';
        }else
            return 'error';
    }
    static public function updateVisite($data){
        $db=DB::connect()->prepare('UPDATE visite SET visite_date=:visite_date, facture=:facture, maladie=:maladie ,patient=:patient ,medecin=:medecin 
         WHERE visite_id = :visite_id');
        $db->bindParam(':visite_id',$data['visite_id']);
        $db->bindParam(':visite_date',$data['visite_date']);
        $db->bindParam(':facture',$data['facture']);
        $db->bindParam(':maladie',$data['maladie']);
        $db->bindParam(':patient',$data['patient']);
        $db->bindParam(':medecin',$data['medecin']);
        if($db->execute()){
            return 'ok';
        }else
            return 'error';

    }
    static public function deletevisite($data){
        $db=DB::connect()->prepare('DELETE FROM visite WHERE visite_id = :visite_id');
        $db->bindParam(':visite_id',$data['visite_id']);

        if($db->execute()){
            return 'ok';
        }else
            return 'error';

    }
}

?>
<?PHP

class medecin
{
    static public function getAllMedecin()
    {
        $db = DB::connect()->prepare('SELECT person_id, firstname ,lastname, birthday, specialite FROM person WHERE type="M"');
        $db->execute();
        $medecins = $db->fetchAll();
        $db = null;
        return $medecins;
    }
    static public function getOneMedecin($data){
        try {
            $db = DB::connect()->prepare('SELECT person_id, firstname ,lastname, birthday, specialite FROM person WHERE person_id = :person_id');
            $db->execute(array(":person_id" => $data['person_id']));
            $medecin = $db->fetch(PDO::FETCH_OBJ);
            $db = null;
            return $medecin;
        }catch (PDOException $ex){
            return $ex->getMessage();
        }



    }
    static public function addMedecin($data)
    {
        $db = DB::connect()->prepare('INSERT INTO person ( firstname ,lastname, birthday, specialite, type)
            VALUES ( :firstname, :lastname, :birthday, :specialite, "M")');
        $db->bindParam(':firstname', $data['firstname']);
        $db->bindParam(':lastname', $data['lastname']);
        $db->bindParam(':birthday', $data['birthday']);
        $db->bindParam(':specialite', $data['specialite']);

        if ($db->execute()) {
            return 'ok';
        } else {
            return 'error';
        }
    }
    static public function update($data)
    {
        $db = DB::connect()->prepare('UPDATE person SET firstname = :firstname ,lastname = :lastname, birthday = :birthday, specialite = :specialite 
        WHERE person_id = :person_id');
        $db->bindParam(':firstname', $data['firstname']);
        $db->bindParam(':person_id', $data['person_id']);
        $db->bindParam(':lastname', $data['lastname']);
        $db->bindParam(':birthday', $data['birthday']);
        $db->bindParam(':specialite', $data['specialite']);

        if ($db->execute()) {
            return 'ok';
        } else
            return 'error';
    }
    static public function deleteMedecin($data){
        $db = DB::connect()->prepare('DELETE FROM person WHERE person_id = :person_id');
        $db->bindParam(':person_id', $data['person_id']);

        if ($db->execute()){
            return 'ok';
        }else{
            return 'error';
        }

    }
}

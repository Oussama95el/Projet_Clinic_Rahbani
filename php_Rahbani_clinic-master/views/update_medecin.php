<?php

if(isset($_SESSION['username']) === false){
    Redirect::to('login');
}

if (isset($_POST['person_id'])) {
    $data = new MedecinsController();
    $medecin = $data->getOneMedecin();
}
if (isset($_POST['submit'])) {
    $data2 = new MedecinsController();
    $data2->updateMedecin();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo BASE_URL ?>styles/dashboard/form.css">
</head>

<body>
    <form method="post">
        <h2>Modifier medecin</h2>
        <div class="two-in-one">
            <div class="input1">
                <label>Nom*</label>
                <input type="text" name="lastname" value="<?php echo $medecin->lastname ?>" required>
            </div>
            <div class="input2">
                <label class="label2">Prénom*</label>
                <input name="firstname" type="text" value="<?php echo $medecin->firstname ?>" required>
            </div>
        </div>
        <div class="other-inputs">
            <label>Date de naissance*</label>
            <input name="birthday" type="date" value="<?php echo $medecin->birthday ?>" required>
            <label>Spécialité</label>
            <input name="specialite" type="text" value="<?php echo $medecin->specialite ?>" required>
        </div>
        <input type="hidden" name="person_id" value="<?php echo $medecin->person_id ?>">
        <input class="button" name="submit" type="submit" value="submit">
    </form>

</body>

</html>
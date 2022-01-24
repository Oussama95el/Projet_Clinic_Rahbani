<?php
//require_once '../bootstrap.php';

if(isset($_SESSION['username']) === false){
    Redirect::to('login');
}

if (isset($_POST['submit'])) {
    $data = new MedecinsController();
    $data->addMedecin();
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
        <h2>Ajouté medecin</h2>
        <div class="two-in-one">
            <div class="input1">
                <label>Nom*</label>
                <input type="text" name="lastname" required></input>
            </div>
            <div class="input2">
                <label class="label2">Prénom*</label>
                <input name="firstname" type="text" required></input>
            </div>
        </div>
        <div class="other-inputs">
            <label>Date de naissance*</label>
            <input name="birthday" type="date" required></input>
            <label>Spécialité</label>
            <input name="specialite" type="text" required></input>
        </div>
        <input class="button" name="submit" type="submit" value="submit"></input>
    </form>
</body>

</html>
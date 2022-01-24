<?php

    if(isset($_SESSION['username']) === false){
        Redirect::to('login');
    }

    if(isset($_POST['person_id'])){
            $data = new PatientsController();
            $patient = $data->getOnePatient();
    }
    if(isset($_POST['submit'])){
        $data2 = new PatientsController();
        $data2->updatePatient();
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo BASE_URL ?>styles/dashboard/form.css"></head>
<body>
    <form method="post">
        <h2>Modifier patient</h2>
        <div class="two-in-one">
            <div class="input1">
                <label>Nom*</label>
                <input name="lastname" type="text" value="<?php echo $patient->lastname ?>" required></div>
            <div class="input2">
                <label class="label2">Prénom*</label>
                <input name="firstname" type="text" value="<?php echo $patient->firstname ?>" required >
            </div>
        </div>
        <div class="other-inputs">
            <label>Date de naissance*</label>
            <input name="birthday" type="date" value="<?php echo $patient->birthday ?>" required>
            <label>Numéro du tele</label>
            <input name="phone" type="number" value="<?php echo $patient->phone ?>" required >
            <label>E-mail</label>
            <input name="email" type="email" value="<?php echo $patient->email ?>" required >

        </div>
        <input type="hidden" name="person_id" value="<?php echo $patient->person_id ?>">
        <input class="button" name="submit" type="submit" >
    </form>
</body>
</html>
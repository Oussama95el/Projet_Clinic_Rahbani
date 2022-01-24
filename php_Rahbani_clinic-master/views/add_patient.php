<?php
if(isset($_SESSION['username']) === false){
    Redirect::to('login');
}
    if(isset($_POST['submit'])){
        $data = new PatientsController();
        $data->addPatient();
    }
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="<?php echo BASE_URL ?>styles/dashboard/form.css">
</head>
<body>
        <form method="post">
            <h2>Ajouter patient</h2>
            <div class="two-in-one">
                <div class="input1">
                    <label for="lastname" >Nom*</label>
                    <input name="lastname" type="text" required/>
                </div>
                <div class="input2">
                    <label for="firstname" class="label2">Prénom*</label>
                    <input name="firstname" type="text" required/>
                </div>
            </div>
            <div class="other-inputs">
                <label for="birthday">Date de naissance*</label>
                <input name="birthday" type="date" required/>
                <label for="phone">Numéro du tele</label>
                <input name="phone" type="number" required/>
                <label for="email">E-mail</label>
                <input name="email" type="email" required/>
            </div>
            <input name="submit" class="button" type="submit" value="Ajoute"/>
        </form> 
</body>
</html>
<?php
if(isset($_SESSION['username']) === false){
    Redirect::to('login');
}
    if(isset($_POST['submit'])){
        $data = new VisitesController();
        $data->addVisite();
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajouter une visite</title>
    <link rel="stylesheet" href="<?php echo BASE_URL ?>styles/dashboard/form.css">
</head>
<body>
    <form method="post">
        <h2>Ajouté visite</h2>
        <div class="two-in-one">
            <div class="input1">
                <label for="patient">patient*</label>
                <input name="patient" type="text" required></input></div>
            <div class="input2">
                <label for="medecin" class="label2">medecin*</label>
                <input name="medecin" type="text" required></input>
            </div>
        </div>
        <div class="other-inputs">
            <label for="visite_date">Date de visite *</label>
            <input name="visite_date" type="date" required></input>
            <label for="maladie">Maladie</label>
            <input name="maladie" type="text" required></input>
            <label for="facture">Facture</label>
            <input name="facture" type="number" required ></input>
        </div>
        <input name="submit" class="button" type="submit" value="Ajoute"></input>
    </form>
</body>
</html>
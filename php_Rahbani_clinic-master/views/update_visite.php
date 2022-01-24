<?php

    if(isset($_SESSION['username']) === false){
        Redirect::to('login');
    }
    if(isset($_POST['visite_id'])){
        $data=new VisitesController();
        $visite=$data->getOneVisite();
    }
    if(isset($_POST['submit'])){
        $data2=new VisitesController();
        $data2->updateVisite();
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo BASE_URL?>styles/dashboard/form.css"></head>
</head>
<body>
    <form method="post">
    <h2>Modifier Visite</h2>
        <div class="two-in-one">
            <div class="input1">
                <label>patient*</label>
                <input name="patient" type="text" value="<?php echo $visite->patient ?>"required></input></div>
            <div class="input2">
                <label class="label2">medecin*</label>
                <input name="medecin" type="text" value="<?php echo $visite->medecin?>" required></input>
            </div>
        </div>
        <div class="other-inputs">
            <label>Date *</label>
            <input type="date" name="visite_date" value="<?php echo $visite->visite_date?>" required></input>
            <label>Maladie</label>
            <input type="text" name="maladie" value="<?php echo $visite->maladie?>" required></input>
            <label>Facture</label>
            <input type="number" name="facture" value="<?php echo $visite->facture?>" required ></input>
        </div>
        <input type="hidden" name="visite_id" value="<?php echo $visite->visite_id ?>">
        <input class="button" type="submit" name="submit" value="submit"></input>
    </form>
</body>
</html>
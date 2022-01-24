

<?php
//require_once '../bootstrap.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cabinet Rahbani</title>
    <meta name="description" content="Dr Rahbani est traumatoloque orthopédiste avec plus de 15 ands d'experience. "/>
    <link rel="icon" href="">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>styles/home/home.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

</head>
<body>

    <?php include 'includes/header.php'?>

    <main>
        <div class="heading">
            <p class="pre-heading">
                Votre santé est notre priorité
            </p>
            <h1> 
                Cabinet Rahbani
            </h1>
            <p class="post-heading">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            </p>
        </div>
        <div class="img">
            <img src="<?php echo BASE_URL ?>images/doctor3.png" alt="hero-img">
        </div>
    </main>


    <section class="section-1">
        <div class="card">
            <div class="icon">
                <img src="<?php echo BASE_URL ?>images/icons/Trauma-icon.png" alt="trauma" >
            </div>
            <h2>
                Traumatologie
            </h2>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply .
            </p>
            <div class="arrow-container">
                <p>Lire Plus... </p>
                <img src="<?php echo BASE_URL ?>images/icons/Arrow 1.png" alt="arrow" class="arrow">
            </div>
        </div>
        <div class="card">
            <div class="icon">
                <img src="<?php echo BASE_URL ?>images/icons/Physio-icon.png" alt="physio" >
            </div>
            <h2>
                Physiothérapie
            </h2>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply .
            </p>
            <div class="arrow-container">
                <p>Lire Plus... </p>
                <img src="<?php echo BASE_URL ?>images/icons/Arrow 1.png" alt="arrow" class="arrow">
            </div>        </div>
        <div class="card">
            <div class="icon">
                <img src="<?php echo BASE_URL ?>images/icons/Chirurgie-icon.png" alt="chirurgie" >
            </div>
            <h2>
                Chiruregie
            </h2>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply .
            </p>
            <div class="arrow-container">
                <p>Lire Plus... </p>
                <img src="<?php echo BASE_URL ?>images/icons/Arrow 1.png" alt="arrow" class="arrow">
            </div>        </div>
        <div class="card">
            <div class="icon">
                <img src="<?php echo BASE_URL ?>images/icons/suivie-icon.png" alt="suivie" >
            </div>
            <h2>
                Suivie
            </h2>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply .
            </p>
            <div class="arrow-container">
                <p>Lire Plus... </p>
                <img src="<?php echo BASE_URL ?>images/icons/Arrow 1.png" alt="arrow" class="arrow">
            </div>        </div>
    </section>

    <section class="section-2">
        <div class="color-overlay"></div>

        <div class="heading">
            <h2>MEMBRE DE NOTRE ÉQUIPE</h2>
            <img src="<?php echo BASE_URL ?>images/icons/doctor-icon.png" alt="doctor-icon">
            <p>Medical Doctor with Best Team Bla BLa Going on here</p>
        </div>

        <div class="doctor-cards">
            <div class="doc-card">
                <img class="doc-1" src="<?php echo BASE_URL ?>images/doctor3.png" alt="doctor-1">
                <div class="doctor-card-heading">
                    <h2>Dr. Maria Sharapova</h2>
                    <p>Physiothérapiste</p>
                </div>
            </div>
            <div class="doc-card">
                <img class="doc-2" src="<?php echo BASE_URL ?>images/doctor 2.png" alt="doctor-1">
                <div class="doctor-card-heading">
                    <h2>Dr. Rahbani Rafik</h2>
                    <p>Traumatologue</p>
                </div>
            </div>
            <div class="doc-card">
                <img class="doc-3" src="<?php echo BASE_URL ?>images/doctor.png" alt="doctor-1">
                <div class="doctor-card-heading">
                    <h2>Dr. Maria Sharapova</h2>
                    <p>Orthodopédiste</p>
                </div>
            </div>
        </div>

    </section>
    <section class="section-3">
        <div class="color-overlay"></div>
        <div class="heading">
            <h2>We’d Like To Hear From You</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <div class="buttons">
                <a class="get-started" href="#">Contact Us</a>
            </div>
            
        </div>
    </section>

    <?php include 'includes/footer.php'?>


    <script src="<?php echo BASE_URL ?>scripts/script.js"></script>
</body>
</html>
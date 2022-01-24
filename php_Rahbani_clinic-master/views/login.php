<?php
    if(isset($_SESSION['username']) ){
        Redirect::to('patient_dashboard');
    }

    if(isset($_POST['submit'])){

        $loginAdmin = new AdminController();
        $loginAdmin->auth();
    }

?>

<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>S'authentifier</title>
    <link rel="stylesheet" href="<?php echo BASE_URL ?>styles/login/loginStyle.css"/>
    <link
            href="//db.onlinewebfonts.com/c/0ec2c5a68270757c2200d436b6904b60?family=MFRooneySans-Regular"
            rel="stylesheet"
            type="text/css"
    />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
</head>
<body>
<?php include 'includes/header.php'?>

<h1 class="mobile-title">Cabinet Rahbani</h1>
<div class="container-login">
    <div class="slogan">
        <img
                class="container-logo"
                src="<?php echo BASE_URL ?>images/logo/Logo1.png"
                alt="Logo Cabinet Rahbani"
        />
        <h1 class="container-title">Cabinet Rahbani</h1>
    </div>
    <form method="post" >
        <div class="form-input">
            <label for="username">Nom d'utilisateur</label>
            <input
                    class="login-input"
                    type="text"
                    name="username"
                    placeholder=""
            />
        </div>
        <div class="form-input">
            <label for="password">Mot de passe</label>
            <input
                    class="login-input"
                    type="password"
                    name="password"
                    placeholder=""
            />
            <span>
            <a href="#">Mot de passe oubliée?</a>
          </span>
        </div>
        <div class="btn-container">
            <input
                    type="submit"
                    name="submit"
                    value="Se connecter"
                    class="btn-login"
            />
        </div>
    </form>
</div>
<div class="void">

</div>
<script src="<?php echo BASE_URL ?>scripts/script.js"></script>
</body>
</html>

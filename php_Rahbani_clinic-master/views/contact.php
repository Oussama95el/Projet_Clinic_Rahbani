<?php
//require_once '../bootstrap.php';
    if(isset($_POST['submit'])){
        $data = new ContactController();
        $data->addMessage();
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Dr Rahbani est traumatoloque orthopédiste avec plus de 15 ands d'experience. "/>
    <link rel="icon" href="">
    <title>Cabinet Rahbani</title>
    <link rel="stylesheet" href="<?php echo BASE_URL ?>styles/contact/contact.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'includes/header.php'?>

<main>
        <div class="contact-heading">
            <h1>
                Contacter nous
            </h1>

        </div>
        <div class="design">
            <form method="post" class="form-contact">
                <div class="input2">
                    <input STYLE="width: 100%" name="name" type="text" placeholder="Nom*" required>
                </div>
                <label style="width: 80%;height: 10%;margin-top:20px">
                    <select style="width: 100%; height:80% " name="type">
                        <option value="company">Company</option>
                        <option value="person">Person</option>
                    </select>
                </label>
                <input name="email" type="email" placeholder="E-mail*" required>
                <textarea name="message" placeholder="message" class="message"></textarea>

                <!-- <input class="button" type="submit" value="Envoyer"></input> -->
                <button class="button" name="submit" type="submit" >Envoyer</button>


            </form>
            <div class="info-container">
                <p class="paragraph">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eu donec  semper arcu vulputate
                 ipsum posuere accumsan. eleifend.
                </p>
                <div class="info">
                    <div class="contact-info"><img src="<?php echo BASE_URL ?>images/email.png" alt="email-cabinet-rehbani">
                        <P class="paragraph2">CabinetRahbani@contact.com</P></div>
                    <div class="contact-info"><img src="<?php echo BASE_URL ?>images/location.png" alt="email-cabinet-rehbani">
                        <P class="paragraph2">Majzoub Street, Mezher, Mount Lebanon, 22319</P></div>
                    <div class="contact-info"><img src="<?php echo BASE_URL ?>images/phone.png" alt="email-cabinet-rehbani">
                        <P class="paragraph2">+2126 2460 4050  |  +2125 24 61 8090</P></div>
                </div>


        </div>


        </div>
    </main>
    <?php include 'includes/footer.php'?>


    <script src="<?php echo BASE_URL ?>scripts/script.js"></script>
</body>
</html>
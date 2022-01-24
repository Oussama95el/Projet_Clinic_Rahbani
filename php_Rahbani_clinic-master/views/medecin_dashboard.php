<?php

    if(isset($_SESSION['username']) === false){
        Redirect::to('login');
    }
    $data = new MedecinsController();
    $medecins = $data->getMedecins();

?>


<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>styles/dashboard/dashboard.css" />
</head>

<body>
    <nav class="nav-dashboard">
        <div class="nav-title">
            <h1 class="title">Menu Operation</h1>
        </div>
        <div class="admin-img">
            <img src="./images/icons/admin-icon.svg" alt="Profile picture admin" />
            <h2>Dr Rahbani</h2>
            <h3>Admin</h3>
        </div>
        <div class="operation-menu">
            <ul>
                <li>
                    <img src="./images/icons/patient-icon.svg" alt="" />
                    <a href="<?php echo BASE_URL?>patient_dashboard">Patient</a>
                </li>
                <li style="background: #07BEB8">
                    <img src="./images/icons/Medecin-icon.svg" alt="" />
                    <a href="<?php echo BASE_URL?>medecin_dashboard">Medcin</a>
                </li>
                <li>
                    <img src="./images/icons/visite-icon.svg" alt="" />
                    <a href="<?php echo BASE_URL?>visite_dashboard">Visite</a>
                </li>
            </ul>
        </div>
    </nav>

    <main>
        <header>
            <div class="header-title">
                <h2>Liste des Medecin</h2>
            </div>
            <div class="buttons">
                <a href="<?php echo BASE_URL ?>add_medecin" class="add">
                    AJOUTER UNE MEDECIN
                </a>
                <a href="<?php echo BASE_URL?>logout" class="logout">
                    Se deconneter
                    <img src="<?php echo BASE_URL ?>images/icons/sign-out-alt 1.svg" alt="">
                </a>
            </div>
        </header>

        <table id="data-table" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Medcin_id</th>
                    <th>firstname</th>
                    <th>lastname</th>
                    <th>birthday</th>
                    <th>specialite</th>

                </tr>
            </thead>
            <tbody>

                <?php foreach ($medecins as $medecin) : ?>
                    <tr>
                        <td><?php echo $medecin['person_id'] ?></td>
                        <td><?php echo $medecin['firstname'] ?></td>
                        <td><?php echo $medecin['lastname'] ?></td>
                        <td><?php echo $medecin['birthday'] ?></td>
                        <td><?php echo $medecin['specialite'] ?></td>

                        <td class="icon">
                            <form method="post" action="update_medecin" class="mr-1">
                                <input type="hidden" name="person_id" value=" <?php echo $medecin['person_id'] ?>">
                                <button style="border:none; background:none;">
                                    <img src="<?php echo BASE_URL ?>images/icons/edit.png" alt="">
                                </button>
                            </form>
                        </td>
                        <td class="icon">
                            <form method="post" action="delete_medecin" class="mr-1">
                                <input type="hidden" name="person_id" value="<?php echo $medecin['person_id'] ?>">
                                <button style="border:none; background:none;">
                                    <img src="<?php echo BASE_URL ?>images/icons/delete.png" alt="">
                                </button>
                            </form>
                        </td>
                    <?php endforeach; ?>


                    </tr>
            </tbody>
        </table>
    </main>
</body>

</html>
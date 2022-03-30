<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Parcourir application</title>
    <link rel="stylesheet" href="../../View/style/style.css" />
    <link rel="stylesheet" href="fontawesome/css/all.css" />
</head>

<body>
    <header class="fondGrisClair">
        <div class="logoMenu">
            <div class="logo">
                <img id="logo" src="../../View/images/logo.png" alt="logo" />
            </div>
            <div class="nav">
                <ul>
                    <a href="../../View/index.php">
                        <li>ACCUEIL</li>
                    </a>
                    <a href="../../View/aPropos.php">
                        <li>A PROPOS</li>
                    </a>
                    <a href="">
                        <li>PARCOURIR LES OFFRES</li>
                    </a>
                    <a href="">
                        <li>PUBLIER UNE OFFRE</li>
                    </a>
                </ul>
            </div>
        </div>
    </header>

    <main>

        <div class="parcourirCandidatures">
            <h2 class="alignCenter">PARCOURIR LES CANDIDATURES</h2>
        </div>

        <section id="criteres">

        </section>
        <section id="liste">
            <?php foreach ($allApplication as $application) : ?>

                <ul>
                    <li>
                        <ul class="position">
                            <li>
                                <?= $application["Name"] ?>
                            </li>
                            <li>
                                <?= $application["Firstname"] ?>
                            </li>
                            <li>
                                <?= $application["Email"] ?>
                            </li>
                            <li>
                                <?= $application["Phone"] ?>
                            </li>
                            <li>
                                <?= $application["Motivation"] ?>
                            </li>
                        </ul>

                    </li>

                </ul>

            <?php endforeach ?>
        </section>
    </main>

    <footer>
        <div class="logoMenu">
            <div class="logo">
                <img id="logo" src="../../View/images/logo.png" alt="logo" />
            </div>
            <div class="nav">
                <ul>
                    <a href="../../View/index.php">
                        <li>ACCUEIL</li>
                    </a>
                    <a href="../../View/aPropos.php">
                        <li>A PROPOS</li>
                    </a>
                    <a href="">
                        <li>PARCOURIR LES OFFRES</li>
                    </a>
                    <a href="">
                        <li>PUBLIER UNE OFFRE</li>
                    </a>
                </ul>
                <p class="reseauxSociaux">Nous suivre sur les réseaux sociaux</p>
                <p class="copyright">Copyright Sylvain Foucault 2022</p>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>

</html>
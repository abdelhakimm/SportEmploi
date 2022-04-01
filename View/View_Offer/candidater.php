<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Publier une offre</title>
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
                    <a href="../Router/router.php?action=all">
                        <li>PARCOURIR LES OFFRES</li>
                    </a>
                    <a href="./router.php?action=create">
                        <li>PUBLIER UNE OFFRE</li>
                    </a>
                </ul>
            </div>
        </div>
    </header>

    <main>

        <div class="publierCandidature">
            <h2 class="alignCenter">CANDIDATER</h2>
        </div>

        <section id="offre">

            <form action="<?= router ?>router.php" method="post" class="formCandidature">

                <input type="hidden" id="id_offer" name="id_offer" value="<?= $offer['Id_Offer'] ?>">
                <input type="hidden" id="Id_Application" name="Id_Application">

                <div class="ligneForm">
                    <label for="name">Nom : </label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="ligneForm">
                    <label for="firstname">Prénom : </label>
                    <input type="text" id="firstname" name="firstname" required>
                </div>
                <div class="ligneForm">
                    <label for="email">Adresse e-mail : </label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="ligneForm">
                    <label for="phone">Numéro de téléphone : </label>
                    <input type="text" id="phone" name="phone">
                </div>
                <div class="ligneForm">
                    <label for="motivation">Lettre de motivation : </label>
                    <textarea id="motivation" name="motivation"></textarea>
                </div>

                <div class="rgpdLigne">
                    <input type="checkbox" id="rgpd" name="rgpd" required>
                    <label for="rgpd">j'accèpte les conditions</label>
                </div>
                <div class="buttonLigne">
                    <button class="publierInput" id="inputSubmit" type="submit" value="ENVOYER" name="submit">ENVOYER</button>
                </div>

            </form>

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
                    <a href="../Router/router.php?action=all">
                        <li>PARCOURIR LES OFFRES</li>
                    </a>
                    <a href="./router.php?action=create">
                        <li>PUBLIER UNE OFFRE</li>
                    </a>
                </ul>
                <div class="reseauxSociauxDiv">
                    <p class="reseauxSociaux">Nous suivre sur les réseaux sociaux</p>
                    <img src="../../View/images/facebookLogo.svg" alt="logo facebook">
                    <img src="../../View/images/twitterIcon.svg" alt="logo twitter">
                    <img id="logoLinkedin" src="../../View/images/linkedin-logo-icon.svg" alt="logo linkedin">
                </div>
                <p class="copyright">Copyright Sylvain Foucault 2022</p>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>

</html>
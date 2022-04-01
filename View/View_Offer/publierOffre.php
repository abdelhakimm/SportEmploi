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
                    <a href="">
                        <li>PUBLIER UNE OFFRE</li>
                    </a>
                </ul>
            </div>
        </div>
    </header>

    <main>

        <div class="publierOffre">
            <h2 class="alignCenter">PUBLIER UNE OFFRE</h2>
        </div>

        <section id="offre">

            <form action="<?= router ?>router.php" method="post" class="formOffre">

                <div class="ligneForm">
                    <label for="position">Nom du poste : </label>
                    <input type="text" id="position" name="position" required>
                </div>
                <div class="ligneForm">
                    <label for="enterprise">Nom de l'entreprise : </label>
                    <input type="text" id="enterprise" name="enterprise" required>
                </div>
                <div class="ligneForm">
                    <label for="beginDate">Date de début : </label>
                    <input type="date" id="beginDate" name="beginDate" required>
                </div>
                <div class="ligneForm">
                    <label for="endDate">Date de fin : </label>
                    <input type="date" id="endDate" name="endDate">
                </div>
                <div class="ligneForm">
                    <label for="contract">Type de contrat : </label>
                    <select id="contract" name="contract" value="all" required>
                        <option value=""></option>
                        <option value="CDI">CDI</option>
                        <option value="CDD">CDD</option>
                    </select>
                </div>
                <div class="ligneForm">
                    <label for="hours">Nombre d'heures : </label>
                    <input type="text" id="hours" name="hours" required>
                </div>
                <div class="ligneForm">
                    <label for="salary">Salaire : </label>
                    <input type="text" id="salary" name="salary" required>
                </div>
                <div class="ligneForm">
                    <label for="description">Description</label>
                    <textarea id="description" name="description"></textarea>
                </div>
                <div class="rgpdLigne">
                    <input type="checkbox" id="rgpd" name="rgpd" required>
                    <label for="rgpd">j'accèpte les conditions</label>
                </div>
                <div class="buttonLigne">
                    <div>
                        <button class="publierInput" id="inputSubmit" type="submit" value="PUBLIER" name="submit">PUBLIER</button>
                    </div>
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
                    <a href="">
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
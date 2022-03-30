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

        <div class="publierOffre">
            <h2 class="alignCenter">PUBLIER UNE OFFRE</h2>
        </div>

        <section id="offre">

            <form action="<?= router ?>router.php" method="post">

                <div class="ligneForm">
                    <label for="position">Nom du poste : </label>
                    <input type="text" id="position" name="position">
                </div>
                <div class="ligneForm">
                    <label for="enterprise">Nom de l'entreprise : </label>
                    <input type="text" id="enterprise" name="enterprise">
                </div>
                <div class="ligneForm">
                    <label for="beginDate">Date de début : </label>
                    <input type="text" id="beginDate" name="beginDate">
                </div>
                <div class="ligneForm">
                    <label for="endDate">Date de fin : </label>
                    <input type="text" id="endDate" name="endDate">
                </div>
                <div class="ligneForm">
                    <label for="contract">Type de contrat : </label>
                    <input type="text" id="contract" name="contract">
                </div>
                <div class="ligneForm">
                    <label for="hours">Nombre d'heures : </label>
                    <input type="text" id="hours" name="hours">
                </div>
                <div class="ligneForm">
                    <label for="salary">Salaire : </label>
                    <input type="text" id="salary" name="salary">
                </div>
                <div class="ligneForm">
                    <label for="description">Description</label>
                    <textarea id="description" name="description"></textarea>
                </div>
                <div class="rgpdLigne">
                    <input type="checkbox" id="rgpd" name="rgpd">
                    <label for="rgpd">j'accèpte les conditions</label>
                </div>
                <div class="buttonLigne">
                    <button id="boutonPublier">PUBLIER</button>
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
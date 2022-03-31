<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Détails de l'offre</title>
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

        <div class="publierOffre">
            <h2 class="alignCenter">DETAILS DE L' OFFRE</h2>
        </div>

        <section id="detailsOffre">
            <div class="lignesOffre">
                <div class="partieGauche">
                    <div class="ligneOffre">
                        <span>Nom du poste : </span>

                    </div>
                    <div class="ligneOffre">
                        <span>Nom de l'entreprise : </span>

                    </div>
                    <div class="ligneOffre">
                        <span>Date de début : </span>

                    </div>
                    <div class="ligneOffre">
                        <span>Date de fin : </span>

                    </div>
                    <div class="ligneOffre">
                        <span>Type de contrat : </span>

                    </div>
                    <div class="ligneOffre">
                        <span>Horaires : </span>

                    </div>
                    <div class="ligneOffre">
                        <span>Salaire : </span>

                    </div>
                    <div class="ligneOffre">
                        <span>Description : </span>

                    </div>
                </div>
                <div class="partieDroite">
                    <div class="ligneOffre">

                        <span><?= $offer["Position"] ?></span>
                    </div>
                    <div class="ligneOffre">

                        <span><?= $offer["Enterprise"] ?></span>
                    </div>
                    <div class="ligneOffre">

                        <span><?= $offer["Begin"] ?></span>
                    </div>
                    <div class="ligneOffre">

                        <span><?= $offer["End"] ?></span>
                    </div>
                    <div class="ligneOffre">

                        <span><?= $offer["Contract"] ?></span>
                    </div>
                    <div class="ligneOffre">

                        <span><?= $offer["Hours"] ?></span>
                    </div>
                    <div class="ligneOffre">

                        <span><?= $offer["Salary"] ?></span>
                    </div>
                    <div class="ligneOffre">

                        <span><?= $offer["Description"] ?></span>
                    </div>
                </div>
            </div>
            <div class="candidatures">
                <?php if (count($allApplication) > 0) { ?>
                    <h3>Candidatures</h3>
                <?php } ?>
                <?php foreach ($allApplication as $application) : ?>
                    <ul>
                        <li>
                            <ul class="application">
                                <li>
                                    <p><?= $application["Name"] ?></p>
                                </li>
                                <li>
                                    <p><?= $application["Firstname"] ?></p>
                                </li>
                                <li>
                                    <p><?= $application["Email"] ?></p>
                                </li>
                                <li>
                                    <p><?= $application["Phone"] ?></p>
                                </li>
                                <li>
                                    <p><?= $application["Motivation"] ?></p>
                                </li>
                            </ul>

                        </li>

                    </ul>

                <?php endforeach ?>
            </div>
            <div class="bouttonCandidater">
                <a href="<?= router ?>router.php?action=candidater&id=<?= $offer['Id_Offer'] ?>">CANDIDATER</a>
            </div>
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
                </div>
                <p class="copyright">Copyright Sylvain Foucault 2022</p>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>

</html>
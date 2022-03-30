<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publier une annonce</title>
    <link rel="stylesheet" href="../Style/formRecruiter.css">
    <link rel="stylesheet" href="./font/fontawesome-free-6.0.0-web/css/all.css">
</head>
<body>

    <header>
            <div class="logo">
                <img src="../logoEtIcon/logo.png" width="100px" height="100px">
            </div>

            <nav>
                <ul>
                    <div id="allNav">
                        <div class="flexNav">
                           <li><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/Specificity">Accueil</a></li>
                           <li><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/Specificity">A propos</a></li>
                        </div>
                        <div class="flexNav">
                           <li><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/Specificity">Parcourir les offres</a></li>
                           <li><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/Specificity">Publier une offre</a></li>
                        </div>
                    </div>
                </ul>
            </nav>
    </header>

  <h1>Votre candidature chez </h1>

  <p>Votre candidature :</p>

  <a href="../../Back/Router/RouterCandidate.php?action=all">Les Recruiter</a>


    <form action="../../Back/Router/RouterCandidate.php" method="POST">
        <div id="allItem"></div>

            <div class="itemOne">

                <label for="firstName">Nom de la Société :</label>
                <input type="text" name="firstName" id="firstName" required>

                <label for="lastName">Intitulé du poste :</label>
                <input type="text" name="lastName" id="lastName" required>

            </div>

            <div class="itemTwo">

                <label for="eMail">Date de début de contrat :</label>
                <input type="mail" name="eMail" id="eMail" required>

                <label for="phone">Date de fin de contrat :</label>
                <input type="number" name="phone" id="phone" required>

            </div>

            <label for="motivation">motivation :</label>
            <textarea name="motivation" id="motivation" cols="30" rows="10" required></textarea>

            <input type="submit" value="Envoyer votre candidature" name="submit">

        </div>     

    </form>

</body>
</html>
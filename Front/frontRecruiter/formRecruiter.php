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

  <h1>Recrutons ensemble votre talent idéal</h1>

  <p>
    Trouver le candidat idéal demande parfois un temps précieux. Avec les outils Indeed, identifiez, présélectionnez et recrutez rapidement vos candidats, en toute simplicité.
    Vous savez quel profil vous recherchez. <br>
    <br>
    Nous vous aidons à le trouver.
  </p> <br>

  <p>Votre annonce :</p>

  <a href="../../Back/Router/RouterRecruiter.php?action=all">Les Recruiter</a>


    <form action="../../Back/Router/RouterRecruiter.php" method="POST">
        <div id="allItem"></div>

            <div class="itemOne">

                <label for="societyName">Nom de la Société :</label>
                <input type="text" name="societyName" id="societyName" required>

                <label for="jobName">Intitulé du poste :</label>
                <input type="text" name="jobName" id="jobName" required>

            </div>
            <div class="itemTwo">

                <label for="contractType">Type de contrat :</label>
                <select name="contractType" id="contractType" required>
                    <option value="CDD">CDD</option>
                    <option value="Interim">Interim</option>
                    <option value="CDI">CDI</option>
                </select>

                <label for="hours">Nombre d'heures :</label>
                <input type="text" name="hou" id="hou" required>
                <select name="hour" id="hour" required>
                    <option value="semaine">Semaine</option>
                    <option value="mois">Mois</option>
                </select>

            </div>

            <div class="itemThree">

                <label for="debutDate">Date de début de contrat :</label>
                <input type="date" name="debutDate" id="debutDate" required>

                <label for="endDate">Date de fin de contrat :</label>
                <input type="date" name="endDate" id="endDate">

            </div>

            <div class="itemFour">

                <label for="salary">Salaire :</label>
                <input type="text" name="salary" id="salary" required>

                <label for="city">Ville :</label>
                <input type="text" name="city" id="city" required>

            </div>

            <label for="description">Description :</label>
            <textarea name="description" id="description" cols="30" rows="10" required></textarea>

            <input type="submit" value="Poster votre annonce" name="submit">

        </div>     

    </form>

</body>
</html>
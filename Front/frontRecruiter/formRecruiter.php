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

  <h1>Recrutons ensemble votre talent idéal</h1>

  <p>
    Trouver le candidat idéal demande parfois un temps précieux. Avec les outils Indeed, identifiez, présélectionnez et recrutez rapidement vos candidats, en toute simplicité.
    Vous savez quel profil vous recherchez. <br>
    Nous vous aidons à le trouver.
  </p>

  <p>Votre annonce :</p>

  <a href="../../Back/Router/RouterRecruiter.php?action=all">Les Recruiter</a>


    <form action="../../Back/Router/RouterRecruiter.php" method="post">

        <label for="societyName">Nom de la Société :</label>
        <input type="text" name="societyName" id="societyName" required>

        <label for="jobName">Intitulé du poste :</label>
        <input type="text" name="jobName" id="jobName" required>
        
        <div id="itemUn">

            <label for="contractType">Type de contrat :</label>
            <select name="contractType" id="contractType" required>
                <option value="CDD">CDD</option>
                <option value="Interim">Interim</option>
                <option value="CDI">CDI</option>
            </select>

            <label for="hours">Nombre d'heures :</label>
            <input type="number" name="hours" id="hours" required>
            <select name="hours" id="hours" required>
                <option value="semaine">Semaine</option>
                <option value="mois">Mois</option>
            </select>

        </div>

        <div id="itemDeux">

            <label for="debutContract">Date de début de contrat :</label>
            <input type="text" name="debutContract" id="debutContract" required>

            <label for="endContract">Date de fin de contrat :</label>
            <input type="text" name="endContract" id="endContract" required>

        </div>

        <div id="itemTrois">

            <label for="salary">Salaire :</label>
            <input type="text" name="salary" id="salary" required>

            <label for="city">Ville :</label>
            <input type="text" name="city" id="city" required>

        </div>

        <label for="description">Description :</label>
        <textarea name="description" id="description" cols="30" rows="10" required></textarea>

        <input type="submit" value="Poster votre annonce" name="submit">

    </form>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publier une annonce</title>
</head>
<body>
<a href="../../Back/Router/RouterRecruiter.php?action=all">Les Recruiter</a>


    <form action="../../Back/Router/RouterRecruiter.php" method="post">

        <label for="societyName">Nom de la Société :</label>
        <input type="text" name="societyName" id="societyName">

        <label for="jobName">Intitulé du poste :</label>
        <input type="text" name="jobName" id="jobName">

        <label for="contractType">Type de contrat :</label>
        <input type="number" name="contractType" id="contractType">

        <label for="hours">Nombre d'heures :</label>
        <input type="time" name="hours" id="hours">

        <label for="salary">Salaire :</label>
        <input type="text" name="salary" id="salary">

        <label for="debutContrat">Date de début de contrat :</label>
        <input type="text" name="debutContrat" id="debutContrat">

        <label for="endContrat">Date de fin de contrat :</label>
        <input type="text" name="endContrat" id="endContract">

        <label for="City">Ville</label>
        <input type="text" name="city" id="city">

        <label for=""></label>
        <textarea name="" id="" cols="30" rows="10"></textarea>

        <input type="submit" value="envoyer" name="submit">

    </form>

</body>
</html>
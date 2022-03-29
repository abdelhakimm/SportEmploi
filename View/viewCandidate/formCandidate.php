<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'adresse</title>
</head>
<body>

<a href="../Back/Router/RouterCandidate.php?action=all">Postulez ici</a>

    <form action="../../Back/Router/RouterCandidat.php" method="post">

        <input type="hidden" name="id_job" value="<?=$Candidat['Id_Job']?>">

        <label for="firstname">Prénom</label>  
        <input type="text" name="firstname" id="firstname">

        <label for="lastname">Nom</label>
        <input type="text" name="lastname" id="lastname">

        <label for="mail">Email</label>
        <input type="text" name="mail" id="mail">

        <label for="phone">Téléphone</label>
        <input type="number" name="phone" id="phone">

        <label for="motivation">Lettre de motivation</label>
        <input type="text" name="motivation" id="motivation">

        <label for="name_job">Nom de l'annonce</label>
        <input type="text" name="name_job" id="name_job">

        <input type="submit" value="envoyer" name="submit">
    </form>
</body>
</html>
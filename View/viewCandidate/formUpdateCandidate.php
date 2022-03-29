<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MàJ Candidat</title>

</head>
<body>
<a href="../../Back/Router/RouterCandidat.php?action=all">les candidats</a>

    <form action="../../Back/Router/RouterCandidat.php" method="post">

        <input type="hidden" name="id" value="<?=$Candidat['Id_Candidat']?>">

        <label for = "firstname"> Prénom </label>
        <input type = "text" name = "firstname" id = "firstname" required value="<?=$Candidat['firstname']?>"> <br>

        <label for = "lastname"> Nom </label> 
        <input type = "text" name = "lastname" id = "lastname" value="<?=$Candidat['lastname']?>" required> <br>

        <label for = "mail"> Email </label> 
        <input type = "text" name = "mail" id = "mail" value="<?=$Candidat['mail']?>" required> <br>

        <label for = "phone"> Téléphone </label>
        <input type = "number" name = "phone" id = "phone" value="<?=$Candidat['phone']?>"> <br>

        <label for = "motivation"> Lettre de motivation </label>
        <input type = "number" name = "motivation" id = "motivation" value="<?=$Candidat['motivation']?>"> <br>

        <label for = "name_job"> Nom de l'annonce </label>
        <input type = "number" name = "name_job" id = "name_job" value="<?=$Candidat['name_job']?>"> <br>

        <label for="Envoyer"></label>
        <input type="submit" name="submit"  value="Envoyer">

    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidat</title>
</head>
<body>
<a href="../../Back/Router/RouterCandidate.php?action=all">Les Annonces</a>

    <ul>
        <li><?=$candidate["firstname"]?></li>
        <li><?=$candidate["lastname"]?></li>
        <li><?=$candidate["mail"]?></li>
        <li><?=$candidate["phone"]?></li>
        <li><?=$candidate["motivation"]?></li>
        <li><?=$candidate["name_job"]?></li>

        <a href="../../Back/Router/RouterCandidate.php?action=update&id=<?=$Candidate["Id_Candidate"]?>">Modifier</a>
        <a href="../../Back/Router/RouterCandidate.php?action=delete&id=<?=$Candidate["Id_Candidate"]?>">Supprimer</a>

    </ul>

</body>
</html>
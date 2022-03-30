<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voir l'offre</title>
</head>
<body>
<a href="../../Back/Router/RouterJob.php?action=all">Retourner aux offres</a>

    <ul>
            <li><?=$row["Id_Job"]?></li>
            <li><?=$row["Name_Job"]?></li>
            <li><?=$row["Localisation"]?></li>
            <li><?=$row["Start_Date"]?></li>
            <li><?=$row["End_Date"]?></li>
            <li><?=$row["Type"]?></li>
            <li><?=$row["Hours_Week"]?></li>
            <li><?=$row["Salary_Month"]?></li>
            <li><?=$row["Salary_Year"]?></li>
            <li><?=$row["Description"]?></li>
            <li><?=$row["Employer"]?></li>

        <a href="../../Back/Router/RouterCandidate?action=create&id=<?=$row["Id_Job"]?>">Postuler maintenant</a>
        <a href="../../Back/Router/RouterCandidate?action=create&id=<?=$row["Id_Job"]?>">Voir les candidats</a>
        <a href="../../Back/Router/Routerjob.php?action=update&id=<?=$row["Id_Job"]?>">Modifier l'offre</a>
        <a href="../../Back/Router/Routerjob.php?action=delete&id=<?=$row["Id_Job"]?>">Supprimer</a>

    </ul>

</body>
</html>
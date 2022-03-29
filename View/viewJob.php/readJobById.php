<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidat</title>
</head>
<body>
<a href="../../Back/Router/RouterJob.php?action=all">Les Annonces</a>

    <ul>
        <li><?=$job["Name_Job"]?></li>
        <li><?=$job["Localisation"]?></li>
        <li><?=$job["Start_Date"]?></li>
        <li><?=$job["End_Date"]?></li>
        <li><?=$job["Type"]?></li>
        <li><?=$job["House_Week"]?></li>
        <li><?=$job["Salary_Month"]?></li>
        <li><?=$job["Salary_Year"]?></li>
        <li><?=$job["Description"]?></li>
        <li><?=$job["Employer"]?></li>

        <a href="../../Back/Router/Routerjob.php?action=update&id=<?=$job["Id_job"]?>">Modifier</a>
        <a href="../../Back/Router/Routerjob.php?action=delete&id=<?=$job["Id_job"]?>">Supprimer</a>

    </ul>

</body>
</html>
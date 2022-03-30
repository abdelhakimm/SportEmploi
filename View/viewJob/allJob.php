<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toutes les offres</title>
</head>
<body>

    <?php foreach($allcandidate as $candidate): ?>
        
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
        </ul>
        
        <p><a href="Routercandidate.php?action=id&id=<?=$candidate["Id_candidate"]?>">Voir ce poste</a></p>

    <?php endforeach?>

   
</body>
</html>
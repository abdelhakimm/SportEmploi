<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toutes les offres</title>
</head>
<body>

    <?php foreach($allRows as $row): ?>
        
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
        </ul>
        
        <p><a href="RouterJob.php?action=id&id=<?=$row["Id_Job"]?>">Voir cette offre</a></p>

    <?php endforeach?>

   
</body>
</html>
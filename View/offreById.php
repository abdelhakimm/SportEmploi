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
            <li><?=$row["Id_Offer"]?></li>
            <li><?=$row["Name_Offer"]?></li>
            <li><?=$row["Name_Business"]?></li>
            <li><?=$row["City"]?></li>
            <li><?=$row["Week_Hours"]?></li>
            <li><?=$row["Contrat_Type"]?></li>
            <li><?=$row["Annual_Salary"]?></li>
            <li><?=$row["Monthly_Pay"]?></li>
            <li><?=$row["Description"]?></li>
            <li><?=$row["Begin"]?></li>
            <li><?=$row["Ending"]?></li>
        </ul>
        
        <p><a href="RouterJob.php?action=id&id=<?=$row["Id_Offer"]?>">Voir cette offre</a></p>

    <?php endforeach?>

   
</body>
</html>
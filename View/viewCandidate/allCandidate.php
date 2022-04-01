<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tous les candidats</title>
</head>
<body>
<a href="../../Back/Router/routerrow.php?action=create">Voir les offres</a>

    <?php foreach($allRows as $row): ?>
        
        <ul>
            <li><?=$row["Firstname"]?></li>
            <li><?=$row["Lastname"]?></li>
            <li><?=$row["Mail"]?></li>
            <li><?=$row["Phone"]?></li>
            <li><?=$row["Motivation"]?></li>
        </ul>
        
        <p><a href="Routerrow.php?action=id&id=<?=$row["Id_row"]?>">Voir ce candidat</a></p>

    <?php endforeach?>

   
</body>
</html>
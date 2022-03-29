<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tous les candidats</title>
</head>
<body>
<a href="../../Back/Router/routerCandidate.php?action=create">Voir les offres</a>

    <?php foreach($allcandidate as $candidate): ?>
        
        <ul>
            <li><?=$candidate["firstname"]?></li>
            <li><?=$candidate["lastname"]?></li>
            <li><?=$candidate["mail"]?></li>
            <li><?=$candidate["phone"]?></li>
            <li><?=$candidate["motivation"]?></li>
            <li><?=$candidate["name_job"]?></li>
        </ul>
        
        <p><a href="Routercandidate.php?action=id&id=<?=$candidate["Id_candidate"]?>">Voir ce candidat</a></p>

    <?php endforeach?>

   
</body>
</html>
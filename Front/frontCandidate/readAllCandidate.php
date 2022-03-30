<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tout les candidate</title>
</head>
<body>

<a href="./formCandidate.php">creer une adresse</a>

    <?php foreach($allCandidate as $candidate): ?>
        <p><a href="../Back/Router/Routercandidate.php?action=idCandidate&idCandidate=<?=$candidate["idCandidate"]?>">Afficher Id_candidate</a></p>
        <ul>
            <li><?=$candidate["firstName"]?></li>
            <li><?=$candidate["lastName"]?></li>
            <li><?=$candidate["phone"]?></li>
            <li><?=$candidate["eMail"]?></li>

            <a href="../Back/Router/RouterCandidate.php?action=idCandidate&idCandidate=<?=$candidate["idCandidate"]?>"></a>

        </ul>

    <?php endforeach?>

   
</body>
</html>
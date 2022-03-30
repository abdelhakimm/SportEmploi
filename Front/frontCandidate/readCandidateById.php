<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidate</title>
</head>
<body>
<a href="../Back/Router/RouterCandidate.php?action=all">les Candidate</a>

    
    <ul>
        
        <li><?=$candidate["firstName"]?></li>
        <li><?=$candidate["lastName"]?></li>
        <li><?=$candidate["eMail"]?></li>
        <li><?=$candidate["phone"]?></li>

        <li><?=$candidate["motivation"]?></li>
    </ul>
    <a href="../Back/Router/RouterCandidate.php?action=update&id=<?=$candidate["idCandidate"]?>">Modifier</a>
    <a href="../Back/Router/RouterCandidate.php?action=delete&id=<?=$candidate["idCandidate"]?>">Supprimer</a>

  
</body>
</html>


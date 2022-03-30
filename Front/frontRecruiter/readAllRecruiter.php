<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tout les Recruiter</title>
</head>
<body>

<a href="./formRecruiter.php">creer une adresse</a>

    <?php foreach($allRecruiter as $recruiter): ?>
        <p><a href="../Back/Router/RouterRecruiter.php?action=idRecruiter&idRecruiter=<?=$recruiter["idRecruiter"]?>">Afficher Id_Recruiter</a></p>
        <ul>
            <li><?=$recruiter["societyName"]?></li>
            <li><?=$recruiter["jobName"]?></li>
            <li><?=$recruiter["contractType"]?></li>
            <li><?=$recruiter["salary"]?></li>

            <a href="../Back/Router/RouterRecruiter.php?action=iddRecruiter&idRecruiter=<?=$recruiter["idRecruiter"]?>"></a>

        </ul>

    <?php endforeach?>

   
</body>
</html>
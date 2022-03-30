<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recruiter</title>
</head>
<body>
<a href="../Back/Router/RouterRecruiter.php?action=all">les Recruiteres</a>

    
    <ul>
            <li><?=$recruiter["societyName"]?></li>
            <li><?=$recruiter["jobName"]?></li>
            <li><?=$recruiter["contractType"]?></li>
            <li><?=$recruiter["debutContract"]?></li>
            <li><?=$recruiter["endContract"]?></li>
            <li><?=$recruiter["salary"]?></li>
            <li><?=$recruiter["city"]?></li>

            <li><?=$recruiter["description"]?></li>

    </ul>
    <a href="../Back/Router/RouterRecruiter.php?action=update&id=<?=$recruiter["idRecruiter"]?>">Modifier</a>
    <a href="../Back/Router/RouterRecruiter.php?action=delete&id=<?=$recruiter["idRecruiter"]?>">Supprimer</a>

  
</body>
</html>


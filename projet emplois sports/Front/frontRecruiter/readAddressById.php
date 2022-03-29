<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Address</title>
</head>
<body>
<a href="../Back/Router/RouterAddress.php?action=all">les addresses</a>

    <ul>
        <li><?=$address["Number"]?></li>
        <li><?=$address["Address"]?></li>
        <li><?=$address["Zip"]?></li>
        <li><?=$address["City"]?></li>
        <a href="../Back/Router/RouterAddress.php?action=update&id=<?=$address["Id_Address"]?>">Modifier</a>
        <a href="../Back/Router/RouterAddress.php?action=delete&id=<?=$address["Id_Address"]?>">Supprimer</a>

    </ul>
</body>
</html>


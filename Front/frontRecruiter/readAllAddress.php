<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Address</title>
</head>
<body>
<a href="formAddress.php">creer une adresse</a>

    <?php foreach($allAddress as $address): ?>
        <p><a href="../Back/Router/RouterAddress.php?action=id&id=<?=$address["Id_Address"]?>">Afficher Id_Address</a></p>
        <ul>
            <li><?=$address["Number"]?></li>
            <li><?=$address["Address"]?></li>
            <li><?=$address["Zip"]?></li>
            <li><?=$address["City"]?></li>

        </ul>

    <?php endforeach?>

   
</body>
</html>
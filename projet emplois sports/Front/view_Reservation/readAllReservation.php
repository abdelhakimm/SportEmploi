<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation</title>
</head>
<body>
<a href="formReservation.php">creer une adresse</a>

    <?php foreach($allReservation as $reservation): ?>
        
        <p><a href="../Back/Router/RouterReservation.php?action=id&id=<?=$reservation["Id_Reservation"]?>">Afficher Id_Reservation</a></p>
        <ul>
            <li><?=$reservation["Places"]?></li>
            <li><?=$reservation["Date_Reservation"]?></li>
            <li><?=$reservation["Hours"]?></li>

        </ul>

    <?php endforeach?>

</body>
</html>
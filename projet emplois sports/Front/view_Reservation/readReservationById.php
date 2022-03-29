<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation</title>
</head>
<body>
<a href="../Back/Router/RouterReservation.php?action=all">les Reservations</a>

    <ul>
        <li><?=$reservation["Places"]?></li>
        <li><?=$reservation["Date_Reservation"]?></li>
        <li><?=$reservation["Hours"]?></li>

        <a href="../Back/Router/RouterReservation.php?action=update&id=<?=$reservation["Id_Reservation"]?>">Modifier</a>
        <a href="../Back/Router/RouterReservation.php?action=delete&id=<?=$reservation["Id_Reservation"]?>">Supprimer</a>

    </ul>
</body>
</html>


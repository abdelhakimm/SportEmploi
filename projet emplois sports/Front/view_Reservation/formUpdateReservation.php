<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation form</title>

</head>
<body>
<a href="../Back/Router/RouterAddress.php?action=all">Les Reservations</a>


    <form action="../Back/Router/RouterRerservation.php" method="post">

        <input type="hidden" name="id" value="<?=$reservation['Id_Reservation']?>">

        <label for="Places">Nombre de personne(s)</label>
        <input type="number" name="places" id="places" value="<?=$reservation['Places']?>" required> <br>

        <label for="Date_Reservation">Date de la réservation</label>
        <input type="text" name="date_reservation" id="date_reservation" value="<?=$reservation['Date_Reservation']?>" required> <br>

        <label for="Hours">Heure de réservation</label>
        <input type="time" name="hours" id="hours" value="<?=$reservation['Hours']?>"> <br>

        <label for="Envoyer"></label>
        <input type="submit" name="submit"  value="Envoyer">

    </form>
</body>
</html>
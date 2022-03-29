<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saisir reservation</title>
</head>
<body>
<a href="../Back/Router/RouterReservation.php?action=all">Les Reservations</a>


    <form action="../Back/Router/RouterReservation.php" method="post">

        <label for="Places">Nombre de personne(s)</label>
        <input type="number" name="places" id="places">

        <label for="Date_Reservation">Date de la réservation</label>
        <input type="text" name="date_reservation" id="date_reservation">

        <label for="Hours">Heure de réservation</label>
        <input type="time" name="hours" id="hours">

        <input type="submit" value="envoyer" name="submit">
    </form>
</body>
</html>
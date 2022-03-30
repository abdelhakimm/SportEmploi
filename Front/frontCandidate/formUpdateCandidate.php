<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Address Forme update </title>

</head>
<body>
<a href="../Back/Router/RouterCandidate.php?action=all">les addresses</a>

    <form action="../../Back/Router/RouterCandidate.php" method="post">
        
        <div id="allItem"></div>
        
            <input type="hidden" name="idCandidate" value="<?=$candidate['idCandidate']?>">

            <div class="itemOne">

                <label for="firstName">Nom de la Société :</label>
                <input type="text" name="firstName" id="firstName" required value="<?=$candidate['firstName']?>">

                <label for="lastName">Intitulé du poste :</label>
                <input type="text" name="lastName" id="lastName" required value="<?=$candidate['lastName']?>">

            </div>
            
            <div class="itemTwo">

                <label for="eMail">Date de début de contrat :</label>
                <input type="mail" name="eMail" id="eMail" required value="<?=$candidate['eMail']?>">

                <label for="phone">Date de fin de contrat :</label>
                <input type="number" name="phone" id="phone" required value="<?=$candidate['phone']?>">

            </div>

            <label for="motivation">Motivation :</label>
            <textarea name="motivation" id="motivation" cols="30" rows="10" required value="<?=$candidate['motivation']?>"></textarea>

            <input type="submit" value="Envoyer votre candidature" name="submit">

        </div>     

    </form>
</body>
</html>
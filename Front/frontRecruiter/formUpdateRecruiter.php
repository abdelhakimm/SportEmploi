<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Address Forme update </title>

</head>
<body>
<a href="../Back/Router/RouterAddress.php?action=all">les addresses</a>

    <form action="../../Back/Router/RouterRecruiter.php" method="post">
        <div id="allItem"></div>
        
            <input type="hidden" name="idRecruiter" value="<?=$recruiter['idRecruiter']?>">

            <div class="itemOne">

                <label for="societyName">Nom de la Société :</label>
                <input type="text" name="societyName" id="societyName" required value="<?=$recruiter['societyName']?>">

                <label for="jobName">Intitulé du poste :</label>
                <input type="text" name="jobName" id="jobName" required value="<?=$recruiter['jobName']?>">

            </div>
            
            <div class="itemTwo">

                <label for="contractType">Type de contrat :</label>
                <select name="contractType" id="contractType" required value="<?=$recruiter['contractType']?>">
                    <option value="CDD">CDD</option>
                    <option value="Interim">Interim</option>
                    <option value="CDI">CDI</option>
                </select>

                <label for="hours">Nombre d'heures :</label>
                <input type="number" name="hours" id="hours" required value="<?=$recruiter['hours']?>">
                <select name="hours" id="hours" required value="<?=$recruiter['hours']?>">
                    <option value="semaine">Semaine</option>
                    <option value="mois">Mois</option>
                </select>

            </div>

            <div class="itemThree">

                <label for="debutContract">Date de début de contrat :</label>
                <input type="text" name="debutContract" id="debutContract" required value="<?=$recruiter['debutContract']?>">

                <label for="endContract">Date de fin de contrat :</label>
                <input type="text" name="endContract" id="endContract" required value="<?=$recruiter['endContract']?>">

            </div>

            <div class="itemFour">

                <label for="salary">Salaire :</label>
                <input type="text" name="salary" id="salary" required value="<?=$recruiter['salary']?>">

                <label for="city">Ville :</label>
                <input type="text" name="city" id="city" required value="<?=$recruiter['city']?>">

            </div>

            <label for="description">Description :</label>
            <textarea name="description" id="description" cols="30" rows="10" required value="<?=$recruiter['description']?>"></textarea>

            <input type="submit" value="Poster votre annonce" name="submit">

        </div>     

    </form>
</body>
</html>
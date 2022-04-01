<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./fontawesome/css/all.css">
</head>
<body>
    <?php require_once "headerFooter.php" ?>
    <section>
        <div class="textHaut">
            <p class="paragrapheHaut">PUBLIER UNE OFFRE POUR TROUVER L’EMPLOYER QUI VOUS FAUT : </p>
        </div>
    <form action="../Controller/Router.php" method="post">
    <div class="formulaireForm">
        <div class="formulaireWidth">
        <div class="formulaireAdd">
            <div>
                <label for="name_post" class="labelForm">INTITULÉ DU POSTE</label> <br>
                <input type="text" name="name_post" class="inputForm">
            </div>
            <div>
                <label for="name_business" class="labelForm">NOM DE L’ENTREPRISE</label> <br>
                <input type="text" name="name_business" class="inputForm">
            </div>
            <div>
                <label for="city" class="labelForm">VILLE</label> <br>
                <input type="text" name="city" class="inputForm">
            </div>
        </div>
        <div class="formulaireAdd">
            <div>
                <label for="week_hours" class="labelForm">NOMBRE D’HEURE PAR SEMAINE</label> <br>
                <input type="number" name="week_hours" class="inputForm">
            </div>
            <div>
                 <label for="contrat_type" class="labelForm">TYPE DE CONTRAT</label> <br>
                 <input type="text" name="contrat_type">
<!--              <select type="text" name="contrat_type" class="inputForm">
                     <option value="CDI">CDI</option>
                     <option value="CDD">CDD</option>
                     <option value="Interim">Intérim</option>
                </select> -->
            </div>
            <div>
                <label for="annual_salary" class="labelForm">SALAIRE ANNUELLE</label> <br>
                <input type="number" name="annual_salary" class="inputForm">
            </div>
        </div>
        </div>
    </div>
    <div class="descriptionForm">
        <div>
            <label for="description" class="labelForm">DESCRIPTION DU POSTE</label> <br>
            <input type="text" name="description" class="inputFormDescription">
        </div>

   
        <div class="cadrePost" id="envoyerOffre">
                    <input type="submit" value="Envoyer l'offre" class="cadrePostText" name="submit">
                </div>
    </div>
    </form>
    </section>
    <?php require_once "footer.php" ?>
</body>
</html>
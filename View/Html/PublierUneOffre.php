<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/publier.css">
    <title>Document</title>
</head>

<body>

    <?php

    require "header.php";

    ?>

    <div class="form">
        <div class="candid">
            <h1>Publier une offre</h1>
            <form action="" method="">
                <label for="">intitul du poste</label><br>
                <input type="text" id="" name="Nom" value="" placeholder="Exemple" required><br><br>

                <label for="">type de contrat</label><br>
                <input type="text" id="" name="Nom" value="" placeholder="Exemple : Alain" required><br><br>

                <label for="">Nombre d'heure par semaine</label><br>
                <input type="text" id="" name="Nom" value="" placeholder="Exemple" required><br><br>

                <label for="">intitul du poste</label><br>
                <input type="text" id="" name="Nom" value="" placeholder="Exemple" required><br><br>

                <label for="">salaire par ans</label><br>
                <input type="text" id="" name="Nom" value="" placeholder="Exemple" required><br><br>

                <label for="">Employé</label><br>
                <input type="text" id="" name="Nom" value="" placeholder="Exemple" required><br><br>


                <div class="inli">
                    <div>
                        <label for="">date de début</label><br>
                        <input type="mail" id="" name="email" value="" placeholder="ExempleAlain@gmail.com" required>

                        <label for="">date de fin</label>
                        <input type="number" id="" name="telephone" value="" placeholder="Exemple : 07********" required><br><br>
                    </div>
                </div>

                <label for="">Localisation</label><br>
                <input type="text" id="" name="Nom" value="" placeholder="Exemple" required><br><br>

                <label for="">Description</label><br>
                <textarea name="description" rows="8" cols="90"></textarea>

                <div class="sub">
                    <input type="submit" value="Envoyé">
                </div>
            </form>

        </div>
    </div>
    <?php
    require "footer.php";
    ?>

</body>

</html>
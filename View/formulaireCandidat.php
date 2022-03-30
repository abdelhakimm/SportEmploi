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
            <p class="paragrapheHaut">FORMULAIRE D'INSCRIPTION : </p>
        </div>
    <div class="formulaireForm">
        <div class="formulaireWidth">
        <div class="formulaireAdd">
            <div>
                <label for="" class="labelForm">NOM</label> <br>
                <input type="text" name="" class="inputForm">
            </div>
            <div>
                <label for="" class="labelForm">PRÉNOM</label> <br>
                <input type="text" name="" class="inputForm">
            </div>
            <div>
                <label for="" class="labelForm">MAIL</label> <br>
                <input type="text" name="" class="inputForm">
            </div>
            <div>
                <label for="" class="labelForm">TÉLÉPHONE</label> <br>
                <input type="text" name="" class="inputForm">
            </div>
        </div>
        </div>
    </div>
    <div class="descriptionForm">
        <div>
            <label for="" class="labelForm">LETTRE DE MOTIVATION</label> <br>
            <input type="text" name="" class="inputFormDescription">
        </div>
        <div class="conditionSite">
            <input type="checkbox" name="" id="">
            <label for="">J'accepte les conditions d'utilisateur</label>
        </div>
        <div class="cadrePost" id="envoyerOffre">
                    <p > <a href="" class="cadrePostText">Envoyer la candidature</a></p>
                </div>
    </div>
    </section>
    <?php require_once "footer.php" ?>
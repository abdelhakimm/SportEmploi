<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../View/css/style.css">
    <link rel="stylesheet" href="../View/fontawesome/css/all.css">
</head>
<body>
    <?php require_once "headerRouter.php" ?>
    <section>
        <div class="textHaut">
            <p class="paragrapheHaut">TOUTE LES OFFRES QUE NOUS PROPOSONS SONT ICI : </p>
        </div>
        <?php foreach($offers as $offer):?>
        <div id="sectionPost">
            <div class="postAdd">
                <p class="postAddUn"><?=$offer["Name_Offer"]?></p>
                <p class="postAddDeux"><?=$offer["Contrat_Type"]?>-<?=$offer["Name_Business"]?>-<?=$offer["City"]?></p>
                <p class="postAddTrois"><?=$offer["Description"]?></p>
                <div class="cadrePost">
                <input type="submit" value="Postuler" class="cadrePostText">
                </div>
            </div>
        </div>
        <?php endforeach ?>
    </section>
    <?php require_once "footerRouter.php" ?>
</body>
</html>